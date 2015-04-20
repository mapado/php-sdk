<?php

namespace Mapado\Sdk\Model;

/**
 * Class MapadoList
 * @author Julien Deniau <julien.deniau@mapado.com>
 */
class MapadoList implements \IteratorAggregate
{
    /**
     * data
     *
     * @var \Traversable
     * @access private
     */
    private $data;

    /**
     * __construct
     *
     * @param \Traversable $data
     * @access public
     */
    public function __construct(\Traversable $data = null)
    {
        $this->data = $data;
    }

    /**
     * getIterator
     *
     * @access public
     * @return Iterator
     */
    public function getIterator()
    {
        return $this->data;
    }

    //public function getTotalCount()
    //{
    //}
}
