<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infokamar extends Model
{
    use HasFactory;
    protected $table = 'infokamar';
    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
