<?php

declare(strict_types=1);

namespace BitWasp\Bitcoin\Transaction\Mutator;

abstract class AbstractCollectionMutator implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * @var \SplFixedArray
     */
    protected $set;

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->set->toArray();
    }

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return count($this->set) === 0;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->set->getIterator()->count();
//        return $this->set->count();
    }

    /**
     *
     */
    public function rewind()
    {
        $this->set->getIterator()->rewind();
//        $this->set->rewind();
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->set->getIterator()->current();
//        return $this->set->current();
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->set->getIterator()->key();
//        return $this->set->key();
    }

    /**
     *
     */
    public function next()
    {
        $this->set->getIterator()->next();
//        $this->set->next();
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->set->getIterator()->valid();
//        return $this->set->valid();
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return $this->set->getIterator()->offsetExists($offset);
//        return $this->set->offsetExists($offset);
    }

    /**
     * @param int $offset
     */
    public function offsetUnset($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new \InvalidArgumentException('Offset does not exist');
        }

        $this->set->getIterator()->offsetUnset($offset);
//        $this->set->offsetUnset($offset);
    }

    /**
     * @param int $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if (!$this->set->getIterator()->offsetExists($offset)) {
//        if (!$this->set->offsetExists($offset)) {
            throw new \OutOfRangeException('Nothing found at this offset');
        }
        return $this->set->getIterator()->offsetGet($offset);
//        return $this->set->offsetGet($offset);
    }

    /**
     * @param int $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        return $this->set->getIterator()->offsetSet($offset, $value);
//        $this->set->offsetSet($offset, $value);
    }
}
