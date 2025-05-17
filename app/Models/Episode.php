<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $primaryKey = 'episodeid';
    protected $table='tblepisode';
    public $timestamps=false;
    protected $fillable=['episodeid','movieid','title','alias','thumbnail','description','detail','episodenumber','duration','releasedate','keywords','videourl','videoid','isactive'];
    protected $casts = [
        'isactive'=>'bool',
        'releasedate' => 'datetime',
    ];
    public function movie(){
        return $this->belongsTo(Movie::class,'movieid','movieid');
    }
}
