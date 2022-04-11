<?php

class menuController extends Controller {
    function __Construct()
    {
    }

    function index(){

        $data=
        [
            'title' =>'Menus'
        ];

        View::render('index',$data);
    }

}
