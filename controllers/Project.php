<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function form(){
		$this->load->view('form');
	}


    public function index(){
        $this->load->view('index');    
    }
 
    public function home(){
        $this->load->view('home');
    }  

    public function quemsomos(){
        $this->load->view('qs');
    }
    
    	
	public function doPost(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m=$this->model;
		$m->insert(new Usuario ($_POST["nome"],$_POST["login"],$_POST["email"])); //o nome é o name dentro do form
	}
    
  //  public function listar() {
	//require_once APPPATH."models/user.php";
	//$this->load->model('model'); //arquivo model.php, dentro de model
	//$m = $this->model;
	//$usuarios = $m->searchAll();	//searchAll da select no BD
	//$data ['usuarios'] = $usuarios;	//array associativo enchendo o data usuarios do BD
	//$data['outravar'] = 5; //cada dado para ser enviado precisa do $data com a chave
	//$this->load->view('lista',$data);
    //}
    	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m=$this->model;
		$usuarios=$m->searchAll();
		$data['usuarios'] = $usuarios;
		$this->load->view('lista',$data);
		//print_r($usuarios);
		
		
		
		
	}
    
    
}