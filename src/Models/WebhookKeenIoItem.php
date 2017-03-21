<?php

namespace WauKeenIo\Models;

use WauKeenIo\Models\KeenIoItem;
use WauKeenIo\Helpers\Interpreter\KeenIoItemParser;
/**
 * Description of WebhookKeenIoItem
 *
 * @author Andrianina OELIMAHEFASON
 */
class WebhookKeenIoItem extends KeenIoItem{
    
    private $eventsType = 'webhooks';
    
    private $eventType = 'webhook';
    
    /**
     * The Type of the hook, ex : app | space | app_field
     * @var String 
     */
    public $hookType;
    
    /**
     * The firing event, ex : item.create, item.update....
     * @var string 
     */
    public $firingEvent;
    
    /**
     * Link for the webhook
     * @var string
     */
    public $link;
    
    /**
     * id of the webhook
     * @var integer
     */
    public $id;
    
    public function addEvent() {
        $datas = (new KeenIoItemParser)->parse($this);
        
        $this->keenIoClient->addEvent($this->eventsType, array($this->eventType => $datas));
    }
}
