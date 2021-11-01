<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'movie_id' => 2,
            'title' => 'Parasite',
            'genre' => 'comedy',
            'description' => 'A poor family, the Kims, con their way into becoming the servants of a rich family, the Parks. But their easy life gets complicated when their deception is threatened with exposure.',
        ],
        [
            'movie_id' => 3,
            'title' => 'The Favourite',
            'genre' => 'comedy',
            'description' => 'In early 18th century England, a frail Queen Anne occupies the throne and her close friend, Lady Sarah, governs the country in her stead. When a new servant, Abigail, arrives, her charm endears her to Sarah.',
        ],
        [
            'movie_id' => 4,
            'title' => 'The Farewell I',
            'genre' => 'comedy',
            'description' => 'A Chinese family discovers their grandmother has only a short while left to live and decide to keep her in the dark, scheduling a wedding to gather before she dies.',
        ],
        [
            'movie_id' => 11,
            'title' => 'Marriage Story',
            'genre' => 'comedy',
            'description' => 'Noah Baumbach\'s incisive and compassionate look at a marriage breaking up and a family staying together.',
        ],
        [
            'movie_id' => 12,
            'title' => 'Booksmart',
            'genre' => 'comedy',
            'description' => 'On the eve of their high school graduation, two academic superstars and best friends realize they should have worked less and played more. Determined not to fall short of their peers, the girls try to cram four years of fun into one night.',
        ],
    ];

    protected function sushiShouldCache()
    {
        return true;
    }
}
