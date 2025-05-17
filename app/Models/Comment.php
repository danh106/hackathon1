<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'commentid';
    protected $table='tblcomment';
    public $timestamps=false;
    protected $fillable=['userid','documentid','parentid','detail','createddate','modifieddate','isactive'];
    protected $casts = [
        'isactive'=>'bool',
        'modifieddate' => 'datetime',
        'createddate' => 'datetime'
    ];
    public function user(){
        return $this->belongsTo(User::class,'userid','userid');
    }
    public function document(){
        return $this->belongsTo(User::class,'documentid','documentid');
    }
}
