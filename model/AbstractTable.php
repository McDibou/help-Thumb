<?php

class AbstractTable
{
    final public function __construct(array $tab)
    {
        $this->hydrate($tab);
    }

    final protected function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $keyToArray = explode("_", $key);
            $methodSetters = "set";
            foreach ($keyToArray as $word) {
                $methodSetters .= ucfirst($word);
            }
            if (method_exists($this, $methodSetters)) {
                $this->$methodSetters($value);
            }
        }
    }

    public function __set($name, $value)
    {
        if (!property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            trigger_error('', E_USER_NOTICE);
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        } else {
            trigger_error('', E_USER_NOTICE);
        }
    }
}