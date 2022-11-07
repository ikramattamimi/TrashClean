<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public function products()
    {
        return $this->belongsTo('App\Models\User');
    }
}
