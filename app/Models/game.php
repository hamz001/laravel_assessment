<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class game extends Model
{
    protected $guarded = [];
    use HasFactory, Searchable;
    
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
        ];
    }

    public function uploaders(){
        return $this->belongsTo(User::class, 'uploader');
    }
}
