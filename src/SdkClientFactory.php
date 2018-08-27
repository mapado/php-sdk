<?php

namespace Mapado\Sdk;

use League\OAuth2\Client\Token\AccessToken;
use Mapado\RestClientSdk\Mapping;
use Mapado\RestClientSdk\Mapping\Driver\AnnotationDriver;
use Mapado\RestClientSdk\RestClient;
use Mapado\RestClientSdk\SdkClient as RestSdkClient;

class SdkClientFactory
{
    private const API_HOST = 'https://api.mapado.net';
    private const API_PREFIX = '/v2';

    /**
     * @var array<RestSdkClient>
     */
    private $clientList;

    /**
     * @var Mapping
     */
    private $mapping;

    /**
     * @param string $cachePath
     */
    public function __construct($cachePath)
    {
        $annotationDriver = new AnnotationDriver($cachePath);

        $this->mapping = new Mapping(self::API_PREFIX);
        $this->mapping->setMapping($annotationDriver->loadDirectory(__DIR__ . '/Entity/'));
    }

    public function getClient(AccessToken $accessToken): RestSdkClient
    {
        $token = $accessToken->getToken();
        if (!isset($this->clientList[$token])) {
            $guzzleClient = new GuzzleHttp\Client(['headers' => ['Authorization' => 'Bearer ' . $token]]);
            $restClient = new RestClient($guzzleClient, self::API_HOST);

            $this->clientList[$token] = new RestSdkClient($restClient, $this->mapping);
        }

        return $this->clientList[$token];
    }
}
