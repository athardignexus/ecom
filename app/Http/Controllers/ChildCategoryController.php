<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ChildCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ChildCategory::all();
        return view('admin.attribute.childcategorymanage', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'childcategoryName' => $request->input('childcategoryName'),
                'slug' => $request->input('slug'),
                'category_id' => $request->input('category_id'),
                'subcategory_id' => $request->input('subcategory_id'),
                'text_desc' => $request->input('description'),
                'status' => $request->input('status')
            ];

            $childcategory = ChildCategory::create($data);
            if ($childcategory) {

                if ($request->has('image')) {
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = "product_category" . $childcategory->id . '.' . $extention;
                    $file->move('upload_images/childcategory/', $filename);
                    //ChildCategory::where('id', $childcategory->id)->update(["image" => $filename]);
                }
                //return $data;
            }
            DB::commit();
            return redirect()->back()->with("Data Added Successfully");
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ChildCategory $childCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildCategory $childCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChildCategory $childCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildCategory $childCategory)
    {
        //
    }
}
