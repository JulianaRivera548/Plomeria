<?php
    
    if(!isset($_SESSION)){
        session_start();
    }
    ctrCliente::actualizarEstado($_SESSION['idServicio']);

    $pag = $_REQUEST['selectEF'];
    if($_REQUEST['selectEF'] == 'efectivo'){
        echo '<script>window.location.href = "index.php?pagina=SesionCliente";</script>';
    }else{
        echo "<script>window.open('https://www.google.com/search?q=$pag');</script>";
        echo '<script>window.location.href = "index.php?pagina=SesionCliente";</script>';
    }


?>