<?php
/**
 * User: bundinho
 * Date: 3/21/17
 * Time: 2:30 PM
 */

namespace WauKeenIo\Observer;


abstract class AbstractObserver
{
    public abstract function update(AbstractSubject $subject_in);
}