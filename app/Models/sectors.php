<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function category(){
        return $this->hasMany(productcategories::class,'sector_id','id');
    }
}
