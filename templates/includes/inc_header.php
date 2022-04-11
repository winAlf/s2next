<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '.get_sitename(); ?></title>
        <!-- Estilos de boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Estilos de tostr -->
        <link href="<?php echo plugins.'toastr/toastr.min.css' ?>" rel="stylesheet">
        <!-- Estilos de waitme -->
        <link href="<?php echo plugins.'waitme/waitMe.min.css' ?>" rel="stylesheet">

        <!-- Estilos del usuario -->
        <link rel="stylesheet" href="<?php echo CSS.'main.css' ?>">
    </head>
    <body>
        <header class="barraHorPrin">
            <div class="row align-items-start container">
                <div class="col logoBarra">
                    <img src="<?php echo IMAGES.'logo.png' ?>" alt="">
                </div>
                <!-- <div class="col">
                    <ul>
                        <li><a href="#" class="modulos">Módulo Menú</a></li>
                    </ul>
                </div> -->
                <div class="col d-flex flex-row-reverse bd-highlight">
                    <ul>
                        <li><a href="#" class="modulos">Módulo Menú</a></li>
                    </ul>
                    <ul class="nav">
        				<li><a href="">menu 01</a>
                            <ul>
                                <li><a href="">Submenu1</a></li>
                                <li><a href="">Submenu2</a></li>
                                <li><a href="">Submenu3</a></li>
                                <li><a href="">Submenu4</a></li>
                            </ul>
                        </li>
        				<li><a href="">menu 01</a>
        					<ul>
        						<li><a href="">Submenu1</a></li>
        						<li><a href="">Submenu2</a></li>
        						<li><a href="">Submenu3</a></li>
        						<li><a href="">Submenu4</a></li>
        					</ul>
        				</li>
        				<li><a href="">menu 01</a>
        					<ul>
        						<li><a href="">Submenu1</a></li>
        						<li><a href="">Submenu2</a></li>
        						<li><a href="">Submenu3</a></li>
        						<li><a href="">Submenu4</a></li>
        					</ul>
        				</li>
        				<li><a href="">Contacto</a></li>
        			</ul>
                </div>
            </div>
        </header>
<!-- ends inc_header.php -->
