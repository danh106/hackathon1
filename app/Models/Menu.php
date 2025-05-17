<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'menuid';
    protected $table='tblmenu';
    public $timestamps=false;
    protected $fillable=['menuid','title','isactive','link','levels','parentid','position','createddate','modifieddate'];
    protected $casts = [
        'isactive'=>'bool',
        'createddate' => 'datetime',
        'modifieddate' => 'datetime',
    ];
}
