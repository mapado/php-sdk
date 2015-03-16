<?php

namespace Mapado\Sdk\Tests\Units;

use atoum;
use GuzzleHttp\Client as HttpClient;
use Symfony\Component\Yaml\Yaml;

class Oauth extends atoum
{
    /**
     * clientId
     *
     * @var string
     * @access private
     */
    private $clientId;

    /**
     * clientSecret
     *
     * @var string
     * @access private
     */
    private $clientSecret;

    /**
     * username
     *
     * @var string
     * @access private
     */
    private $username;

    /**
     * password
     *
     * @var string
     * @access private
     */
    private $password;

    /**
     * http
     *
     * @var HttpClient
     * @access private
     */
    private $http;

    /**
     * beforeTestMethod
     *
     * @param string $method
     * @access public
     * @return void
     */
    public function beforeTestMethod($method)
    {
        $params = Yaml::parse(file_get_contents(__DIR__ . '/../parameters.yml'))['parameters'];

        $this->http = new HttpClient();
        $this->clientId = $params['client_id'];
        $this->clientSecret = $params['client_secret'];
        $this->username = $params['username'];
        $this->password = $params['password'];
    }

    /**
     * testClientToken
     *
     * @access public
     * @return void
     */
    public function testClientToken()
    {
        $this
            ->given($this->newTestedInstance($this->http, $this->clientId, $this->clientSecret))

                ->if($token = $this->testedInstance->getClientToken())
                ->object($token)
                    ->isInstanceOf('\Mapado\Sdk\Model\AccessToken')
                ->string($token->getAccessToken())
                    ->isNotEmpty()
                ->variable($token->getRefreshToken())
                    ->isNull()

            ->if($this->newTestedInstance($this->http, 'wrong client_id', 'wrong client password'))
            ->then
                ->exception(function () {
                    $this->testedInstance->getClientToken();
                })
                    ->isInstanceOf('GuzzleHttp\Exception\ClientException')
        ;
    }

    /**
     * testPasswordToken
     *
     * @access public
     * @return void
     */
    public function testPasswordToken()
    {
        $this
            ->if($this->newTestedInstance($this->http, $this->clientId, $this->clientSecret))
            ->then
                ->exception(function () {
                    $this->testedInstance->getUserToken('no_user', 'wrong_password');
                })
                    ->isInstanceOf('GuzzleHttp\Exception\ClientException')
            ->if($token = $this->testedInstance->getUserToken('test@mapado.com', 'test'))
            ->then
                ->string($token->getAccessToken())
                    ->isNotEmpty()
            ->then
                ->string($token->getRefreshToken())
                    ->isNotEmpty()
        ;
    }

    /**
     * testRefreshToken
     *
     * @access public
     * @return void
     */
    public function testRefreshToken()
    {
        $this
            ->given($this->newTestedInstance($this->http, $this->clientId, $this->clientSecret))
            ->and($token = $this->testedInstance->getUserToken('test@mapado.com', 'test'))
            ->if($rToken = $this->testedInstance->refreshUserToken($token->getRefreshToken()))
            ->then
                ->string($rToken->getAccessToken())
                    ->isNotEmpty()
                    ->isNotEqualTo($token->getAccessToken())
                ->string($rToken->getRefreshToken())
                    ->isNotEmpty()

        ;
    }
}
