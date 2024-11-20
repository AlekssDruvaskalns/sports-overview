<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basketball extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'name',
        'team',
        'jersey_number',
        'position',
        'height',
        'weight',
        'age',
        'draft_year',
        'draft_pick',
        'birthdate',
        'country',
        'experience',
    ];
}
