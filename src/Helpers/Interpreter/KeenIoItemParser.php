<?php

namespace WauKeenIo\Helpers\Interpreter;

use WauKeenIo\Helpers\Interpreter\AbstractItemParser;
use WauKeenIo\Models\KeenIoItem;

/**
 * Description of KeenIoItemParser
 *
 * @author Andrianina OELIMAHEFASON
 */
class KeenIoItemParser extends AbstractItemParser{
    
    /**
     * Parse the KeenIoItem class to an array (Interpreter for Keen.Io)
     * @param KeenIoItem $item The Keen.Io item object
     * @return array data that should be send to Keen.Io
     */
    public static function parse(KeenIoItem $item) {
        $this->item = $item;
        $this->checkAttribute($this->item->eventDate, $this->item);
        
        return $this->apply();
    }
    
    /**
     * Apply the parsing
     * @return array
     */
    private function apply() {
        $datas = array();
        foreach($this->item as $key => $property) {
            array_push($datas, array( $key => (array) $this->item->{$property}));
        }
        return $datas;
    }
}
