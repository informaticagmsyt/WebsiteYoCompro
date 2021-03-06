<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_graficas_brigadas extends CI_Controller {

	  function __construct(){
            parent::__construct();
            $this->load->database();
          	$this->load->Model('m_gf_brigadas');
          	 if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
            }
        }
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/aside');
	        $tecnologico = $this->m_gf_brigadas->p_tecnologico();
	        $industrial  = $this->m_gf_brigadas->p_industrial();
	        $p_alimenticio  = $this->m_gf_brigadas->p_alimenticio();
	        $administrativo = $this->m_gf_brigadas->p_administrativo();
	        $p_atomotriz = $this->m_gf_brigadas->p_atomotriz();
	        $p_electrico = $this->m_gf_brigadas->p_electrico();
	        $p_refrigeracion = $this->m_gf_brigadas->p_refrigeracion();
	        $p_petroquimico = $this->m_gf_brigadas->p_petroquimico();
	        $p_hidraulica = $this->m_gf_brigadas->p_hidraulica();
	        $p_infraestructura = $this->m_gf_brigadas->p_infraestructura();
	    /************************************************************************/    
	        $genero_f  = $this->m_gf_brigadas->genero_f();
	        $genero_m  = $this->m_gf_brigadas->genero_m();	
	    /************************************************************************/    
	        $personal  = $this->m_gf_brigadas->lista_personal();
	        $upf  = $this->m_gf_brigadas->lista_upf();	
	        $eps  = $this->m_gf_brigadas->lista_eps();
	        $coop = $this->m_gf_brigadas->lista_coop();	
	        $ca   = $this->m_gf_brigadas->lista_ca();
			$this->load->view('v_graficas_brigadas',compact('p_infraestructura','p_hidraulica','p_petroquimico','p_refrigeracion','p_electrico','p_atomotriz','administrativo','p_alimenticio','tecnologico','industrial','personal','upf','eps','ca','coop','genero_f','genero_m'));
			$this->load->view('layout/footer');
		}

}
