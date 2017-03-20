<?php

namespace WauKeenIo\Models;

use KeenIO\Client\KeenIOClient;
/**
 * Description of KeenIoItem
 *
 * @author Andrianina OELIMAHEFASON
 */
abstract class KeenIoItem {
    protected $keenIoClient;
    
    public $eventDate;
    
    public function __construct() {
        $this->eventDate = new \DateTime();
        // May need use Singleton when created an app and est it here
        $this->keenIoClient = KeenIOClient::factory([
          'projectId' => '58cf95a395cfc91c2b8e507e',
          'writeKey' => 'E4F3CB88ACE8861633B18E7C822A50F1FDBD29B4B08D3242E79DF30B2D25595B1918DCA89AAA168628A42FCCB133A0F76AD547420C0590BED71698FD5CC93A8F05E78C483B0B3C0809E6BFE92E8BACB7EAF54A4AD5C94B8DB7F4D8C7AA79B60D'
        ]);
    }
    
    public abstract function addEvent();
}
