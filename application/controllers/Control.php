<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	public function index()
	{
    $this->load_page();
	}

  public function load_page(){
    $this->load->view("header");
    $this->load->view("main_container");
    $this->load->view("footer");
  }

  public function get_content($data){
    switch ($data) {
			case 'home':
			$this->load->view("home");
			break;

			case 'about_page':
        $this->load->view("about_page");
        break;

      case 'learning_page':
        $this->load->view("learning_page");
        break;

			case 'testing':
        $this->load->view("testing_page");
        break;

			case 'developer':
        $this->load->view("developer");
        break;

      default:
        # code...
        break;
    }
  }

	public function learning(){
		$jum_input = 0;
		$max_epoch = 0;
		$learning_rate = 0;
  	$target_error = 0;
		$panjang_node = 0;

		if ($this->input->post("sel_jumlah_input") && $this->input->post("sel_jumlah_input") != ""){
  		$jum_input = $this->input->post("sel_jumlah_input");
  	}else {
  		$jum_input = 26;
  	}

  	if ($this->input->post("text_iterasi") && $this->input->post("text_iterasi") !=""){
  		$max_epoch = $this->input->post("text_iterasi");
  	}else {
  		$max_epoch = 1000;
  	}

  	if ($this->input->post("text_learning") && $this->input->post("text_learning") != ""){
  		$learning_rate = $this->input->post("text_learning");
  	}else {
  		$learning_rate = 1;
  	}

  	if ($this->input->post("text_target") && $this->input->post("text_target") != ""){
  		$target_error = $this->input->post("text_target");
  	}else {
  		$target_error = 0.001;
  	}

  	if ($this->input->post("text_node") && $this->input->post("text_node") !=""){
  		$panjang_node = $this->input->post("text_node");
  	}else {
  		$panjang_node = 6;
  	}

		$param_data = array("jum_input" => $jum_input,
	 		"max_epoch" => $max_epoch,
			"learning_rate" => $learning_rate,
			"target_error" => $target_error,
			"panjang_node" => $panjang_node);

		$this->Backpropagation->learning_pros($param_data);
	}

	public function testing(){
		$data = array();
		$data[0] = $this->input->post("braile_1");
		$data[1] = $this->input->post("braile_2");
		$data[2] = $this->input->post("braile_3");
		$data[3] = $this->input->post("braile_4");
		$data[4] = $this->input->post("braile_5");
		$data[5] = $this->input->post("braile_6");

		$result = $this->Proses_test->test_pros($data);
		$send = (array("data" => $result));
		$this->load->view("result", $send);
	}
}
