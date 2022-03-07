<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = ['category_id','subcategory_id','product_name','product_description','status','created_at'];

    public $primaryKey = 'product_id';

    public  $timestamps = false;

    public function getcategory(){
        return $this->hasOne(CategoryModel::class, 'category_id', 'category_id'); // display in view->table <td></td>
    }

}
