<?php

namespace Mapado\Sdk\Client;

/**
 * Class FavoriteClient
 * @author Julien Deniau <julien.deniau@mapado.com>
 */
class FavoriteClient extends AbstractClient
{
    const FAVORITE_URL = '/users';

    public function findByUserUuid($userUuid)
    {
        return $this->transformer->transformList($this->apiGet('/' . $userUuid . '/favorites')->json());
    }

    /**
     * @{inheritedDoc}
     */
    protected function getRootUrl()
    {
        return self::FAVORITE_URL;
    }
}
