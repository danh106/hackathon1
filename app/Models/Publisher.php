<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $primaryKey = 'publisherid';
    protected $table='tblpublisher';
    public $timestamps=false;
    protected $fillable=['publisherid','name','email','description'];
    
    public function tblmovies(){
        return $this->hasMany(Document::class,'publisherid','publisherid');
    }
}
