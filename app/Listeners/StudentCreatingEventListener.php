<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use App\Events\StudentCreatingEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentCreatingEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\StudentCreatingEvent  $event
     * @return void
     */
    public function handle(StudentCreatingEvent $event)
    {
        Log::info('Student creating process running...'.$event->student);
    }
}
