<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlClick extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address', 'country', 'city'];
    public function shortLink()
    {
        return $this->belongsTo(ShortLink::class, 'url_id');
    }

}