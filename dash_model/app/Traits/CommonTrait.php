<?php

namespace App\Traits;
use App\Models\CategoryModel;

trait CommonTrait {
    public function getCategory($category_id) {
        $category = CategoryModel::where('category_id',$category_id)->first();
        return $category;
    }
    public function getSubCategory($subcategory_id) {
        $subcategory = CategoryModel::where('subcategory_id',$subcategory_id)->first();
        return $subcategory;
    }
}
