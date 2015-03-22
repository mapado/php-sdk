<?php

namespace Mapado\Sdk\Tests\Units\Client;

use atoum;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Subscriber\Mock;
use GuzzleHttp\Subscriber\History;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Stream\Stream;
use Mapado\Sdk\Model\AccessToken;

/**
 * Class ActivityClient
 * @author Julien Deniau <julien.deniau@mapado.com>
 */
class ActivityClient extends atoum
{
    private $token;
    private $transformer;

    public function beforeTestMethod($method)
    {
        $this->token = new AccessToken;
        $addressTansformer = new \Mapado\Sdk\Transformer\AddressTransformer();
        $this->transformer = new \Mapado\Sdk\Transformer\ActivityTransformer($addressTansformer);
    }

    public function testFindBy()
    {
        $http = new HttpClient();
        $history = new History();
        $mock = new Mock(
            [
                new Response(
                    200,
                    [],
                    Stream::factory('{"data":[]}')
                ),
            ]
        );

        $http->getEmitter()->attach($mock);
        $http->getEmitter()->attach($history);

        $this
            ->given($instance = $this->newTestedInstance($http, $this->token, $this->transformer))
            ->then
                ->array($instance->findBy(['image_sizes' => ['320x160', '640x320']]))
            ->given($lastRequest = $history->getLastRequest())
            ->then
                ->string($lastRequest->getUrl())
                ->contains('image_sizes%5B0%5D=320x160')
                ->contains('image_sizes%5B1%5D=640x320')
        ;
    }
}
