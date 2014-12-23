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
     * find one rubric by uuid
     *
     * @param string $uuid
     * @access public
     * @return array
     */
    public function findOne($uuid)
    {
        return  $this->apiGet('/' . $uuid)->json();
    }

    /**
     * find rubrics by parameters
     *
     * @param array $parameters
     * @access public
     * @return array
     */
    public function findBy(array $parameters = [])
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
