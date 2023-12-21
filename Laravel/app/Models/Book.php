<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'author',
        'year_publication_at',
        'publisher',
        'cover_url_s',
        'cover_url_m',
        'cover_url_l',
    ];

    public function ratings() {
        return $this->hasMany(Rating::class, 'isbn', 'isbn');
    }
}
