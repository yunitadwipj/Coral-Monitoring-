<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Murl');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
	}

	public function index()
	{
		$data['param'] = $this->Murl->ambilData()->result();
		$data['test'] = $this->Murl->ambilDataTest()->result();
    //training
    $data['max1'] = $this->Murl->dataMax('X1')->result();
    $data['max2'] = $this->Murl->dataMax('X2')->result();
    $data['max3'] = $this->Murl->dataMax('X3')->result();
    $data['max4'] = $this->Murl->dataMax('X4')->result();
    $data['maxt'] = $this->Murl->dataMax('T')->result();
    $data['minx1'] = $this->Murl->dataMin('X1')->result();
    $data['minx2'] = $this->Murl->dataMin('X2')->result();
    $data['minx3'] = $this->Murl->dataMin('X3')->result();
    $data['minx4'] = $this->Murl->dataMin('X4')->result();
    $data['mint'] = $this->Murl->dataMin('T')->result();
    //testing
    $data['mxtes1'] = $this->Murl->dataMaxt('X1')->result();
    $data['mxtes2'] = $this->Murl->dataMaxt('X2')->result();
    $data['mxtes3'] = $this->Murl->dataMaxt('X3')->result();
    $data['mxtes4'] = $this->Murl->dataMaxt('X4')->result();
    
    $data['mntes1'] = $this->Murl->dataMint('X1')->result();
    $data['mntes2'] = $this->Murl->dataMint('X2')->result();
    $data['mntes3'] = $this->Murl->dataMint('X3')->result();
    $data['mntes4'] = $this->Murl->dataMint('X4')->result();
    

		$this->load->view('Awal', $data);
	}
	public function data()
	{
		$data['param'] = $this->Murl->ambilData()->result();
		$this->load->view('Home', $data);
	}
	public function uji()
	{
		$this->load->view('uji');
	}
	public function mulaiUji(){
    $bobot = array(-4.05, -1.18, 2.69, -3.99, 0.03, 0.54, 0.2, 0.3, -3.8, 4.12);
    //$bobot = array(-1.1, 0.3, -0.06, 0.2, 0.36, 0.2, 0.2, 0.3, -8.05, 2.92);
		$suhu = $this->input->get('suhu');
		$ph = $this->input->get('ph');
		$turbi = $this->input->get('turbi');
		$do = $this->input->get('do');

    $X1 = (0.8*($suhu-27.31)/(28.44-27.31)+0.1);
    $X3 = (0.8*($turbi-39.2)/(100-39.2)+0.1);
    $X2 = (0.8*($ph-6.5)/(16.15-6.5)+0.1);
    $X4 = (0.8*($do-5.72)/(36.55-5.72)+0.1);

		$bias = 1;
		    $bobotx1k1 = $bobot[0]; 
        $bobotx1k2 = $bobot[1];
        $bobotx2k1 = $bobot[2];
        $bobotx2k2 = $bobot[3];
        $bobotx3k1 = $bobot[4];
        $bobotx3k2 = $bobot[5];
        $bobotx4k1 = $bobot[6];
        $bobotx4k2 = $bobot[7];
        $bobotk1l = $bobot[8];
        $bobotk2l = $bobot[9];
		
            $netK1 = $bias+($X1*$bobotx1k1+$X2*$bobotx2k1+$X3*$bobotx3k1+$X4*$bobotx4k1);
            $netK2 = $bias+($X1*$bobotx1k2+$X2*$bobotx2k2+$X3*$bobotx3k2+$X4*$bobotx4k2);
            $K1 = 1/(1+exp(-$netK1));
            $K2 = 1/(1+exp(-$netK2));
            $netL = $bias+($K1*$bobotk1l+$K2*$bobotk2l);
            $L = 1/(1+exp(-$netL));
            $this->session->set_flashdata('l', $L.',<br>'.$X1.','.$X2.','.$X3.','.$X4);
            
            $fuzzyOuput = '';
            $fuzzyNilai = 0;
          if ($L <= 0.2) {
            $fuzzyOuput = 'Buruk';
            $fuzzyNilai = '0';
          }
          if (($L > 0.2) && ($L < 0.4)) {
            $hitungBuruk = (0.4-$L)/(0.4-0.2);
            $hitungCukup = ($L-0.2)/(0.4-0.2);
            if ($hitungCukup > $hitungBuruk) {
              $fuzzyOuput = 'Cukup';
              $fuzzyNilai = $hitungCukup;
            } else {
              $fuzzyOuput = 'Buruk';
              $fuzzyNilai = $hitungBuruk;
            }
          }
          if (($L > 0.6) && ($L < 0.8)) {
            $hitungCukup = (0.8 - $L)/(0.8-0.6);
            $hitungBaik = ($L-0.6)/(0.8-0.6);
            if ($hitungBaik > $hitungCukup) {
              $fuzzyOuput = 'Baik';
              $fuzzyNilai = $hitungBaik;
            } else {
              $fuzzyOuput = 'Cukup';
              $fuzzyNilai = $hitungCukup;
            }
          }

          if (($L >= 0.4) && ($L <=0.6)) {
            $fuzzyOuput = 'Cukup';
            $fuzzyNilai = 0.5;
          }
          if ($L >= 0.8) {
            $fuzzyOuput = 'Baik';
            $fuzzyNilai = 1;
          }
        
		$this->session->set_flashdata('message', "<div class='col-md-12 grid-margin stretch-card'><div class='card'><div class='card-body'><h4 class='card-title'>Hasil Analisis Kualitas Air Laut</h4><h5 class='card-description'><i class='mdi mdi-weather-sunny'></i> Hasil L : $L  <br><i class='mdi mdi-weather-sunny'></i> Suhu : $suhu  <br><i class='mdi mdi-thermometer-lines'></i> pH : $ph  <br><i class='mdi mdi-cup-water'></i> Turbi : $turbi  <br><i class='mdi mdi-airballoon'></i> DO : $do</h5><h1 align='center'>$fuzzyOuput</h1><h1></div></div></div>");
		redirect('url/uji');
	}
	
	
}
