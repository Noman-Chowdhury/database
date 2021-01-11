<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'user_id',
        'category_id',
        'subcategory_id',
    ];

    public function subcategories()
    {
        return $this->belongsTo(productsubcategories::class,  'subcategory_id', 'id');
    }

    public function seller()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }

}
