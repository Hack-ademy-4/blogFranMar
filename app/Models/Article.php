<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable= ['title','content'];

    public function isAuthUserAuthor()
    {

        if($this->user_id == Auth::id())
        return true;

        return false;
    }


   
    public function user()
    {
        return $this->belongsTo(User::class);
    
    }
   
    public function tags()

    {
        return $this->belongsToMany(Tag::class);
    }
    
}
