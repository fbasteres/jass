<?php

namespace App\Models\default;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    use HasFactory;
    protected $table = 'tiposervicio';
    protected $fillable = ['name'];
}
