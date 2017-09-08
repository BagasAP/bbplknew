<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMSubKejuruan extends Model
{
    //
    protected $table = 'tb_m_sub_kejuruans';
        	protected $fillable =  ['id','kd_sub_kejuruan','kd_kejuruan','nama_sub_kejuruan','keterangan'];
    protected $visible =  ['id','kd_sub_kejuruan','kd_kejuruan','nama_sub_kejuruan','keterangan'];
    public $timestamps = true;
        

      public function TbMKejuruan() {
    	return $this->belongsTo('App\TbMKejuruan','kd_kejuruan');
    }

    public function program()
	{
		return $this->hasMany('App\TbMProgram','kd_sub_kejuruan');
	}
}
