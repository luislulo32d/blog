<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relaciones 1-n
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Relaciones inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
