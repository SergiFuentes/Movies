<?php
namespace App\Controllers;
use App\Models\Movie;

    
    //require_once __DIR__ . '/../Models/Movie.php';

class MovieController {

    public function index() {
        
        $movies = (new Movie())->all();
        require_once __DIR__ . '/../Views/pages/MovieList.php';
    }

    public function create () {
        require_once __DIR__ . '/../Views/pages/MovieCreate.php';
    }

    public function store($request) {
        $movieToSave = new Movie ($request);
        $movieToSave->save();
        $this->redirect('/');
    }

    private function redirect(string $url) {
        header("Location: {$url}");
    }
}