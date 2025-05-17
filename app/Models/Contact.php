<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'contactid';
    protected $table='tblcontact';
    public $timestamps=false;
    protected $fillable=['contactid','name','phone','email','message','isread','createddate','createdby','modifieddate','modifiedby'];
}
