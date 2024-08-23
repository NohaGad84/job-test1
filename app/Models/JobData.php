<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobData extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'image',
        'description',
        'responsability',
        'job_nature',
        'location',
        'salary_from',
        'salary_to',
        'qualification',
        'date_line',
        'published',
       'category_id',
        'company_id',
     ];
    public function category() {
      return $this->belongsTo(Category::class);
    }
    public function company() {
      return $this->belongsTo(Company::class);
    }
}
