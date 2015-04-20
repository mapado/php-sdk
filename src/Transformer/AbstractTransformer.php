<?php

namespace Mapado\Sdk\Transformer;

use Mapado\Sdk\Model\MapadoList;

abstract class AbstractTransformer implements TransformerInterface
{
    /**
     * {@inheritedDoc}
     */
    public function transformList(array $list, $key = 'data')
    {
        $datas = !empty($key) ? $list[$key] : $list;

        $return = [];
        foreach ($datas as $item) {
            $return[] = $this->transformItem($item);
        }

        $list = new MapadoList(new \ArrayIterator($return));

        return $list;
    }

    /**
     * getFromArray
     *
     * @param array $array
     * @param string $key
     * @access protected
     * @return mixed
     */
    protected function getFromArray($array, $key)
    {
        if (isset($array[$key])) {
            return $array[$key];
        }

        return substr($key, -5) === '_list' ? [] : null;
    }
}
