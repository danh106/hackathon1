<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    public $timestamps=false;
    protected $primaryKey = 'userid';
    protected $table='tbluser';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['avatar','name','address','phonenumber','username','password','roleid','email','createddate','isactive'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'password'=>'hashed',
        'isactive'=>'bool',
        'createddate'=>'datetime'
    ];
    public function tblblogs(){
        return $this->hasMany(Blog::class,'userid','userid');
    }
    public function tblblogcomments(){
        return $this->hasMany(BlogComment::class,'userid','userid');
    }
    public function tblcomments(){
        return $this->hasMany(Comment::class,'userid','userid');
    }
    public function tblfavoritedocuments(){
        return $this->hasMany(FavoriteDocument::class,'userid','userid');
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'roleid', 'roleid');
    }
}
