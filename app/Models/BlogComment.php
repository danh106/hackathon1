<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $primaryKey = 'blogCommentid';
    protected $table='tblblogComment';
    public $timestamps=false;
    protected $fillable=['commentid','userid','blogid','parentid','detail','createddate','modifieddate','isactive'];
    public function user(){
        return $this->belongsTo(User::class,'userid','userid');
    }
    public function blog(){
        return $this->belongsTo(Blog::class,'blogid','blogid');
    }
}
