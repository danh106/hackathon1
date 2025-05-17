<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $primaryKey = 'authorid';
    protected $table='tblauthor';
    public $timestamps=false;
    protected $fillable=['authorid','name','image','biography'];
    public function tbldocuments(){
        return $this->hasMany(Document::class,'authorid','authorid');
    }
}
