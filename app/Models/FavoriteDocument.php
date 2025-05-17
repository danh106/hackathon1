<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteDocument extends Model
{
    protected $primaryKey = 'favoriteid';
    protected $table='tblfavoritedocument';
    public $timestamps=false;
    protected $fillable=['favoriteid','userid','documentid','addeddate'];
    public function document(){
        return $this->belongsTo(Document::class,'documentid','documentid');
    }
    public function user(){
        return $this->belongsTo(Document::class,'userid','userid');
    }
}
