<?php
function call($controller, $action){
	require_once('controller/c_'.$controller.'.php');

	switch ($controller) {
		case 'Login':
		require_once('model/m_Login.php');
		$controller=new LoginController();
		break;

		case 'Registrasi':
			require_once('model/m_registrasi.php');
			$controller=new RegistrasiController();
			break;

		case 'Home':
			$controller=new HomeController();
			require_once('model/m_Home.php');
			break;

		case 'admin':
			$controller=new adminController();
			require_once('model/m_admin.php');
			break;

		case 'pemilik':
			$controller=new pemilikController();
			require_once('model/m_pemilik.php');
			break;

		case 'pencari':
			$controller=new pencariController();
			require_once('model/m_pencari.php');
			break;

	}
	$controller->{ $action }();
}

$controllers = array(
	'Login' => ['login', 'error','authentication','registrasi','tambahuser'],
	'Home'=>['home'],
	'admin'=>['home'],
	'pemilik'=>['home'],
	'pencari'=>['home']
	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>
