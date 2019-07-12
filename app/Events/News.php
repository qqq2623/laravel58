<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class News implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

	public $news;
    /**
     * Create a new event instance.
     *
     * @return void
     */

//	public $broadcastQueue = 'zhangyu';

    public function __construct($news)
    {
        $this->news = $news;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
//	    echo $this->news;
        return new Channel('news');
    }
}



