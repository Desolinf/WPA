<?php 
//Traer pagina inicial del programa
	$codigo = isset($_GET['codigo']) ? strtolower($_GET['codigo']) : '0';
	$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

	if($pagina==='home' || $pagina==='tiendas' || $pagina==='servicios' || $pagina==='ofertas' || $pagina==='loginadmin' || $pagina==='ofertas' || $pagina==='iniciarsesionadmin'){
		require_once 'assets/inicio.php';
	}	
	else{
		require_once 'assets/inicioAdministrador.php';
	}
	require_once 'assets/'.$pagina.'.php';
	require_once 'assets/footer.php';
?>
