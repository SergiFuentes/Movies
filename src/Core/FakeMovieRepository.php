<?php

namespace App\Core;


class FakeMovieRepsoitory implements IMovieRepository
{
    private $movies = [
        [
            'id' => 1,
            'title' => 'Terminator',
            'image' => 'https://movieposters2.com/images/1245761-b.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Terminator-2',
            'image' => 'https://movieposters2.com/images/1517968-b.jpg'
        ],
        [
            'id' => 3,
            'title' => 'Terminator-3',
            'image' => 'https://movieposters2.com/images/639646-b.jpg'
            ]
    ];

    public function getAll(){
        return $this->movies;
    }
}