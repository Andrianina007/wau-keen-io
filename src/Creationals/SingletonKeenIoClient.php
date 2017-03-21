<?php

namespace WauKeenIo\Creationals;

use KeenIO\Client\KeenIOClient;
use WauKeenIo\Exceptions\KeenIoItemException;

/**
 * Description of SingletonKeenIoClient
 *
 * @author Andrianina OELIMAHEFASON
 */
final class SingletonKeenIoClient {
    private static $keenIoClient;
    
    protected function __construct() {
        //Thou shalt not construct that which is unconstructable!
    }
    
    public static function getInstance() {
        if (is_null(self::$keenIoClient) || !isset(self::$keenIoClient)) {
            if (!defined(KEENIO_PROJECT_ID) && !defined(KEENIO_WRITE_KEY)) {
                throw new KeenIoItemException("Keen.Io projectId or writeKey is not defined with KEENIO_PROJECT_ID or KEENIO_WRITE_KEY");
            } else {
                self::$keenIoClient = KeenIOClient::factory([
                    'projectId' => KEENIO_PROJECT_ID,
                    'writeKey' => KEENIO_WRITE_KEY
                ]);
            }
        }
        return self::$keenIoClient;
    }
}
