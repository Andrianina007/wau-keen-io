<?php

namespace WauKeenIo\Models;

use WauKeenIo\Models\KeenIoItem;
use WauKeenIo\Helpers\Interpreter\KeenIoItemParser;
/**
 * Description of ApiKeenIoItem
 *
 * @author Andrianina OELIMAHEFASON
 */
class PodioApiKeenIoItem extends KeenIoItem {
    
    private $eventsType = 'podio_api';
    
    private $eventType = 'podio_apis';
    
    private $url;
    
    /*
     * The firing events, ex: Podio
     */
    private $firingEvents;
    
    /**
     * Send an event to Keen.Io
     */
    public function addEvent() {
        $datas = (new KeenIoItemParser)->parse($this);
        
        $this->keenIoClient->addEvent($this->eventsType, array($this->eventType => $datas));
    }

}
