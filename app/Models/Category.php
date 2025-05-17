<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'categoryid';
    protected $table='tblcategory';
    public $timestamps=false;
    protected $fillable=['categoryid','name','description','isdeleted'];
    protected $casts = [
        'isdeleted'=>'bool'
    ];
    public function tbldocumentcategories(){
        return $this->hasMany(DocumentCategory::class,'categoryid','categoryid');
    }
}
