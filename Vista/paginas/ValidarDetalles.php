<?php
    session_start();
    if($_POST['textAreaDetalle'] == "" || $_REQUEST['select'] == "Tipo de arreglo"){
        $_SESSION['error'] = 'Por favor, llene los campos'
        ?> <script>window.location.href = "index.php?pagina=AgregarPedido";</script> <?php
    }else{
        $_SESSION['error'] = '';
        ctrCliente::nuevoServicio($_REQUEST['select'], 1, $_SESSION['idCliente'], $_POST['textAreaDetalle']);

        ?> <script>window.location.href = "index.php?pagina=SesionCliente";</script> <?php
    }

?>