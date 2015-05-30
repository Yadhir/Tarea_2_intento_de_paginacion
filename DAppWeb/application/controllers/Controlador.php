
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Controlador extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->helper('url');	
			$this->load->model('Modelo');
		}

		function index(){
			$this->load->view('inicio');
			$this->output->cache(5000);
		}

		public function simple(){
    		//$datos['respuesta'] = $this->Modelo->c_simple();


    		$data['title'] = 'ci';
			$pages=20; //Número de registros mostrados por páginas
			$this->load->library('pagination'); //Cargamos la librería de paginación
			$config['base_url'] = base_url().'index.php/Controlador/simple'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
			$config['total_rows'] = $this->Modelo->filas_simple();//calcula el número de filas  
			$config['per_page'] = $pages; //Número de registros mostrados por páginas
        	$config['num_links'] = 20; //Número de links mostrados en la paginación
 			$config['first_link'] = 'Primera';//primer link
			$config['last_link'] = 'Ultima';//último link
        	$config["uri_segment"] = 3;//el segmento de la paginación
			$config['next_link'] = 'Siguiente';//siguiente link
			$config['prev_link'] = 'Anterior';//anterior link
			$config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
			$config['full_tag_close'] = '</div>';//el cierre del div de la paginación
			$this->pagination->initialize($config); //inicializamos la paginación		
			$datos['respuesta1'] = $this->Modelo->c_simple($config['per_page'],$this->uri->segment(3));
    		$this->load->view('simple', $datos);
    		$this->output->cache(5000);


    		//$this->load->view('simple', $datos);
    	}

    	public function mediana(){
    		$data['title'] = 'ci1';
		$pages=100; //Número de registros mostrados por páginas
		$this->load->library('pagination'); //Cargamos la librería de paginación
		$config['base_url'] = base_url().'index.php/Controlador/mediana'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->Modelo->filas_mediana();//calcula el número de filas  
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Ultima';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
		$config['full_tag_close'] = '</div>';//el cierre del div de la paginación
		$this->pagination->initialize($config); //inicializamos la paginación		
		$datos['respuesta2'] = $this->Modelo->c_mediana($config['per_page'],$this->uri->segment(3));
    	$this->load->view('mediana', $datos);
    	$this->output->cache(5000);
    	}

    	public function grande(){
    		//$datos['respuesta'] = $this->Modelo->c_grande();
    		//$this->load->view('grande', $datos);

    		$data['title'] = 'ci2';
		$pages=100; //Número de registros mostrados por páginas
		$this->load->library('pagination'); //Cargamos la librería de paginación
		$config['base_url'] = base_url().'index.php/Controldor/grande/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->Modelo->filas_grande();//calcula el número de filas  
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Ultima';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$config['full_tag_open'] = '<div id="paginacion">';//el div que debemos maquetar
		$config['full_tag_close'] = '</div>';//el cierre del div de la paginación
		$this->pagination->initialize($config); //inicializamos la paginación		
		$datos['respuesta3'] = $this->Modelo->c_grande($config['per_page'],$this->uri->segment(3));
    	$this->load->view('grande', $datos);
    	$this->output->cache(5000);
    	} 

	}
