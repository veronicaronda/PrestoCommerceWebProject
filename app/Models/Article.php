<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use Searchable;
    use HasFactory;


    protected $fillable = ['title', 'body', 'price', 'user_id','category_id','article_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->last_action = $value ? 'accepted' : 'rejected';
        $this->save();
        return true;
    }

    public function undoLastAction(){
        if ($this->last_action === 'accepted') {
            $this->is_accepted = null;
        } elseif ($this->last_action === 'rejected') {
            $this->is_accepted = null;
        }
        $this->last_action = null;
        $this->save();
        return true;
    }

    public static function count(){
        return Article::where("is_accepted" , null)->count();
    }
    public function  toSearchableArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category,
        ];
    }
 public function images(): HasMany {
    return $this->hasMany(Image::class);
 }

 public function favoritedBy()
 { 
     return $this->belongsToMany(User::class, 'favorites');
 }

}