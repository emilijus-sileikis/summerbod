<?php

namespace App\Models;

use CodeIgniter\Model;

class AnswrModel extends Model
{
    function getData()
    {
        $builder = $this->db->table('quiz');
        $builder->select();
        $res = $builder->get();
        $this->db->close();
        return $res;

    }
}