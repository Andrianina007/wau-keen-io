<?php
/**
 * User: bundinho
 * Date: 3/22/17
 * Time: 9:43 AM
 */

namespace WauKeenIo\Observer;


interface ObserverInterface
{
    public function update(ObservableInterface $subject_in);
}