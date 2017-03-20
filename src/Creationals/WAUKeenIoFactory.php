<?php
namespace WauKeenIo\Creationals;

use WauKeenIo\Interfaces\InterfaceWAUKeenIOFactoryMethod;

class WAUKeenIoFactory implements InterfaceWAUKeenIOFactoryMethod {
    
    public static function make($datas) {
        
        switch ($datas['type']) {
            case 'webhook':
                return ;
        }
    }

}
