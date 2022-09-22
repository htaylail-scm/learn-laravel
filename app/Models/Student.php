<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\StudentCreatingEvent;
use App\Events\StudentCreatedEvent;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email','phone','grade','age'];

    protected $dispatchesEvents = [
        "creating" => StudentCreatingEvent::class,
        "created" => StudentCreatedEvent::class,
        //..
    ]; 
}
