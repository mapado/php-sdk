<?php

namespace Mapado\Sdk;

use Mapado\Sdk\Client;
use Mapado\Sdk\Model\AccessToken;

class Client
{
    /**
     * accessToken
     *
     * @var AccessToken
     * @access private
     */
    private $accessToken;

    /**
     * rubric
     *
     * @var Client\RubricClient
     * @access public
     */
    public $rubric;

    /**
     * user
     *
     * @var Client\UserClient
     * @access public
     */
    public $user;

    /**
     * __construct
     *
     * @param AccessToken $accessToken
     * @access public
     */
    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;

        $this->rubric = new Client\RubricClient($accessToken);
        $this->user = new Client\UserClient($accessToken);
    }
}
