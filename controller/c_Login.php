<?php

	class LoginController
	{


		public function login(){
			$error='';
			require_once('view/v_Login.php');
		}
		public function registrasi(){
			require_once("view/v_registrasi.php");
		}
		public function tambahuser(){
			$posts = Login::tambahuser($_GET["nama"], $_GET["username"], $_GET["password"], $_GET["alamat"], $_GET["kontak"], $_GET["jenis_kelamin"], $_GET["level"]);
			header("?controller=Login&action=login");
		}
		public function error(){
			require_once('views/pages/error.php');
		}
		public function authentication(){
			$error='';
			if (!isset($_GET['username'])) {
			}
			if(Login::find($_GET['username'],$_GET['password'])==0){
				$error="username atau password  tidak valid";
				require_once('view/v_Login.php');
			}else if(Login::find($_GET['username'],$_GET['password'])==3){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=admin&action=home");
			}elseif(Login::find($_GET['username'],$_GET['password'])==2){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=pemilik&action=home");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=pencari&action=home");
			}
		}

}
?>
