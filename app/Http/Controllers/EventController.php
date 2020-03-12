<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function write_event(Request $request)
    {
        $content = json_decode($request->getContent());

        $event = [
            'location' => $content->location,
            'href' => $content->href,
            'btn_id' => $content->btn_id,
            'user_ip' => $_SERVER['REMOTE_ADDR'],
            'timestamp' => date("Y-m-d H:i:s")
        ];

        Redis::set('btn_event_'.$_SERVER['REMOTE_ADDR'].'_'. $content->btn_id.'_'. date("Y-m-d H:i:s"), json_encode($event));

        return \Response::noContent();
    }
}
