<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class artikel extends Model
{
    use HasTrixRichText;
    public function getCreatedAtAttribute($value)
    {
        // Convert the date to the desired format (d/M/Y) using Carbon
        return Carbon::parse($value)->format('l, j F Y');
    }
    protected $guarded = [];
}
