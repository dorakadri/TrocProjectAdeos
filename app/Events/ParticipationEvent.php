<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ParticipationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
 
    public $date;
    public $event;
    public $eventId;



    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($event, $date,$eventId)
    {
        $this->eventId = $eventId;

        $this->event = $event;
        $this->date = $date;
        



    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('popup-channel');
    }

    /**
     * Broadcast  event  participation
     * 
     * @return void
     */
    public function broadcastAs()
    {
        return  'addedEvent' ;
    }


}
