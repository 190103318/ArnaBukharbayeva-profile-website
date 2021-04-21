<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    protected $fillable = ['form_id'=>1,'file'];

    public function form(){
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }
}
