<?php

require '../Models/M_usuario.php';

class UsuarioController extends Usuario{

public function LoginView()
{
    require '../Views/Usuario/V_login.php';
}

}
if(isset($_GET['action']) && $_GET['action']=='login'){
    $instaciacontrolador = new UsuarioController();
    $instaciacontrolador->LoginView();
}

?>