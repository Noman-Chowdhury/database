<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sector_id',
    ];

    public function sectorcat(){

        return $this->belongsTo(Sectors::class, 'sector_id','id');

    }
    public function subcategories(){

        return $this->hasMany(productsubcategories::class,'category_id','id');
    }

}
