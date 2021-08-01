<?php

namespace App\Traits;

trait HasComputedOnceAttributes
{
    private $computed_once_values = [];

    /**
     * Get a plain attribute (not a relationship).
     * Return computed value if the key in computed_once_attributes.
     *
     * @param  string  $key
     * @return mixed
     */
    public function getAttributeValue($key)
    {
        if ($key && in_array($key, $this->getComputedOnceAttributes(), true)) {
            if (!array_key_exists($key, $this->computed_once_values)) {
                $this->computed_once_values[$key] = parent::getAttributeValue($key);
            }
            return $this->computed_once_values[$key];
        }

        return parent::getAttributeValue($key);
    }

    /**
     * Return computed_once_attributes property.
     *
     * @return array
     */
    protected function getComputedOnceAttributes()
    {
        return $this->computed_once_attributes ?? [];
    }
}
