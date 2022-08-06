<?php
    
    if(!isset($_SESSION)){ 
        session_start(); 
    } 
    if($_POST['DetallePlo'] == "" || $_POST['Garantia'] == ""||$_POST['Repuestos']== ""||$_POST['Insumos']== ""){
        $_SESSION['error2'] = 'Por favor, llene los campos';
        ?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php
    }else{
        $_SESSION['error2'] = '';
        $_SESSION['DetallePlo']=$_POST['DetallePlo'];
        $_SESSION['Garantia']=$_POST['Garantia'];
        $_SESSION['Insumos']=$_POST['Insumos'];
        $_SESSION['Repuestos']=$_POST['Repuestos'];

        $tiposervicio =ctrPlomero::Actuali_Plo($_SESSION['DetallePlo'],$_SESSION['Garantia'],$_SESSION['Insumos'],$_SESSION['Repuestos']);
        ?> <script>window.location.href = "index.php?pagina=ConsultarServicioPlomero";</script> <?php
    }
?>