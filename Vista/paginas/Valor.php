<?php
    

    if(!isset($_SESSION)){
        session_start();
    }
     //$_SESSION['valor']= $_POST['f'];


    if(!isset($_SESSION['valor'])){
        $_SESSION['error2'] = 'Error';
        /*?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php*/
    }else{
        
        echo $_SESSION['valor'];
        $_SESSION['error2'] = '';
        
        /*?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php*/
    }
    $_SESSION['idServicio'] = $_GET['idServicio']+1;
    echo $_SESSION['idServicio'];
?>