<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    use HasFactory;

    public function getDate(){
        $date = Carbon::create($this->date, "Europe/Rome");
        return $date->toDateString();
    }
}
