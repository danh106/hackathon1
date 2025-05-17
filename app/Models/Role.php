<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'roleid';
    protected $table='tblrole';
    public $timestamps=false;
    protected $fillable=['name','description'];
    public function tblusers(){
        return $this->hasMany(User::class, 'roleid', 'roleid');
    }
}
