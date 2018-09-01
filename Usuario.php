<?php

require_once 'controller/usuario.controller.php';


// Todo esta lógica hara el papel de un FrontController

if(!isset($_REQUEST['c'])){
    $controller = new UsuarioController();
    $controller->Index();    
} else {
    
    // Obtenemos el controlador que queremos cargar
	
    $controller = $_REQUEST['c'] . 'Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    
    // Instanciamos el controlador
    $controller = new $controller();
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}






