<?php
// strongly typed array of strings
// based on https://www.howtogeek.com/devops/approaches-to-creating-typed-arrays-in-php/#collection-classes

class StringArray implements IteratorAggregate, Countable, ArrayAccess  {
    private array $strings;

    public function __construct(string ...$strings) 
    {
        $this->strings = $strings;
    }

    public function getIterator() : ArrayIterator 
    {
        return new ArrayIterator($this->strings);
    }

    public function count() : int 
    {
        return count($this->strings);
    }

    public function offsetExists($offset) : bool 
    {
        return isset($this->strings[$offset]);
    }

    public function offsetGet($offset) : string 
    {
        return $this->strings[$offset];
    }

    public function offsetSet($offset, $value) : void 
    {
        if ($value instanceof string) 
        {
            $this -> strings[$offset] = $value;
        }
        else throw new TypeError("Not a string!");
    }

    public function offsetUnset($offset) : void 
    {
        unset($this -> string[$offset]);
    }
}
?>