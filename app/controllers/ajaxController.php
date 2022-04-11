<?php

class ajaxController extends Controller {
    private $accepted_actions = ['add', 'get', 'load', 'update', 'delete'];
    private $required_params = ['hook', 'action'];

    function __Construct()
    {
        foreach ($this->required_params as $param) {
            if(!isset($_POST[$param])) {
                json_output(json_build(403));
            }
        }

        if(!in_array($_POST['action'], $this->accepted_actions)) {
            json_output(json_build(403));
        }

    }

    function index()
    {
        json_output(json_build(403));
    }

    function add_menu()
    {
        $mov = new menuModel();
        $mov->nombre = $_POST['nombre'];
        $mov->descripcion = $_POST['descripcion'];
        $mov->MenuPadre = $_POST['MenuPadre'];
        if(!$id = $mov->add()){
            json_output(json_build(400. null. 'no se guardo el registro'));
        }
        $mov->id = $id;
        json_output(json_build(201, $mov->one(), 'Movimiento agregado con éxito'));
    }

}
