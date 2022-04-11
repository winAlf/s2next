<?php

class errorController extends Controller {
    function index(){
        $data =
        [
            'title'=>'Página no encontrada',
            'bg'    =>'dark'

        ];
        View::render('404',$data);
    }
};
