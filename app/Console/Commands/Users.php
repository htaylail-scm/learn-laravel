<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Users extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To display the data in the users table using the custom artisan command';

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
     * @return int
     */
    public function handle()
    {
        $this->table(
            ['Name', 'Email'],
            User::all(['name', 'email'])->toArray()
        );
    }
}
