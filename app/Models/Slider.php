<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'sliderid';
    protected $table='tblslider';
    public $timestamps=false;
    protected $fillable=['sliderid','imagepath','title','description','isactive','displayorder','createddate'];
    protected $casts = [
        'isactive'=>'bool',
        'createddate' => 'datetime'
    ];
}
