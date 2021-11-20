<?php

namespace App\Core;


class SQLMovieRepository implements IMovieRepository{

        private $table = 'movies';
        private $conexion;

        function __construct()
        {
            $this->conexion = (new SQLConexion())->mysql;
        }

        function getAll(){

            $query= $this->conexion->query("SELECT * FROM {$this->table}");
            $result = $query->fetchAll();
            return $result;
        }

    }