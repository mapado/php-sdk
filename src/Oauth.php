<?php

namespace Mapado\Sdk;

use GuzzleHttp\Client as HttpClient;
use Mapado\Sdk\Model\AccessToken;

class Oauth
{
    const TOKEN_URL = '/oauth/v2/token';
    const HOST = 'https://oauth2.mapado.com';

    /**
     * __construct
     *
     * @param string $clientId
     * @param string $clientSecret
     * @access public
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;

        $this->http = new HttpClient(['base_url' => self::HOST]);
    }

    /**
     * getClientToken
     *
     * @access public
     * @return AccessToken
     */
    public function getClientToken()
    {
        return $this->callOauth([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'grant_type' => 'client_credentials',
        ]);
    }

    /**
     * getUserToken
     *
     * @param string $username
     * @param string $password
     * @access public
     * @return AccessToken
     */
    public function getUserToken($username, $password)
    {
        return $this->callOauth([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'grant_type' => 'password',
            'username' => $username,
            'password' => $password,
        ]);
    }

    /**
     * refreshUserToken
     *
     * @param string $refreshToken
     * @access public
     * @return AccessToken
     */
    public function refreshUserToken($refreshToken)
    {
        return $this->callOauth([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
        ]);
    }

    /**
     * callOauth
     *
     * @param array $datas post datas
     * @access private
     * @return array
     */
    private function callOauth($datas)
    {
        $response = $this->http->post(
            self::TOKEN_URL,
            [
                'body' => $datas
            ]
        );

        return $this->transformToModel($response->json());
    }

    /**
     * transformToModel
     *
     * @param array $datas
     * @access private
     * @return AccessToken
     */
    private function transformToModel(array $datas)
    {
        $model = new AccessToken();

        $model->setAccessToken($datas['access_token'])
            ->setExpiresAt(new \DateTime('+ ' . $datas['expires_in'] . 'sec'))
            ->setTokenType($datas['token_type'])
            ->setScope($datas['scope'])
        ;

        if (isset($datas['refresh_token'])) {
            $model->setRefreshToken($datas['refresh_token']);
        }

        return $model;
    }
}
