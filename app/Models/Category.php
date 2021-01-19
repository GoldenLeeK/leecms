<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    public function article()
    {
        $this->belongsTo(Article::class);
    }
}
