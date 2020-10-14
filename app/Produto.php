<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['name', 'peso'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
