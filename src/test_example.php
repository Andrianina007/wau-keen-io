<?php

define('KEENIO_PROJECT_ID', '58cf95a395cfc91c2b8e507e');
define('KEENIO_WRITE_KEY', 'E4F3CB88ACE8861633B18E7C822A50F1FDBD29B4B08D3242E79DF30B2D25595B1918DCA89AAA168628A42FCCB133A0F76AD547420C0590BED71698FD5CC93A8F05E78C483B0B3C0809E6BFE92E8BACB7EAF54A4AD5C94B8DB7F4D8C7AA79B60D');


$datas = array(
    'hookType'      => 'item',
    'firingEvent'   => 'item.create',
    'link'          => 'https://app.plecto.com/admin/data-sources/podio/hook/app_13946361/',
    'id'            => 654
);

$myFactory = WauKeenIo\Creationals\WAUKeenIoFactory::make('webhook', $datas);
$myFactory->addEvent();