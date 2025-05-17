<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $primaryKey = 'languageid';
    protected $table='tbllanguage';
    public $timestamps=false;
    protected $fillable=['languageid','name'];
    
    public function tbldocuments(){
        return $this->hasMany(Document::class,'languageid','languageid');
    }
}
