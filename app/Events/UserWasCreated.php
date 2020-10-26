<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserWasCreated
{
    use Dispatchable, SerializesModels;

    public $usuario;
    public $password;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($usuario, $password)
    {
        //
        $this->usuario = $usuario;
        $this->password = $password;


    }

    
}
