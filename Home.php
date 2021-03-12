<?php

namespace App\Controllers;
use App\Models\mUsuarios;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenida()
	{
		return view('vbienvenida');
	}
	public function formulario()
	{

		return view('vformulario');
	}
	public function formulariodos()
	{

		return view('vformulariodos');
	}
      public function formularioR()
	{

		return view('Registroe');
	}
	public function insertarForm(){
		$mUsuarios = new mUsuarios();
		$UsuarioNuevo=[
			"Nombre"=> $_POST['Nombre'],
			"Usuario"=> $_POST['Usuario'],
			"Email"=> $_POST['Email'],
			"Passsword"=> $_POST['Passsword']
		];
		$mUsuarios->insert($UsuarioNuevo);
		$datoId['idRegistrado'] = $mUsuarios->db->insertID();
		return view("vSuccess",$datoId);
	}
	}


