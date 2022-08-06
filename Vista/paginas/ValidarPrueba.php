<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['button1'])) {
        $_SESSION['prueba'] = "This is Button1 that is selected";
    }
    if(isset($_POST['button2'])) {
        $_SESSION['prueba'] = "This is Button2 that is selected";
    }
    echo "<script>window.location.href = 'index.php?pagina=AgregarPedido'</script>";
?>