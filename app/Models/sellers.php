<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellers extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','sector_id','company_name','description'
    ];
    public function sector()
    {
        return $this->belongsTo(Sectors::class,'sector_id','id');
    }
}
