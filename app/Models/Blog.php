<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'blogid';
    protected $table='tblblog';
    public $timestamps=false;
    protected $fillable=['blogid','title','alias','description','detail','image','createddate','createdby','modifieddate','modifiedby','userid','isactive','keywords'];
    protected $casts = [
        'createddate' => 'datetime',
        'modifieddate' => 'datetime',
        'isactive'=>'bool',
    ];
    public function user(){
        return $this->belongsTo(User::class,'userid','userid');
    }
    public function tblblogcomments(){
        return $this->hasMany(BlogComment::class,'blogid','blogid');
    }
}
