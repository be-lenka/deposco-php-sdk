<?php

namespace BeLenka\Deposco;

use \Exception;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BeLenka\Deposco\ApiException;
use BeLenka\Deposco\Configuration;
use BeLenka\Deposco\HeaderSelector;
use BeLenka\Deposco\ObjectSerializer;

/**
 * Auth Class for handling OAuth2 authentication with the Deposco API.
 *
 * @category Class
 * @package  BeLenka\Deposco
 */
class Auth
{
    const AUTH_HOSTNAME = 'https://auth.deposco.com';

    /**
     * @var string Client ID for OAuth2 authentication
     */
    private $clientId;

    /**
     * @var string Client Secret for OAuth2 authentication
     */
    private $clientSecret;

    /**
     * @var Configuration Configuration object for the Deposco API
     */
    private $config;

    /**
     * @var string Refresh token for OAuth2 authentication
     */
    private $refreshToken;

    /**
     * Constructor
     *
     * @param string $clientId Client ID for OAuth2 authentication
     * @param string $clientSecret Client Secret for OAuth2 authentication
     * @param string $refreshToken Refresh token for OAuth2 authentication
     * @param Configuration $config Configuration object for the Deposco API
     * @throws Exception If the client ID or client secret is not provided
     */
    public function __construct($clientId, $clientSecret, $refreshToken, $config)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->config = $config;
        $this->refreshToken = $refreshToken;
    }

    /**
     * Get the refresh token
     *
     * @return string|null The refresh token or null if not set
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Get the client ID
     *
     * @return string The client ID
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Get the client secret
     *
     * @return string The client secret
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Authenticate and retrieve an access token
     *
     * @return string The access token
     * @throws Exception If authentication fails
     */
    public function authenticate()
    {
        // Here you would implement the logic to authenticate with the Deposco API
        // and retrieve an access token using the client ID, client secret, and refresh token.
        if (empty($this->clientId) || empty($this->clientSecret)) {
            throw new Exception('Client ID and Client Secret must be set for authentication.');
        }

        // Check if the refresh token is set
        if (empty($this->refreshToken)) {
            throw new Exception('Refresh token must be set for authentication.');
        }

        // Prepare the request to get the access token
        $resourcePath = '/oauth2/token';
        $queryParams = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->refreshToken,
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];
        $headerParams = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        // Build the HTTP body
        $httpBody = http_build_query($queryParams);

        // Create the request
        $url = self::AUTH_HOSTNAME . $resourcePath;
        $request = new Request('POST', $url, $headerParams, $httpBody);

        // Send the request using Guzzle
        $options = $this->createHttpClientOption();
        $client = new Client($options);
        try {
            $response = $client->send($request);
            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                throw new Exception('Failed to authenticate. Status code: ' . $statusCode);
            }

            // Parse the response body to extract the access token
            $responseBody = (string) $response->getBody();
            $data = json_decode($responseBody, true);
            if (isset($data['access_token'])) {
                // Store the new access token in the configuration
                $this->config->setAccessToken($data['access_token']);
                return $data['access_token'];
            } else {
                throw new Exception('Access token not found in response.');
            }
        } catch (RequestException $e) {
            throw new Exception('Request failed: ' . $e->getMessage());
        } catch (ConnectException $e) {
            throw new Exception('Connection failed: ' . $e->getMessage());
        }
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
