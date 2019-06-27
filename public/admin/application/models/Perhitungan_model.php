<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan_model extends CI_Model {

     function get_calon()
    {
        $this->db->select('calon_aslab.nama_lengkap,calon_aslab.ipk , 
        n1.name as nilai_algo1, 
        n2.name as nilai_algo2,
        n3.name as nilai_pbo1,
        n4.name as nilai_pbo2,
        n5.name as nilai_perweb,
        n6.name as nilai_pemweb,
        alasan.name as alasan,
        sikap.name as sikap,
        ');
        
        $this->db->join('nilai n1', 'calon_aslab.nilai_algo1 = n1.id', 'left');
        $this->db->join('nilai n2', 'calon_aslab.nilai_algo2 = n2.id', 'left');
        $this->db->join('nilai n3', 'calon_aslab.nilai_pbo1 = n3.id', 'left');
        $this->db->join('nilai n4', 'calon_aslab.nilai_pbo2 = n4.id', 'left');
        $this->db->join('nilai n5', 'calon_aslab.nilai_perweb = n5.id', 'left');
        $this->db->join('nilai n6', 'calon_aslab.nilai_pemweb = n6.id', 'left');
        $this->db->join('alasan', 'calon_aslab.alasan = alasan.id', 'left');
        $this->db->join('sikap', 'calon_aslab.sikap = sikap.id', 'left');
        
        return $this->db->get('calon_aslab')->result_array();
    }

    function get_calon_bobot()
    {
        $this->db->select('calon_aslab.nama_lengkap,
        calon_aslab.ipk , 
        n1.bobot / (select max(bobot) from nilai) as nilai_algo1, 
        n2.bobot / (select max(bobot) from nilai) as nilai_algo2,
        n3.bobot / (select max(bobot) from nilai) as nilai_pbo1,
        n4.bobot / (select max(bobot) from nilai) as nilai_pbo2,
        n5.bobot / (select max(bobot) from nilai) as nilai_perweb,
        n6.bobot / (select max(bobot) from nilai) as nilai_pemweb,
        alasan.bobot / (select max(bobot) from nilai) as alasan,
        sikap.bobot / (select max(bobot) from nilai) as sikap,
        ');
        
        $this->db->join('nilai n1', 'calon_aslab.nilai_algo1 = n1.id', 'left');
        $this->db->join('nilai n2', 'calon_aslab.nilai_algo2 = n2.id', 'left');
        $this->db->join('nilai n3', 'calon_aslab.nilai_pbo1 = n3.id', 'left');
        $this->db->join('nilai n4', 'calon_aslab.nilai_pbo2 = n4.id', 'left');
        $this->db->join('nilai n5', 'calon_aslab.nilai_perweb = n5.id', 'left');
        $this->db->join('nilai n6', 'calon_aslab.nilai_pemweb = n6.id', 'left');
        $this->db->join('alasan', 'calon_aslab.alasan = alasan.id', 'left');
        $this->db->join('sikap', 'calon_aslab.sikap = sikap.id', 'left');
        
        $result = $this->db->get('calon_aslab')->result_array();
        $results = array();
        $min = array(null,null,null,null,null,null,null,null,null);
        $max = array(null,null,null,null,null,null,null,null,null);

        foreach ($result as $data) {
            if ($data['ipk'] == null) {
                continue;
            }
            $data['ipk'] = $this->get_ipk_bobot($data['ipk']);
            $min[0] = $min[0] == null ?  $data['ipk'] : ($min[0] < $data['ipk'] ? $min[0] : $data['ipk']);
            $min[1] = $min[1] == null ?  $data['nilai_algo1'] : ($min[1] < $data['nilai_algo1'] ? $min[1] : $data['nilai_algo1']);
            $min[2] = $min[2] == null ?  $data['nilai_algo2'] : ($min[2] < $data['nilai_algo2'] ? $min[2] : $data['nilai_algo2']);
            $min[3] = $min[3] == null ?  $data['nilai_pbo1'] : ($min[3] < $data['nilai_pbo1'] ? $min[3] : $data['nilai_pbo1']);
            $min[4] = $min[4] == null ?  $data['nilai_pbo2'] : ($min[4] < $data['nilai_pbo2'] ? $min[4] : $data['nilai_pbo2']);
            $min[5] = $min[5] == null ?  $data['nilai_perweb'] : ($min[5] < $data['nilai_perweb'] ? $min[5] : $data['nilai_perweb']);
            $min[6] = $min[6] == null ?  $data['nilai_pemweb'] : ($min[6] < $data['nilai_pemweb'] ? $min[6] : $data['nilai_pemweb']);
            $min[7] = $min[7] == null ?  $data['alasan'] : ($min[7] < $data['alasan'] ? $min[7] : $data['alasan']);
            $min[8] = $min[8] == null ?  $data['sikap'] : ($min[8] < $data['sikap'] ? $min[8] : $data['sikap']);

            $max[0] = $max[0] == null ?  $data['ipk'] : ($max[0] > $data['ipk'] ? $max[0] : $data['ipk']);
            $max[1] = $max[1] == null ?  $data['nilai_algo1'] : ($max[1] > $data['nilai_algo1'] ? $max[1] : $data['nilai_algo1']);
            $max[2] = $max[2] == null ?  $data['nilai_algo2'] : ($max[2] > $data['nilai_algo2'] ? $max[2] : $data['nilai_algo2']);
            $max[3] = $max[3] == null ?  $data['nilai_pbo1'] : ($max[3] > $data['nilai_pbo1'] ? $max[3] : $data['nilai_pbo1']);
            $max[4] = $max[4] == null ?  $data['nilai_pbo2'] : ($max[4] > $data['nilai_pbo2'] ? $max[4] : $data['nilai_pbo2']);
            $max[5] = $max[5] == null ?  $data['nilai_perweb'] : ($max[5] > $data['nilai_perweb'] ? $max[5] : $data['nilai_perweb']);
            $max[6] = $max[6] == null ?  $data['nilai_pemweb'] : ($max[6] > $data['nilai_pemweb'] ? $max[6] : $data['nilai_pemweb']);
            $max[7] = $max[7] == null ?  $data['alasan'] : ($max[7] > $data['alasan'] ? $max[7] : $data['alasan']);
            $max[8] = $max[8] == null ?  $data['sikap'] : ($max[8] > $data['sikap'] ? $max[8] : $data['sikap']);
            $results['data'][] = $data;
        }
        $results['min']['ipk'] = $min[0];
        $results['min']['nilai_algo1'] = $min[1];
        $results['min']['nilai_algo2'] = $min[2];
        $results['min']['nilai_pbo1'] = $min[3];
        $results['min']['nilai_pbo2'] = $min[4];
        $results['min']['nilai_perweb'] = $min[5];
        $results['min']['nilai_pemweb'] = $min[6];
        $results['min']['alasan'] = $min[7];
        $results['min']['sikap'] = $min[8];

        $results['max']['ipk'] = $max[0];
        $results['max']['nilai_algo1'] = $max[1];
        $results['max']['nilai_algo2'] = $max[2];
        $results['max']['nilai_pbo1'] = $max[3];
        $results['max']['nilai_pbo2'] = $max[4];
        $results['max']['nilai_perweb'] = $max[5];
        $results['max']['nilai_pemweb'] = $max[6];
        $results['max']['alasan'] = $max[7];
        $results['max']['sikap'] = $max[8];
        return $results;
    }

    function get_ipk_bobot(float $ipk){
        if($ipk >= 2.0 && $ipk < 2.5){
            return 1/4;
        }
        else if($ipk >= 2.5 && $ipk < 3.0){
            return 2/4;
        }
        else if($ipk >= 3.0 && $ipk < 3.5){
            return 3/4;
        }
        else if($ipk >= 3.5 && $ipk <= 4.0){
            return 4/4;
        }
    }

}

/* End of file Perhitungan_model.php */
