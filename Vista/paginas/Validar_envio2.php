<?php
    
    session_start();
    if($_POST['Repuestos'] == "" || $_POST['Garantia'] == ""){
        $_SESSION['error3'] = 'Por favor, llene los campos';
        ?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php
    }else{
        $_SESSION['error3'] = '';
        $_SESSION['Garantia']=$_POST['DetallePlo'];
        $_SESSION['Insumos']=$_POST['Insumos'];
        $_SESSION['Fecha']=$_POST['Fecha'];
        $tiposervicio =ctrPlomero::Actuali_Plo($_SESSION['Garantia']);
        $tiposervicio2 =ctrPlomero::Actuali_Plo2($_SESSION['Insumos']);
        $tiposervicio2 =ctrPlomero::Actuali_Plo2($_SESSION['Fecha']);
        ?> <script>window.location.href = "index.php?pagina=SesionPlomero";</script> <?php
    }
?>