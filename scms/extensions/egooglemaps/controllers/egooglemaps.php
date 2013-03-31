<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Egooglemaps extends MX_Controller{


	function __construct(){
		parent::__construct();
		$this->load->library('googlemaps');
	}

	function index(){
		$data ='';

		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '37.429, -122.1419';
		$this->googlemaps->add_marker($marker);

		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('index', $data);
	}

	public function multiplemarker(){

		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '37.429, -122.1519';
		$marker['infowindow_content'] = '1 - Hello World!';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = '37.409, -122.1319';
		$marker['draggable'] = TRUE;
		$marker['animation'] = 'DROP';
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = '37.449, -122.1419';
		$marker['onclick'] = 'alert("You just clicked me!!")';
		$this->googlemaps->add_marker($marker);

		$data['multiple'] = $this->googlemaps->create_map();

		$this->load->view('multiplemarker', $data);
	}

	public function direction(){
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$config['directions'] = TRUE;
		$config['directionsStart'] = 'empire state building';
		$config['directionsEnd'] = 'statue of liberty';
		$config['directionsDivID'] = 'directionsDiv';
		$this->googlemaps->initialize($config);

		$data['direction'] = $this->googlemaps->create_map();
		$this->load->view('direction', $data);
	}
}