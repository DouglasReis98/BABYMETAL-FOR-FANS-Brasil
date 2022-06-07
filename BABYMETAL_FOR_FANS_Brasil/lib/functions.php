<?php
    function paginacao_adm(){
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'dashboard';
        $explode = explode('/', $url); 
        $dir = 'paginas/php/';
        $ext = '.php';

        if (file_exists($dir.$explode[0].$ext) && isset($_SESSION['admLogin'])) {
            include($dir.$explode[0].$ext);
        }else{
            include($dir."login".$ext);
        }
    }
?>