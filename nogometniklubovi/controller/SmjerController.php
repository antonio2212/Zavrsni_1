<?php

class SmjerController extends Controller
{

    private $putanja='privatno' . 
    DIRECTORY_SEPARATOR . 'smjer' . 
    DIRECTORY_SEPARATOR;

    public function index()
    {
        //echo 'Hello Smjer';
        $this->view->render($this->putanja . 'index',[
            'grad'=>'Osijek',
            'brojevi'=>[
                1,4,6,7
            ]
            ]);
    }
}