<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


// Artisan::command('mail:send {user}', function ($user) {
//     $this->info("Sending email to: {$user}!");
// });

// to run in terminal (php artisan say:hello -h)
// Artisan::command('say:hello {name}', function($name) {
//     $favoriteSnack = $this->ask('What is your favorite snack?');
 
//     $this->info(
//         "Hello, {$name}. Your favorite snack is {$favoriteSnack}!"
//     );
// })->describe('Give a warm welcome.');

Artisan::command('text:send {user}', function ($user) {
    // ...
    })->purpose('Send sms text to a user');
