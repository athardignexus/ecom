<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubCategory::all();
        return view('admin.attribute.subcategorymanage', compact('data'));
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
                'subcategoryName' => $request->input('subcategoryName'),
                'slug' => $request->input('slug'),
                'category_id' => $request->input('category_id'),
                'text_desc' => $request->input('description'),
                'status' => $request->input('status'),
            ];
            $subcategory = SubCategory::create($data);
            if ($subcategory) {

                if ($request->has('image')) {
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = "product_category" . $subcategory->id . '.' . $extention;
                    $file->move('upload_images/subcategory/', $filename);
                    SubCategory::where('id', $subcategory->id)->update(["image" => $filename]);
                }
            }
            DB::commit();
            return redirect()->back()->with("Data Added Successfully");
        } catch (Exception $e) {
            DB::rollback();
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
