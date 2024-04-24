<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'photo_path', 'description', 'link', 'category_id'];

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
