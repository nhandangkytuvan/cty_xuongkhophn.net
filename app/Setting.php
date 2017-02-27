<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Setting extends Model{
    protected $table = 'setting';
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}