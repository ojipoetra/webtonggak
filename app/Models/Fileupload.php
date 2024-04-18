<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fileupload extends Model
{
    use HasFactory;
    protected $fillable = ['deskripsi', 'name_file'];
    protected $table = 'fileuploader';
    // protected $primaryKey = 'code_doc';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
