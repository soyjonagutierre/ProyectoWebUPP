<?php namespace App\Controllers;

use App\Models\usuariosModel;

class Pastel extends BaseController
{
	public function adminUsuarios()
	{
		
		$variable = new usuariosModel($db);
		$info['lobo']=$variable->findAll();


		return view('adminU1').view('adminU2',$info).view('adminU3');
	}

	public function adminBoda()
	{
		return view('adminB1').view('adminB2').view('adminB3');
	}

	public function adminInfantiles()
	{
		return view('adminI1').view('adminI2').view('adminI3');
	}

	public function adminJumbo()
	{
		return view('adminJ1').view('adminJ2').view('adminJ3');
	}

	public function adminAnios()
	{
		return view('adminA1').view('adminA2').view('adminA3');
	}

	public function index()
	{
		return view('index1').view('index2').view('index3');
	}

	public function Boda()
	{
		return view('Boda1').view('Boda2').view('Boda3');
	}

	public function Infantiles()
	{
		return view('Infantiles1').view('Infantiles2').view('Infantiles3');
	}

	public function Jumbo()
	{
		return view('Jumbo1').view('Jumbo2').view('Jumbo3');
	}

	public function Anios()
	{
		return view('Anios1').view('Anios2').view('Anios3');
	}

	public function Login()
	{
		$request=\Config\Services::request();
		$firstName=$request->getPost('nombre');
		$lastName=$request->getPost('apellido'); 
		$age=$request->getPost('edad'); 
		$phone=$request->getPost('telefono'); 
		$email=$request->getPost('correo'); 
		$user=$request->getPost('username');  
		$password=$request->getPost('password'); 

		$data = [
    	'nombre' => $firstName,
    	'apellidos' => $lastName,
    	'edad' => $age,
    	'telefono' => $phone,
    	'correoElectronico' => $email,
    	'username' => $user,
    	'contrasenia' => $password,
    	'id_rol' => '2'
		];
		$variable= new usuariosModel($db);
		 $variable->insert($data);
		return view('Login1').view('Login2');
	}

	public function Registro()
	{
		return view('Registro1').view('Registro2');
	}

	public function Compra()
	{
		return view('compra');
	}
	/*public function validarU(){
		$username=$this->request->getPost('username');
		$password=$this->request->getPost('password');
		$username=new usuariosModel();

		$datosUsuario = $username->obtenerUsuario(['username' => $username]);
		if(count($datosUsuario > 0  && password_verify($password, $datosUsuario[0]['contrasenia']))){
			$data=[
				"username" => $datosUsuario[0]['username'],
			];



			$session =session();
			$session->set($data);
			return redirect()->to(base_url('/adminUsuarios'));

		}else{
			return redirect()->to(base_url('/Login'));

		}


	}*/

}