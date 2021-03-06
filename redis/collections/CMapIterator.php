<?php

/**
 * CMapIterator implements an interator for {@link CMap}.
 *
 * It allows CMap to return a new iterator for traversing the items in the map.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package yii\liuxy\redis\collections
 * @since 1.0
 */
namespace yii\liuxy\redis\collections;

class CMapIterator implements \Iterator {
    /**
     * @var array the data to be iterated through
     */
    private $_d;
    /**
     * @var array list of keys in the map
     */
    private $_keys;
    /**
     * @var mixed current key
     */
    private $_key;

    /**
     * Constructor.
     * @param array $data the data to be iterated through
     */
    public function __construct (&$data) {
        $this->_d =& $data;
        $this->_keys = array_keys ($data);
        $this->_key = reset ($this->_keys);
    }

    /**
     * Rewinds internal array pointer.
     * This method is required by the interface Iterator.
     */
    public function rewind () {
        $this->_key = reset ($this->_keys);
    }

    /**
     * Returns the key of the current array element.
     * This method is required by the interface Iterator.
     * @return mixed the key of the current array element
     */
    public function key () {
        return $this->_key;
    }

    /**
     * Returns the current array element.
     * This method is required by the interface Iterator.
     * @return mixed the current array element
     */
    public function current () {
        return $this->_d[$this->_key];
    }

    /**
     * Moves the internal pointer to the next array element.
     * This method is required by the interface Iterator.
     */
    public function next () {
        $this->_key = next ($this->_keys);
    }

    /**
     * Returns whether there is an element at current position.
     * This method is required by the interface Iterator.
     * @return boolean
     */
    public function valid () {
        return $this->_key !== false;
    }
}
