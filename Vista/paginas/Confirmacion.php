<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['aceptar'])) {
        $_SESSION['aceptaServicio'] = true;
    }
    if(isset($_POST['rechazar'])) {
        $_SESSION['aceptaServicio'] = false;
    }
    echo "<script>window.location.href = 'index.php?pagina=SesionCliente'</script>";
?>