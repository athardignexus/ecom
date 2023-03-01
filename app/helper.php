<?php

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;

function category($category_id, $opt)
{
    if ($opt == 'select') {
        $data = Category::where('status', 'Active')->get();
        foreach ($data as $key => $val) {

            if ($category_id == $key)
                echo "<option value='$val->id' selected>$val->categoryName</option>";
            else
                echo "<option value='$val->id'>$val->categoryName</option>";
        }
    } else {
        $data = Category::find($category_id);
        if ($data)
            return $data['categoryName'];
    }
}

function subcategory($subcategory_id, $opt)
{
    if ($opt == 'select') {
        $data = SubCategory::where('status', 'Active')->get();
        foreach ($data as $key => $val) {

            if ($subcategory_id == $key)
                echo "<option value='$val->id' selected>$val->subcategoryName</option>";
            else
                echo "<option value='$val->id'>$val->subcategoryName</option>";
        }
    } else {
        $data = SubCategory::find($subcategory_id);
        if ($data)
            return $data['subcategoryName'];
    }
}

function childcategory($childcategory_id, $opt)
{
    if ($opt == 'select') {
        $data = ChildCategory::where('status', 'Active')->get();
        foreach ($data as $key => $val) {

            if ($childcategory_id == $key)
                echo "<option value='$val->id' selected>$val->childcategoryName</option>";
            else
                echo "<option value='$val->id'>$val->childcategoryName</option>";
        }
    } else {
        $data = ChildCategory::find($childcategory_id);
        if ($data)
            return $data['childcategoryName'];
    }
}
