<?php

namespace App\Listeners;
use App\Events\UserWasCreated;
use App\Mail\LoginCredentials;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLoginCredentials
{
   

    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        //Envia credenciales Login
      /*   dd($event->usuario->toArray(), $event->password); */
    
      Mail::to($event->usuario)->queue(
        new LoginCredentials($event->usuario , $event->password)
      );


    }
}
