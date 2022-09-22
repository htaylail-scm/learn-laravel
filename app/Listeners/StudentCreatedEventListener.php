<?php

namespace App\Listeners;

use App\Events\StudentCreatedEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentCreatedEventListener
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
     * @param  \App\Events\StudentCreatdEvent  $event
     * @return void
     */
    public function handle(StudentCreatedEvent $event)
    {
        Log::info("Student created successfulluy..." .$event->student);
    }
}
