<?php

class Smjer
{
    // CRUD - R
    public static function read()
    {
        /*
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            select * from smjer

        ');
        */

        $izraz->execute();
        return $izraz->fetchAll();
    }

    // CRUD - C

    public static function create()
    {

    }

    // CRUD - U

    public static function update()
    {

    }

    // CRUD - D

    public static function delete()
    {

    }
}