<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_test extends CI_Model {

	public function test_pros($param_data)
	{
    $input = array();
  	$alphabet = "";
  	$str_output = "";

  	$input[0] = $param_data[0];
		$input[1] = $param_data[1];
		$input[2] = $param_data[2];
		$input[3] = $param_data[3];
		$input[4] = $param_data[4];
		$input[5] = $param_data[5];

  	for ($count = 0; $count < 6; $count++){
  		//echo $input[$count];
  	}

  	$threshold = 0.5;
  	$output = array();
  	$z_in = array();
  	$z = array();
  	$y_in = array();
  	$y = array();
  	$bobot_hidden = array();
  	$bobot_bias = array();
  	$bobot_hideout = array();
  	$bobot_biasout = array();

  	$bobot_hidden = $_SESSION['bobot_hidden'];
  	$bobot_bias = $_SESSION['bobot_bias'];
  	$bobot_hideout = $_SESSION['bobot_hideout'];
  	$bobot_biasout = $_SESSION['bobot_biasout'];
  	$panjang_node = $_SESSION['panjang_node'];

  	for ($count = 0; $count < $panjang_node; $count++){
  		$z_in[$count] = $bobot_bias[$count];

  		for ($count2 = 0; $count2 < 6; $count2++){
  			$z_in[$count] += ($bobot_hidden[$count2][$count] * $input[$count2]);

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

  	//echo "<br/>";

  	//pengaktifan layer
  	for ($count = 0; $count < 6; $count++){
  		$temp_error = 0;
  		$y[$count] = 1 / (1 + exp(-1*($y_in[$count])));
  		//echo $y[$count];
  		//echo "<br/>";
  	}

  	for ($count = 0; $count < 6; $count++){
  		if ($y[$count] < $threshold){
  			$output[$count] = 0;
  		}else {
  			$output[$count] = 1;
  		}
  	}

  	//echo "<br/>";
  	for ($count = 0; $count < 6; $count++){
  		$str_output .= $output[$count];
  	}

  	switch ($str_output){
  		case '100000':
  		$alphabet = "a";
  		break;

  		case '101000':
  		$alphabet = "b";
  		break;

  		case '110000':
  		$alphabet = "c";
  		break;

  		case '110100':
  		$alphabet = "d";
  		break;

  		case '100100':
  		$alphabet = "e";
  		break;

  		case '111000':
  		$alphabet = "f";
  		break;

  		case '111100':
  		$alphabet = "g";
  		break;

  		case '101100':
  		$alphabet = "h";
  		break;

  		case '011000':
  		$alphabet = "i";
  		break;

  		case '010100':
  		$alphabet = "j";
  		break;

  		case '100010':
  		$alphabet = "k";
  		break;

  		case '101010':
  		$alphabet = "l";
  		break;

  		case '110010':
  		$alphabet = "m";
  		break;

  		case '110110':
  		$alphabet = "n";
  		break;

  		case '100110':
  		$alphabet = "o";
  		break;

  		case '111010':
  		$alphabet = "p";
  		break;

  		case '111110':
  		$alphabet = "q";
  		break;

  		case '101110':
  		$alphabet = "r";
  		break;

  		case '011010':
  		$alphabet = "s";
  		break;

  		case '011110':
  		$alphabet = "t";
  		break;

  		case '100011':
  		$alphabet = "u";
  		break;

  		case '101011':
  		$alphabet = "v";
  		break;

  		case '011101':
  		$alphabet = "w";
  		break;

  		case '110011':
  		$alphabet = "x";
  		break;

  		case '110111':
  		$alphabet = "y";
  		break;

  		case '100111':
  		$alphabet = "z";
  		break;

  		default:
  		$alphabet = "default";
  		break;

  	}

  	return $alphabet;

	}
}
