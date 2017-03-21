<?php

namespace WauKeenIo\Models;

use WauKeenIo\Creationals\SingletonKeenIoClient;
/**
 * Description of KeenIoItem
 * Parent class for all event that will be fire in the Keen.io
 *
 * @author Andrianina OELIMAHEFASON
 */
abstract class KeenIoItem {
    /**
     * The KeenIoClient
     * @var KeenIoClient 
     */
    protected $keenIoClient;
    
    /**
     * Date where the event was triggered
     * @var string
     */
    public $eventDate;
    
    /**
     * Construct a keenIoITem, should be use an signelton
     * when creating the keenIo client outside of this
     * @param array $item
     */
    public function __construct(array $item) {
        $this->eventDate = (new \DateTime())->format("Y-m-d h:i");
        $this->keenIoClient = SingletonKeenIoClient::getInstance();
        $this->init($item);
    }
    
    /**
     * Set array $data to the class properties
     * @param array $datas
     */
    protected function init($datas) {
        foreach ($datas as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    
    /**
     * Send the event objects to Keen.io
     * @param array $datas Data to send to Keen.Io
     */
    public abstract function addEvent($datas);
}
