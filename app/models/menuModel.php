<?php

/**
 *
 */
 class menuModel extends Model
 {

     public $id;
     public $nombre;
     public $menuPadre;
     public $descripcion;
     public $created=now();
     public $updated;

     /**
     * Método para agregar un nuevo usuario
     *
     * @return integer
     */
     public function add()
     {
         $sql = 'INSERT INTO menu (nombre, menuPadre, descripcion, created_at) VALUES (?, ?, ?, ?)';
         $menu = [$this->nombre, $this->menuPadre, $this->descripcion, $this->created];

         try {
             return ($this->id = parent::query($sql, $menu)) ? $this->id : false;
         } catch (Exception $e) {
             throw $e;
         }
     }

     public function all()
     {
         $sql = 'SELECT *,
         COUNT(id) AS total,
         FROM menu
         ORDER BY id DESC';
         $menu = [$this->nombre, $this->menuPadre, $this->descripcion, $this->created];

         try {
             return ($rows = parent::query($sql)) ? $rows : false;
         } catch (Exception $e) {
             throw $e;
         }
     }

     public function one()
     {
         $sql = 'SELECT * FROM menu WHERE id=? LIMIT 1';
         try {
             return ($rows = parent::query($sql, [$this->id])) ? $rows[0] : false;
         } catch (Exception $e) {
             throw $e;
         }
     }

     /**
     * Método para actualizar un registor en la db
     *
     * @return bool
     */
     public function update()
     {
         $sql = 'UPDATE menu SET nombre=?, menuPadre=?, descripcion=? WHERE id=?';
         $menu = [$this->nombre, $this->menuPadre, $this->descripcion, $this->id];

         try {
             return (parent::query($sql, $menu)) ? true : false;
         } catch (Exception $e) {
             throw $e;
         }
     }

     public function delete()
     {
         $sql = 'DELETE FROM menu WHERE id=? LIMIT 1';
         $menu = [$this->id];

         try {
             return (parent::query($sql, $menu)) ? true : false;
         } catch (Exception $e) {
              throw $e;
         }

     }

     public static function search($option)
     {
         $self = new self();
         $self->option = $option;
         return $self->one();
     }
 }
