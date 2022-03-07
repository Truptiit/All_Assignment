<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';

    protected $fillable = ['subcategory_id','subcategory_name','category_id'];

    public $primarykey = 'subcategory_id';

    public  $timestamps = false;
}
