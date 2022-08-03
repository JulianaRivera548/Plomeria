<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['aceptar'])) {
        $_SESSION['ValorPagar'] = $_SESSION['ValTotal'];
        ctrCliente::actualizarValor($_SESSION['idServicio'], $_SESSION['ValorPagar']);
        echo '<script>window.location.href = "index.php?pagina=Pago"; </script>';
    }
    if(isset($_POST['rechazar'])) {
        $_SESSION['ValorPagar'] = $_SESSION['ValVisita'];
        ctrCliente::actualizarValor($_SESSION['idServicio'], $_SESSION['ValorPagar']);
        echo '<script>window.location.href = "index.php?pagina=Pago"; </script>';
    }
    echo $_GET['idServicio'];
    //echo "<script>window.location.href = 'index.php?pagina=SesionCliente'</script>";
?>