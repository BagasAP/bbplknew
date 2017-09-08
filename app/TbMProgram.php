<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMProgram extends Model
{
    //
         protected $table = 'tb_m_programs';

     public function kejuruan() {
    	return $this->belongsTo('App\TbMKejuruan', 'kd_kejuruan');
    }

    public function subkejuruan() {
    	return $this->belongsTo('App\TbMSubKejuruan', 'kd_sub_kejuruan');
    }
}
