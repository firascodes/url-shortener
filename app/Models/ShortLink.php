<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    use HasFactory;
    protected $table = 'urls';
    protected $fillable = ['original_url', 'shortened_url', 'click_count'];

    public function clicks()
    {
        return $this->hasMany(UrlClick::class, 'url_id');
    }

}