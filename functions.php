<?php
	function check_login($con){

		if(isset($_SESSION['id_usuario'])){

			$id = $_SESSION['id_usuario'];
			$query = "SELECT * from usuarios where id_usuario = '$id' limit 1";

			$result = mysqli_query($con,$query);

			if($result && mysqli_num_rows($result) > 0){

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		//redirect to login
		header("Location: log_in.php");
		die;
	}


	function signup(){

		// session_start();

		include("conection.php");

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			//something was posted
			$user_name = $_POST['username'];
			$name = $_POST['name'];
			$last_name = $_POST['last_name'];
			$password = $_POST['password'];

			if(!empty($user_name) && !empty($name) && !empty($last_name) && !empty($password) && !is_numeric($name) && !is_numeric($last_name)){
				//save to database
				$query = "INSERT into usuarios (username,nombre_usuario,apellido,password) values ('$user_name','$name','$last_name','$password')";

				mysqli_query($con, $query);

				header("Location: log_in.php");
				die;
			}
			else{
				echo "Ingrese informacion valida";
			}
		}
	}

	function login(){

		session_start();

		include("conection.php");

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			//something was posted
			$user_name = $_POST['user_name'];
			$password = $_POST['password'];

			if(!empty($user_name) && !empty($password)){
				//read from database
				$query = "select * from usuarios where username = '$user_name' limit 1";
				$result = mysqli_query($con, $query);

				if($result){
					if($result && mysqli_num_rows($result) > 0){

						$user_data = mysqli_fetch_assoc($result);
						
						if($user_data['password'] === $password){

							$_SESSION['id_usuario'] = $user_data['id_usuario'];
							header("Location: vip.php");
							die;
						}
					}
				}
				echo "Los elementos ingresados son erroneos";
			}else{
				echo "Los elementos ingresados son erroneos";
			}
		}
	}

	function logout(){
		include("conection.php");
		session_start();
		session_destroy();
		header("Location:index.php");
	}
?>