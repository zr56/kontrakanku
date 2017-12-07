<?php
	/**
	*
	*/
	class Login
	{
		public $idUser;
    public $nama;
    public $username;
    public $password;
    public $alamat;
    public $kontak;
    public $jenis_kelamin;
    public $level;

		function __construct($idUser,$nama,$username,$password,$alamat,$kontak,$jenis_kelamin,$level){
      $this->idUser=$idUser;
      $this->nama=$nama;
      $this->username=$$username;
      $this->password=$password;
      $this->alamat=$alamat;
      $this->kontak=$kontak;
      $this->jenis_kelamin=$jenis_kelamin;
      $this->level=$level;
    }

		public static function find($username, $password){
			$db = DB::getInstance();
			$req = $db->prepare('SELECT * FROM user WHERE username= :username and password= :password'); // :variabel lokal

			$req->execute(array('username'=>$username,'password'=>$password)); //variabel lokal diisi dari constructor
			$auth = $req->fetch();
			if(count($auth)>1){
				return $auth['level'];//return dari DB
			}else{
				return 0;
			}
			foreach ($req->fetchAll() as $post) {
				$list[] = new Login($post['username'],$post['password']); //dari database
			}
			return $list;
		}

		public static function tambahuser($nama,$username,$password,$alamat,$kontak,$jenis_kelamin,$level){
      $db = DB::getInstance();

      $req  = $db->query("INSERT INTO user (idUser, username, password, level, nama, alamat, kontak, jenis_kelamin) VALUES
      (NULL, '".$username."', '".$password."', '".$level."', '".$nama."', '".$alamat."', '".$kontak."', '".$jenis_kelamin."');");

      return $req;
    }
	}
	?>
