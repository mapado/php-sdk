<?php

namespace Mapado\Sdk\Client;

class ActivityClient extends AbstractClient
{
    const ACTIVITY_URL = '/activities';

    /**
     * activities
     *
     * @param array $parameters
     * @access public
     * @return array
     */
    public function activities(array $parameters = [])
    {
        return $this->apiGet('', $parameters)->json();
    }

    /**
     * activity
     *
     * @param string $uuid
     * @access public
     * @return array
     */
    public function activity($uuid)
    {
        return $this->apiGet('/' . $uuid)->json();
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
