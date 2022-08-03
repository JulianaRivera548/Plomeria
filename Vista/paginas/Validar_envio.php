<?php
    
    session_start();
    if($_POST['DetallePlo'] == "" || $_POST['ValorRep'] == ""){
        $_SESSION['error2'] = 'Por favor, llene los campos';
        ?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php
    }else{
        $_SESSION['error2'] = '';
        $_SESSION['DetallePlo']=$_POST['DetallePlo'];
        $_SESSION['ValorRep']=$_POST['ValorRep'];
        $tiposervicio =ctrPlomero::Actuali_Plo($_SESSION['usuid']);
        $tiposervicio2 =ctrPlomero::Actuali_Plo2($_SESSION['usuid']);
        ?> <script>window.location.href = "index.php?pagina=DetallesServicio";</script> <?php
    }
?>