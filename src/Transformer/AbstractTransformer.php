<?php

namespace Mapado\Sdk\Transformer;

abstract class AbstractTransformer implements TransformerInterface
{
    /**
     * {@inheritedDoc}
     */
    public function transformList(array $list, $key = 'data')
    {
        $return = [];
        $datas = !empty($key) ? $list[$key] : $list;
        foreach ($datas as $item) {
            $return[] = $this->transformItem($item);
        }

        return $return;
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
