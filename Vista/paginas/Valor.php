<?php
    

    if(!isset($_SESSION)){
        session_start();
    }
    
    $_SESSION['usuid'] = $_GET['idServicio'];
    
    if(!isset($_SESSION['idServicio'])){
        $_SESSION['error2'] = 'Error';
        ?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php
    }else{
        
        echo $_SESSION['usuid'];
        $_SESSION['error2'] = '';
        
        ?> <script>window.location.href = "index.php?pagina=Valoracion";</script> <?php
    }
    
    
?>