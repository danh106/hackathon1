<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchHistory extends Model
{
    protected $primaryKey = 'watchhistoryid';
    protected $table='tblwatchhistory';
    public $timestamps=false;
    protected $fillable=['watchhistoryid','userid','movieid','episodeid','watcheddate','progress'];
    public function movie(){
        return $this->belongsTo(Movie::class,'movieid','movieid');
    }
    public function user(){
        return $this->belongsTo(User::class,'userid','userid');
    }
    public function episode(){
        return $this->belongsTo(episode::class,'episodeid','episodeid');
    }
}
