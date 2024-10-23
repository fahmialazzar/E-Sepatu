<?php

namespace App\Models;

use CodeIgniter\Model;

class KuponModel extends Model
{
    protected $table = 'kupon';
    protected $primaryKey = 'id_kupon';
    protected $allowedFields = ['code','diskon_persen','valid_until'];

    public function getCoupon($code){
        return $this->where('code',$code)->where('valid_until>=',date('Y-m-d'))->first();
    }
}
