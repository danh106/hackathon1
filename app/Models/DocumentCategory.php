<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $primaryKey = 'documentcategoryid';
    protected $table='tbldocumentcategory';
    public $timestamps=false;
    protected $fillable=['documentcategoryid','documentid','categoryid'];
    public function document(){
        return $this->belongsTo(Document::class,'documentid','documentid');
    }
    public function category(){
        return $this->belongsTo(Category::class,'categoryid','categoryid');
    }
}
