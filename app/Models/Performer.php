<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'movie_id' => 1,            
            'overall_rating' => 7.9,            
            'title' => 'The Irishman',          
            'description' => 'An aging hitman recalls his time with the mob and the intersecting events with his friend, Jimmy Hoffa, through the 1950-70s.',
            'performer' => 'Al Pacino'
        ]
    ];
}
