<?php

namespace Mapado\Sdk\Client;

class UserClient extends AbstractClient
{
    const USER_URL = '/users';

    /**
     * me
     *
     * @access public
     * @return array
     */
    public function me()
    {
        return $this->apiGet('/me')->json();
    }

    /**
     * user
     *
     * @param string $uuid
     * @access public
     * @return array
     */
    public function findOne($uuid)
    {
        return $this->apiGet(self::USER_URL . '/' . $uuid)->json();
    }

    /**
     * @{inheritedDoc}
     */
    protected function getRootUrl()
    {
        return '';
    }
}
