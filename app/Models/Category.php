<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable= [
        'category_name',
        'image',
        ];

        public function Job() {
            return $this->hasOne(JobData::class);
    }
}
