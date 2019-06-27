<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

    public function index()
    {
        $data = array();
        $this->load->model('Perhitungan_model');
        $data['data_pendaftar'] = $this->Perhitungan_model->get_calon();
        
        $bobot = $this->Perhitungan_model->get_calon_bobot();
        $data['data_bobot'] = $bobot;

        $nilai_utility = array();
        foreach ($bobot['data'] as $row) {
            if ($row['ipk'] == null) {
                continue;
            }
            $row_new = array();
            $row_new['nama_lengkap'] = $row['nama_lengkap'];
            for ($i=1; $i < sizeof($row) ; $i++) { 
                $row_val = array_values($row);
                $row_key = array_keys($row);
                $row_new[$row_key[$i]] = ($row_val[$i] - $bobot['min'][$row_key[$i]]) / (($bobot['max'][$row_key[$i]] - $bobot['min'][$row_key[$i]]) == 0 ? 1 :($bobot['max'][$row_key[$i]] - $bobot['min'][$row_key[$i]]));
            }
            $nilai_utility[] = $row_new;
        }

        $data['nilai_utility'] = $nilai_utility;

        $bobot_tiap = array(4,3,3,3,3,3,3,2,3);
        $nilai_akhir = array();
        foreach ($nilai_utility as $row) {
            $row_new = array();
            $row_new['nama_lengkap'] = $row['nama_lengkap'];
            $jumlah = 0;
            for ($i=1; $i < sizeof($row) ; $i++) { 
                $row_val = array_values($row);
                $row_key = array_keys($row);
                $row_new[$row_key[$i]] = $row_val[$i] * $bobot_tiap[$i - 1] ;
                $jumlah += $row_val[$i] * $bobot_tiap[$i - 1];
            }
            $row_new['total'] = $jumlah;
            $nilai_akhir[] = $row_new;
        }

        $data['nilai_akhir'] = $nilai_akhir;

        usort($nilai_akhir, function($a, $b) {
            return $b['total'] <=> $a['total'];
        });
        
        $data['rank'] = $nilai_akhir;
        
        $data['_view'] = 'calon_aslab/proses';
        $this->load->view('layouts/main',$data);
    }
    
}

/* End of file Perhitungan.php */
