<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kampanye extends Model
{
    protected $table = 'kampanyes';
    protected $fillable = ['judulKampanye','deskKampanye','targetKampanye','gambarKampanye'];
}
