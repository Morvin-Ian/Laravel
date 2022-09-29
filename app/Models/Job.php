<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable =['title', 'company','location', 'email', 'tags','description'];

    public function Jobfilter($query, array $filters){
        dd($filters['tag']);
    }
}
