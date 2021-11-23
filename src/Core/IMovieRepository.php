<?php
namespace App\Core;

interface IMovieRepository {

    function getAll();
    function save($title, $image);
}