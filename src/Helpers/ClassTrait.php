<?php

namespace WauKeenIo\Helpers;

use WauKeenIo\Exceptions\KeenIoItemException;
use WauKeenIo\Models\KeenIoItem;

trait ClassTrait {
    
    /**
     * Check if an property of class
     * @param string $attributeName The attribute to check
     * @param KeenIoItem $item The KeenIoItem
     * @return boolean
     * @throws KeenIoItemException
     */
    public function checkAttribute($attributeName, KeenIoItem $item) {
        if (!property_exists($item->{$attributeName})) {
            throw new KeenIoItemException("Attribute ". $attributeName." must be set.");
        } else {
            return true;
        }
    }
}

