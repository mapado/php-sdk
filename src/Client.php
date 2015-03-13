<?php

namespace Mapado\Sdk;

use Mapado\Sdk\Client;
use Mapado\Sdk\Model\AccessToken;
use Mapado\Sdk\Transformer;

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
     * activity
     *
     * @var Client\ActivityClient
     * @access public
     */
    public $activity;

    /**
     * __construct
     *
     * @param AccessToken $accessToken
     * @access public
     */
    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;

        // create transformers
        $addressTransformer = new Transformer\AddressTransformer();
        $activityTransformer = new Transformer\ActivityTransformer($addressTransformer);
        $rubricTransformer = new Transformer\RubricTransformer();
        $userTransformer = new Transformer\UserTransformer();
        $favoriteTransformer = new Transformer\FavoriteTransformer($activityTransformer);

        // create client
        $this->rubric = new Client\RubricClient($accessToken, $rubricTransformer);
        $this->user = new Client\UserClient($accessToken, $userTransformer);
        $this->activity = new Client\ActivityClient($accessToken, $activityTransformer);
        $this->address = new Client\AddressClient($accessToken, $addressTransformer);
        $this->favorites = new Client\FavoriteClient($accessToken, $favoriteTransformer);
    }
}
