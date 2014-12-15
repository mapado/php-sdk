<?php

namespace Mapado\Sdk\Client;

class RubricClient extends AbstractClient
{
    const RUBRIC_URL = '/rubrics';

    /**
     * top
     *
     * @access public
     * @return array
     */
    public function top()
    {
        return $this->apiGet('/top')->json();
    }

    /**
     * rubric
     *
     * @param string $uuid
     * @access public
     * @return array
     */
    public function rubric($uuid)
    {
        return  $this->apiGet('/' . $uuid)->json();
    }

    /**
     * rubrics
     *
     * @param array $parameters
     * @access public
     * @return array
     */
    public function rubrics(array $parameters = [])
    {
        return $this->apiGet('', $parameters)->json();
    }

    /**
     * @{inheritedDoc}
     */
    protected function getRootUrl()
    {
        return self::RUBRIC_URL;
    }
}
