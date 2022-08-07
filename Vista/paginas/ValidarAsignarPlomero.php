
<?php

if(!isset($_SESSION)){
    session_start();
}
$asignar = ctrServicio::Asignar_Plomero($_REQUEST['selectPlomero'], $_GET['idServicio']);

?>
Plomero asignado
<script>window.location.href = "index.php?pagina=ConsultarServiciosAdmin"</script>