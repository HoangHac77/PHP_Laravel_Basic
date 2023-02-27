<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    // class name and tables name may be different;
    protected $table = 'food';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $dateFormat = 'h:m:s';
    protected $fillable = ['name', 'count', 'descriptions', 'image_path', 'category_id'];
    // a food belongs to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
