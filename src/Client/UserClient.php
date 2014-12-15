<?php

namespace Client;

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
     * @param mixed $uuid
     * @access public
     * @return array
     */
    public function user($uuid)
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
