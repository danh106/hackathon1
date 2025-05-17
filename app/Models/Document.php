<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $primaryKey = 'documentid';
    protected $table='tbldocument';
    public $timestamps=false;
    protected $fillable=['documentid', 'title', 'authorid', 'publisherid', 'publishdate', 'pagecount', 'languageid', 'image', 'isactive', 'isnew', 'documentpath', 'userid', 'description', 'maindetail','createdat','updateat'];
    protected $casts = [
        'isnew'=>'bool',
        'isactive'=>'bool',
        'publishdate' => 'datetime',
        'updatedat' => 'datetime',
        'createdat' => 'datetime'
    ];
    public function author(){
        return $this->belongsTo(Author::class,'authorid','authorid');
    }
    public function user(){
        return $this->belongsTo(User::class,'userid','userid');
    }
    public function publisher(){
        return $this->belongsTo(Publisher::class,'publisherid','publisherid');
    }
    public function tblcomments(){
        return $this->hasMany(Comment::class,'documentid','documentid');
    }
    public function tblfavoritedocuments(){
        return $this->hasMany(Publisher::class,'documentid','documentid');
    }
    public function tbldocumentcategories(){
        return $this->hasMany(DocumentCategory::class, 'documentid', 'documentid');
    }
    public function language(){
        return $this->belongsTo(Language::class,'languageid','languageid');
    }
}
