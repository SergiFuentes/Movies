<?php

namespace App\Models;

use App\Core\FakeMovieRepsoitory;
use App\Core\IMovieRepository;
use App\Core\SQLMovieRepository;

class Movie {
    public $id;
    public $title;
    public $image;
    private IMovieRepository $db;

    public function __construct ($data = null)
    {
        if($data) {
            $this-> id = $data['id'];
            $this-> title = $data['title'];
            $this-> image = $data['image'];
        }
        $this->db = new SQLMovieRepository ();
    }

    public function all() {
        $movieList = [];
        foreach ($this->db->getAll() as $movie) {
            array_push($movieList, new self ($movie));
        }
        return $movieList;
    }

    public function save(){
        $this->query->save($this->title, $this->image);
    }
}