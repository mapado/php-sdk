<?php

namespace Mapado\Sdk\Client;

class ActivityClient extends AbstractClient
{
    const ACTIVITY_URL = '/activities';

    /**
     * find activities by parameters
     *
     * @param array $parameters
     * @access public
     * @return array
     */
    public function findBy(array $parameters = [])
    {
        return $this->transformer->transformList($this->apiGet('', $parameters)->json());
    }

    /**
     * find one activity by uuid
     *
     * @param string $uuid
     * @access public
     * @return array
     */
    public function findOne($uuid)
    {
        return $this->transformer->transformItem($this->apiGet('/' . $uuid)->json());
    }

    /**
     * program
     *
     * @param string $uuid
     * @access public
     * @return array
     */
    public function program($uuid)
    {
        return $this->apiGet('/' . $uuid . '/program')->json();
    }

    /**
     * @{inheritedDoc}
     */
    protected function getRootUrl()
    {
        return self::ACTIVITY_URL;
    }
}
