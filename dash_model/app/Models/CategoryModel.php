<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = ['category_name'];

    public $primarykey = 'category_id';
    public  $timestamps = false;

}
