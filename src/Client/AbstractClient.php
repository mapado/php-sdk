<?php

namespace Mapado\Sdk\Client;

use Mapado\Sdk\Model\AccessToken;

abstract class AbstractClient extends \GuzzleHttp\Client
{
    const VERSION_URL = '/v1';
    const HOST = 'https://api.mapado.com';

    /**
     * __construct
     *
     * @param AccessToken $accessToken
     * @access public
     */
    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;

        parent::__construct(['base_url' => self::HOST]);
    }

    /**
     * apiGet
     *
     * @param string $rootUrl
     * @param string $url
     * @access protected
     * @return Response
     * @throw \OAuth2\OAuth2Exception
     */
    protected function apiGet($url = '', array $parameters = [])
    {
        if (!empty($parameters)) {
            $url .= '?' . http_build_query($parameters);
        }

        $url = self::VERSION_URL . $this->getRootUrl() . $url;
        $auth = 'Bearer ' . $this->accessToken->getAccessToken();

        return parent::get($url, ['headers' => [ 'Authorization' => $auth ]]);
    }

    /**
     * getRootUrl
     *
     * @abstract
     * @access public
     * @return string
     */
    abstract protected function getRootUrl();
}
