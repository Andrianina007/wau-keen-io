<?php
/**
 * User: bundinho
 * Date: 3/22/17
 * Time: 9:53 AM
 */

namespace WauKeenIo\Observer;


use WauKeenIo\Creationals\WAUKeenIoFactory;

class LaravelWebhookObserver extends AbstractObserver
{
    /**
     * Map between the event type and the hook type
     * @var array
     */
    protected $map = [
        //app|app_field
        'item.create' => ['app'],
        'item.update' => ['app', 'app_field'],
        'item.delete' => ['app'],
        'comment.create' => ['app'],
        'comment.delete' => ['app'],
        'file.change' => ['app'],
        'app.update' => ['app'],
        'app.delete' => ['app'],
        'form.create' => ['app'],
        'form.update' => ['app'],
        'form.delete' => ['app'],

        //space
        'app.create' => ['space'],
        'task.create' => ['space'],
        'task.update' => ['space'],
        'task.delete' => ['space'],
        'member.add' => ['space'],
        'member.remove' => ['space'],
        'status.create' => ['space'],
        'status.update' => ['space'],
        'status.delete' => ['space'],

        //hook

        'hook.verify' => ['hooks'],
    ];
    /**
     * Here, $subject_in should be a Laravel|Symfony Request instance
     * @param ObservableInterface $subject_in
     */
    public  function update(ObservableInterface $subject_in)
    {
        if(!defined('KEENIO_PROJECT_ID')) {
            define('KEENIO_PROJECT_ID', config('keenio.PROJECT_ID'));
        }
        if(!defined('KEENIO_WRITE_KEY')) {
            define('KEENIO_WRITE_KEY', config('keenio.WRITE_KEY'));
        }

        $request = $subject_in->getRawData();
        $datas = $request->all();

        $finalData = [];
        $finalData['fullRequest'] = $datas;
        $finalData['firingEvent'] = $datas['type'];
        $finalData['id'] = $datas['hook_id'];
        $finalData['hookType'] =$this->retrieveHookType($datas['type']);
        $finalData['link'] = $request->fullUrl();

        print_r($finalData);

        $myFactory = WAUKeenIoFactory::make('webhook', $finalData);
        $myFactory->addEvent();
    }

    /**
     * Retrieve the hook type
     *
     * @param $key
     * @return null|string
     */
    protected function retrieveHookType($key)
    {
        if(!array_key_exists($key, $this->map)) {
            return null;
        }
        return implode('|', $this->map[$key]);
    }
}