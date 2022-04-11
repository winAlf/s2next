<?php

class homeController extends Controller {
    function __Construct()
    {
    }

    function index(){

        $data=
        [
            'title' =>'Inicio'
        ];

        View::render('snext',$data);
    }


/*
    function test(){

        $data=
        [
            'title' =>'Test',
            'bg'    =>'dark',
            'titulo'=>'Titulo de libro',
            'id'    => '1321'
        ];

        echo 'Probando nuestra base de datos<br><br><br>';
        echo '<pre>';

        try {

            // SELECT
            $sql = 'SELECT * FROM tests WHERE id=?';
            $res = Db::query($sql, [1]);
            print_r($res);

            // INSERT
            $sql = 'INSERT INTO tests (name, email, created_at) VALUES (?, ?, ?)';
            $registro = ['Nicole Pozos', 'npozos@kolors.mx', now()];
            //$id = Db::query($sql, $registro);
            //print_r($id);

            // UPDATE
            $sql = 'UPDATE tests SET name=?, email=? WHERE id=?';
            $registro_actualizado = [ 'Brenthon Ramirez', 'bramirez@kolors.mx', 2 ];
            //print_r(Db::query($sql, $registro_actualizado));

            // DELETE
            $sql = 'DELETE FROM tests WHERE id=? LIMIT 1';
            //print_r(Db::query($sql, [6]));

            // ALTER TABLE
            $sql = 'ALTER TABLE tests ADD COLUMN username VARCHAR(255) NULL AFTER name';
            //print_r(Db::query($sql));



        } catch (Exception $e) {
            echo 'Hubo un error: '.$e->getMessage();
        }

        echo '</pre>';
        die;

        View::render('test',$data);
    }
*/


/*
    function flash()
    {
        Flasher::new('Te has registrado con éxito', 'success');
        View::render('flash');
    }
*/
}
