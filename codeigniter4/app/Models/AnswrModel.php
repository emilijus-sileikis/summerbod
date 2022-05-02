<?php

namespace App\Models;

use CodeIgniter\Model;

class AnswrModel extends Model
{
    function getData(){
        $builder = $this->db->table('quiz');

        if (isset($_POST["btnSubmit"])) {
            $builder->select();
            $res = $builder->get(4);
            $this->db->close();
            return $res;
        }
    }

}