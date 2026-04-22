<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobOpening extends Model
{
    /** @use HasFactory<\Database\Factories\JobOpeningFactory> */
    use HasFactory;

    public $fillable = [
        "id",
        "user_id",
        "naam_hond",
        "honger",
        "energy",
        "blijheidsmeter",
        "hygiene",
        "remember_token",
        "timestamps",

    ];
}