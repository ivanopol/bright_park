<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateScrollEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:scrolls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $redis = Redis::connection();

        $scroll_keys = $redis->keys('*scroll*');

        foreach ($scroll_keys as $scroll_key) {
            $scroll_event = json_decode($redis->get($scroll_key));

            $values = [
                'timestamp' => $scroll_event->timestamp,
                'position' => $scroll_event->btn_id,
                'user_ip' => $scroll_event->user_ip,
                'previous_position' => $scroll_event->href,
                'location' => $scroll_event->location,
                'page_height' => $scroll_event->page_height
            ];

            DB::table('scroll_events')->insert($values);

            $redis->del($scroll_key);
        }
    }
}
