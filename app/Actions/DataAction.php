<?php 
namespace App\Actions;



class DataAction {

    public static function getTimeSlot() {
        return [
            [
                'movie_id' => 1,
                'title' => 'The Irishman',
                'theater_name' => 'abc movies',
                'start_time' => '2020-04-04T09:00:00',
                'end_time' => '2020-04-04T12:00:00',
                'description' => 'An aging hitman recalls his time with the mob and the intersecting events with his friend, Jimmy Hoffa, through the 1950-70s.',
                'room_no' => 1,
            ],
            [
                'movie_id' => 2,
                'title' => 'Parasite',
                'theater_name' => 'abc movies',
                'start_time' => '2020-04-04T10:00:00',
                'end_time' => '2020-04-04T13:00:00',
                'description' => 'A poor family, the Kims, con their way into becoming the servants of a rich family, the Parks. But their easy life gets complicated when their deception is threatened with exposure.',
                'room_no' => 2,
            ],
            [
                'movie_id' => 3,
                'title' => 'The Favourite',
                'theater_name' => 'abc movies',
                'start_time' => '2020-04-04T11:00:00',
                'end_time' => '2020-04-04T14:00:00',
                'description' => 'In early 18th century England, a frail Queen Anne occupies the throne and her close friend, Lady Sarah, governs the country in her stead. When a new servant, Abigail, arrives, her charm endears her to Sarah.',
                'room_no' => 3,
            ],
            [
                'movie_id' => 4,
                'title' => 'The Farewell I',
                'theater_name' => 'abc movies',
                'start_time' => '2020-04-04T12:00:00',
                'end_time' => '2020-04-04T15:00:00',
                'description' => 'A Chinese family discovers their grandmother has only a short while left to live and decide to keep her in the dark, scheduling a wedding to gather before she dies.',
                'room_no' => 4,
            ],
            [
                'movie_id' => 5,
                'title' => 'Shoplifters',
                'theater_name' => 'abc movies',
                'start_time' => '2020-04-04T13:00:00',
                'end_time' => '2020-04-04T16:00:00',
                'description' => 'A family of small-time crooks take in a child they find outside in the cold.',
                'room_no' => 5,
            ],
        ];
    }
}