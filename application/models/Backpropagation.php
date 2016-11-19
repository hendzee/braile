<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backpropagation extends CI_Model {

	public function learning_pros($param_data){
		set_time_limit(500);
    //HURUF A
  	$input[0][0] = 1;
  	$input[0][1] = 0;
  	$input[0][2] = 0;
  	$input[0][3] = 0;
  	$input[0][4] = 0;
  	$input[0][5] = 0;

  	$target[0][0] = 1;
  	$target[0][1] = 0;
  	$target[0][2] = 0;
  	$target[0][3] = 0;
  	$target[0][4] = 0;
  	$target[0][5] = 0;

  	//HURUF B
  	$input[1][0] = 1;
  	$input[1][1] = 0;
  	$input[1][2] = 1;
  	$input[1][3] = 0;
  	$input[1][4] = 0;
  	$input[1][5] = 0;

  	$target[1][0] = 1;
  	$target[1][1] = 0;
  	$target[1][2] = 1;
  	$target[1][3] = 0;
  	$target[1][4] = 0;
  	$target[1][5] = 0;

  	//HURUF C
  	$input[2][0] = 1;
  	$input[2][1] = 1;
  	$input[2][2] = 0;
  	$input[2][3] = 0;
  	$input[2][4] = 0;
  	$input[2][5] = 0;

  	$target[2][0] = 1;
  	$target[2][1] = 1;
  	$target[2][2] = 0;
  	$target[2][3] = 0;
  	$target[2][4] = 0;
  	$target[2][5] = 0;

  	//HURUF D
  	$input[3][0] = 1;
  	$input[3][1] = 1;
  	$input[3][2] = 0;
  	$input[3][3] = 1;
  	$input[3][4] = 0;
  	$input[3][5] = 0;

  	$target[3][0] = 1;
  	$target[3][1] = 1;
  	$target[3][2] = 0;
  	$target[3][3] = 1;
  	$target[3][4] = 0;
  	$target[3][5] = 0;

  	//HURUF E
  	$input[4][0] = 1;
  	$input[4][1] = 0;
  	$input[4][2] = 0;
  	$input[4][3] = 1;
  	$input[4][4] = 0;
  	$input[4][5] = 0;

  	$target[4][0] = 1;
  	$target[4][1] = 0;
  	$target[4][2] = 0;
  	$target[4][3] = 1;
  	$target[4][4] = 0;
  	$target[4][5] = 0;

  	//HURUF F
  	$input[5][0] = 1;
  	$input[5][1] = 1;
  	$input[5][2] = 1;
  	$input[5][3] = 0;
  	$input[5][4] = 0;
  	$input[5][5] = 0;

  	$target[5][0] = 1;
  	$target[5][1] = 1;
  	$target[5][2] = 1;
  	$target[5][3] = 0;
  	$target[5][4] = 0;
  	$target[5][5] = 0;

  	//HURUF G
  	$input[6][0] = 1;
  	$input[6][1] = 1;
  	$input[6][2] = 1;
  	$input[6][3] = 1;
  	$input[6][4] = 0;
  	$input[6][5] = 0;

  	$target[6][0] = 1;
  	$target[6][1] = 1;
  	$target[6][2] = 1;
  	$target[6][3] = 1;
  	$target[6][4] = 0;
  	$target[6][5] = 0;

  	//HURUF H
  	$input[7][0] = 1;
  	$input[7][1] = 0;
  	$input[7][2] = 1;
  	$input[7][3] = 1;
  	$input[7][4] = 0;
  	$input[7][5] = 0;

  	$target[7][0] = 1;
  	$target[7][1] = 0;
  	$target[7][2] = 1;
  	$target[7][3] = 1;
  	$target[7][4] = 0;
  	$target[7][5] = 0;

  	//HURUF I
  	$input[8][0] = 0;
  	$input[8][1] = 1;
  	$input[8][2] = 0;
  	$input[8][3] = 0;
  	$input[8][4] = 0;
  	$input[8][5] = 0;

  	$target[8][0] = 0;
  	$target[8][1] = 1;
  	$target[8][2] = 0;
  	$target[8][3] = 0;
  	$target[8][4] = 0;
  	$target[8][5] = 0;

  	//HURUF J
  	$input[9][0] = 0;
  	$input[9][1] = 1;
  	$input[9][2] = 0;
  	$input[9][3] = 0;
  	$input[9][4] = 0;
  	$input[9][5] = 0;

  	$target[9][0] = 0;
  	$target[9][1] = 1;
  	$target[9][2] = 0;
  	$target[9][3] = 0;
  	$target[9][4] = 0;
  	$target[9][5] = 0;

  	//HURUF K
  	$input[10][0] = 1;
  	$input[10][1] = 0;
  	$input[10][2] = 0;
  	$input[10][3] = 0;
  	$input[10][4] = 1;
  	$input[10][5] = 0;

  	$target[10][0] = 1;
  	$target[10][1] = 0;
  	$target[10][2] = 0;
  	$target[10][3] = 0;
  	$target[10][4] = 1;
  	$target[10][5] = 0;

  	//HURUF L
  	$input[11][0] = 1;
  	$input[11][1] = 0;
  	$input[11][2] = 1;
  	$input[11][3] = 0;
  	$input[11][4] = 1;
  	$input[11][5] = 0;

  	$target[11][0] = 1;
  	$target[11][1] = 0;
  	$target[11][2] = 1;
  	$target[11][3] = 0;
  	$target[11][4] = 1;
  	$target[11][5] = 0;

  	//HURUF M
  	$input[12][0] = 1;
  	$input[12][1] = 1;
  	$input[12][2] = 0;
  	$input[12][3] = 0;
  	$input[12][4] = 1;
  	$input[12][5] = 0;

  	$target[12][0] = 1;
  	$target[12][1] = 1;
  	$target[12][2] = 0;
  	$target[12][3] = 0;
  	$target[12][4] = 1;
  	$target[12][5] = 0;

  	//HURUF  N
  	$input[13][0] = 1;
  	$input[13][1] = 1;
  	$input[13][2] = 0;
  	$input[13][3] = 1;
  	$input[13][4] = 1;
  	$input[13][5] = 0;

  	$target[13][0] = 1;
  	$target[13][1] = 1;
  	$target[13][2] = 0;
  	$target[13][3] = 1;
  	$target[13][4] = 1;
  	$target[13][5] = 0;

  	//HURUF O
  	$input[14][0] = 1;
  	$input[14][1] = 0;
  	$input[14][2] = 0;
  	$input[14][3] = 1;
  	$input[14][4] = 1;
  	$input[14][5] = 0;

  	$target[14][0] = 1;
  	$target[14][1] = 0;
  	$target[14][2] = 0;
  	$target[14][3] = 1;
  	$target[14][4] = 1;
  	$target[14][5] = 0;

  	//HURUF P
  	$input[15][0] = 1;
  	$input[15][1] = 1;
  	$input[15][2] = 1;
  	$input[15][3] = 0;
  	$input[15][4] = 1;
  	$input[15][5] = 0;

  	$target[15][0] = 1;
  	$target[15][1] = 1;
  	$target[15][2] = 1;
  	$target[15][3] = 0;
  	$target[15][4] = 1;
  	$target[15][5] = 0;

  	//HURUF Q
  	$input[16][0] = 1;
  	$input[16][1] = 1;
  	$input[16][2] = 1;
  	$input[16][3] = 1;
  	$input[16][4] = 1;
  	$input[16][5] = 0;

  	$target[16][0] = 1;
  	$target[16][1] = 1;
  	$target[16][2] = 1;
  	$target[16][3] = 1;
  	$target[16][4] = 1;
  	$target[16][5] = 0;

  	//HURUF R
  	$input[17][0] = 1;
  	$input[17][1] = 0;
  	$input[17][2] = 1;
  	$input[17][3] = 1;
  	$input[17][4] = 1;
  	$input[17][5] = 0;

  	$target[17][0] = 1;
  	$target[17][1] = 0;
  	$target[17][2] = 1;
  	$target[17][3] = 1;
  	$target[17][4] = 1;
  	$target[17][5] = 0;

  	//HURUF S
  	$input[18][0] = 0;
  	$input[18][1] = 1;
  	$input[18][2] = 1;
  	$input[18][3] = 0;
  	$input[18][4] = 1;
  	$input[18][5] = 0;

  	$target[18][0] = 0;
  	$target[18][1] = 1;
  	$target[18][2] = 1;
  	$target[18][3] = 0;
  	$target[18][4] = 1;
  	$target[18][5] = 0;

  	//HURUF T
  	$input[19][0] = 0;
  	$input[19][1] = 1;
  	$input[19][2] = 1;
  	$input[19][3] = 1;
  	$input[19][4] = 1;
  	$input[19][5] = 0;

  	$target[19][0] = 0;
  	$target[19][1] = 1;
  	$target[19][2] = 1;
  	$target[19][3] = 1;
  	$target[19][4] = 1;
  	$target[19][5] = 0;

  	//HURUF U
  	$input[20][0] = 1;
  	$input[20][1] = 0;
  	$input[20][2] = 0;
  	$input[20][3] = 0;
  	$input[20][4] = 1;
  	$input[20][5] = 1;

  	$target[20][0] = 1;
  	$target[20][1] = 0;
  	$target[20][2] = 0;
  	$target[20][3] = 0;
  	$target[20][4] = 1;
  	$target[20][5] = 1;

  	//HURUF V
  	$input[21][0] = 1;
  	$input[21][1] = 0;
  	$input[21][2] = 1;
  	$input[21][3] = 0;
  	$input[21][4] = 1;
  	$input[21][5] = 1;

  	$target[21][0] = 1;
  	$target[21][1] = 0;
  	$target[21][2] = 1;
  	$target[21][3] = 0;
  	$target[21][4] = 1;
  	$target[21][5] = 1;

  	//HURUF W
  	$input[22][0] = 0;
  	$input[22][1] = 1;
  	$input[22][2] = 1;
  	$input[22][3] = 1;
  	$input[22][4] = 0;
  	$input[22][5] = 1;

  	$target[22][0] = 0;
  	$target[22][1] = 1;
  	$target[22][2] = 1;
  	$target[22][3] = 1;
  	$target[22][4] = 0;
  	$target[22][5] = 1;

  	//HURUF X
  	$input[23][0] = 1;
  	$input[23][1] = 1;
  	$input[23][2] = 0;
  	$input[23][3] = 0;
  	$input[23][4] = 1;
  	$input[23][5] = 1;

  	$target[23][0] = 1;
  	$target[23][1] = 1;
  	$target[23][2] = 0;
  	$target[23][3] = 0;
  	$target[23][4] = 1;
  	$target[23][5] = 1;

  	//HURUF Y
  	$input[24][0] = 1;
  	$input[24][1] = 1;
  	$input[24][2] = 0;
  	$input[24][3] = 1;
  	$input[24][4] = 1;
  	$input[24][5] = 1;

  	$target[24][0] = 1;
  	$target[24][1] = 1;
  	$target[24][2] = 0;
  	$target[24][3] = 1;
  	$target[24][4] = 1;
  	$target[24][5] = 1;

  	//HURUF Z
  	$input[25][0] = 1;
  	$input[25][1] = 0;
  	$input[25][2] = 0;
  	$input[25][3] = 1;
  	$input[25][4] = 1;
  	$input[25][5] = 1;

  	$target[25][0] = 1;
  	$target[25][1] = 0;
  	$target[25][2] = 0;
  	$target[25][3] = 1;
  	$target[25][4] = 1;
  	$target[25][5] = 1;

    $this->session->set_userdata(array("ses_valid_data" => 1));

  	//$input = array();
  	$bobot_hidden = array();
  	$bobot_bias = array();
  	$bobot_hideout = array();
  	$bobot_biasout = array();
  	$panjang_input = 6;
  	$epoch = 0;
		$penyimpan_mse = array();
  	$mse = 0;
		$jum_input = $param_data["jum_input"];
		$max_epoch = $param_data["max_epoch"];
		$learning_rate = $param_data["learning_rate"];
  	$target_error = $param_data["target_error"];
		$panjang_node = $param_data["panjang_node"];

		/*
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
  	}*/

    $this->session->set_userdata(array("ses_jum_input" => $jum_input,
      "ses_waktu" => date ('D, d M Y h:i'),
      "ses_mx_iterasi" => $max_epoch,
      "ses_learning" => $learning_rate,
      "ses_target" => $target_error));

  	//inisialisasi bobot awal --> hidden
  	$bobot_hidden = $this->get_bobot_awal($panjang_node);
  	//inisialisasi bobot  bias--> hidden
  	$bobot_bias = $this->get_bobot_bias($panjang_node);
  	//inisialisasi bobot  hidden--> output
  	$bobot_hideout = $this->get_bobot_hidout($panjang_node);
  	//inisialisasi bobot  bias--> output
  	$bobot_biasout = $this->get_bobot_biasout();

  	do {
  		$z_in = array();
  		$z = array();
  		$y_in = array();
  		$y = array();
  		$error = 0;
  		$kuadrat_error = 0;
  		$informasi_error = array();
  		$n_koreksi = array();
  		$delta_hidout = array();
  		$delta_biasout = array();
  		$sinyal_out = array();
  		$delta_input_hid = array();
  		$delta_bias_hid = array();
  		$status = true;

  		// pengerjaan untuk 1 epoch
  		for ($data = 0; $data < $jum_input; $data++){
  			$mse = 0;
  			$error = 0;
  			$sinyal_out = array();
  			$n_koreksi2 = array();

  			//hitung z_in
  			for ($count = 0; $count < $panjang_node; $count++){
  				$z_in[$count] = $bobot_bias[$count];

  				for ($count2 = 0; $count2 < 6; $count2++){
  					$z_in[$count] += ($bobot_hidden[$count2][$count] * $input[$data][$count2]);

  				}
  				$z_in[$count] = round($z_in[$count],4) ;
  			}

  			//perkalian z
  			for ($count = 0; $count < $panjang_node; $count++){
  				$z[$count] = (1 / (1 + exp(-1*($z_in[$count]))));
  				$z[$count] = round($z[$count],4);
  			}

  			//yin
  			for ($count = 0; $count < 6; $count++){
  				$y_in[$count] = $bobot_biasout[$count];

  				for ($count2 = 0; $count2 < $panjang_node; $count2++){
  					$y_in[$count] += ($bobot_hideout[$count2][$count] * $z[$count2]);
  				}

  				$y_in[$count] = round($y_in[$count],4);
  			}

  			//pengaktifan layer
  			for ($count = 0; $count < 6; $count++){
  				$temp_error = 0;
  				$y[$count] = 1 / (1 + exp(-1*($y_in[$count])));
  				$temp_error = $target[$data][$count] - $y[$count];
  				$error += pow($temp_error,2);
  			}

  			//hitung MSE
  			$mse = $error / 6;


  			//hitung informasi error
  			for ($count = 0; $count < 6; $count++){
  				$temp = (1 + exp(-1 * ($y_in[$count])));
  				$temp2 = (1 + exp(-1 * ($y_in[$count])));

  				if ($temp == 0){
  					$temp = 1;
  				}

  				if ($temp2 == 0){
  					$temp2 = 1;
  				}

  				$n_koreksi[$count] = ($target[$data][$count] - $y[$count]) * ((1 / $temp)  * (1-(1 / $temp2)));
  				$n_koreksi[$count] = round ($n_koreksi[$count],4);
  			}

  			//hitung delta hidden --> out
  			for ($count = 0; $count < $panjang_node; $count++){
  				for ($count2 = 0; $count2 < 6; $count2++){
  					$delta_hidout[$count][$count2] = $learning_rate * $n_koreksi[$count2] * $z[$count];
  				}
  			}

  			//hitung delta bias --> out
  			for ($count = 0; $count < 6; $count++){
  				$delta_biasout[$count] = $learning_rate * $n_koreksi[$count];
  			}

  			//hitung sinyal balik output
  			for ($count = 0; $count < $panjang_node; $count++){
  				for ($count2 = 0; $count2 < 6; $count2++){
  					if (empty($sinyal_out[$count])){
  						$sinyal_out[$count] = 0;
  					}
  					$sinyal_out[$count] += ($n_koreksi[$count2] * $bobot_hideout[$count][$count2]);
  				}
  			}

  			//hitung nilai koreksi
  			for ($count = 0; $count < $panjang_node; $count++){
  				$temp = (1 + exp(-1 * ($z_in[$count])));
  				$temp2 = (1 + exp(-1 * ($z_in[$count])));

  				if ($temp == 0){
  					$temp = 1;
  				}

  				if ($temp2 == 0){
  					$temp2 = 1;
  				}
  				$n_koreksi2[$count] = $sinyal_out[$count] * ((1 / $temp)  * (1-(1 / $temp2)));
  			}

  			//hitung delta input --> hidden
  			for ($count = 0; $count < 6; $count++){
  				for ($count2 = 0; $count2 < $panjang_node; $count2++){
  					$delta_input_hid[$count][$count2] = $learning_rate * $n_koreksi2[$count2] * $input[$data][$count];
  				}
  			}

  			//hitung untuk delta bias
  			for ($count = 0; $count < $panjang_node; $count++){
  				$delta_bias_hid[$count] = $learning_rate * $n_koreksi2[$count];
  			}

  			//update semua bobot  menuju hidden
  			for ($count = 0; $count < 6; $count++){
  				for ($count2 = 0; $count2 < $panjang_node; $count2++){
  					$bobot_hidden[$count][$count2] += $delta_input_hid[$count][$count2];
  				}
  			}

  			//update semua bobot bias
  			for ($count = 0; $count < $panjang_node; $count++){
  				$bobot_bias[$count] += $delta_bias_hid[$count];
  			}

  			//update semua bobot  hidden --> output
  			for ($count = 0; $count < $panjang_node; $count++){
  				for ($count2 = 0; $count2 < 6; $count2++){
  					$bobot_hideout[$count][$count2] += $delta_hidout[$count][$count2];
  				}
  			}

  			//update semua bobot bias --> output
  			for ($count = 0; $count < 6; $count++){
  				$bobot_biasout[$count] += $delta_biasout[$count];
  			}

  			$penyimpan_mse[$epoch] = $mse;

  		}

  		if ($penyimpan_mse[$epoch] <= $target_error){
  			$status = false;
  			$mse = $penyimpan_mse[$epoch];
  			$max_epoch = $epoch;
  		}
  		$epoch++;
  	}while($epoch < $max_epoch && $status == true);

    $this->session->set_userdata(array(
      "ses_detail_iterasi" => $penyimpan_mse,
      "ses_stop_iterasi" => $max_epoch,
      'ses_mse' => $mse,
      "bobot_hidden" => $bobot_hidden,
      "bobot_bias" => $bobot_bias,
      "bobot_hideout" => $bobot_hideout,
      "bobot_biasout" => $bobot_biasout,
      "panjang_node" => $panjang_node
    ));

  	//untuk chart atau grafik
  	$penjumlah = ceil($max_epoch / 5);

  	for ($count = 0; $count < 5; $count++){
  		if ($count == 0){
  			$_SESSION['graf_mse'][$count] = $penyimpan_mse[0];
  		}
  		else if ($count == 4){
  			$_SESSION['graf_mse'][$count] = $penyimpan_mse[$max_epoch - 1];
  		}else{
  			$_SESSION['graf_mse'][$count] = $penyimpan_mse[$penjumlah];
  			$penjumlah += $penjumlah;
  		}
  	}
	}

  public function get_bobot_awal($panjang_node) {
		$temp_bobot_hid = array();

		for ($count=0; $count<6; $count++){
			for ($count2 = 0; $count2 < $panjang_node; $count2++){
				$temp_bobot_hid[$count][$count2] = rand(1000,9000) / 10000;
			}
		}

		return $temp_bobot_hid;
	}

	public function get_bobot_bias($panjang_node) {
		$temp_bobot_bias = array();

		for ($count = 0; $count < $panjang_node; $count++){
			$temp_bobot_bias[$count] = rand(1000,9000) / 10000;
		}

		return $temp_bobot_bias;
	}

	public function get_bobot_hidout($panjang_node){
		$temp_bobot_hidout = array();

		for ($count=0; $count<$panjang_node; $count++){
			for ($count2 = 0; $count2 < 6; $count2++){
				$temp_bobot_hidout[$count][$count2] = rand(1000,9000) / 10000;
			}
		}

		return $temp_bobot_hidout;
	}

	public function get_bobot_biasout(){
		$temp_bobot_biasout = array();

		for ($count = 0; $count < 6; $count++){
			$temp_bobot_biasout[$count] = rand(1000,9000) / 10000;
		}

		return $temp_bobot_biasout;
	}
}
