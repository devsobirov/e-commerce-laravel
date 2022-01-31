<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(15);
        return view('admin.category.index' ,compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $categoryData = $this->validateCategoryData($request);
        $categoryData['slug'] = $this->generateSlug($categoryData['slug'], $request);

        $stored = Category::create($categoryData);

        if($stored){
            return redirect()->route('admin.category.index');
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $categoryData = $this->validateCategoryData($request);
        $categoryData['slug'] = $this->generateSlug($categoryData['slug'], $request);
    }


    public function destroy($id)
    {
        //
    }

    private function validateCategoryData($request)
    {
        return $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'nullable|string|min:3|max:255',
            'description' => 'nullable|string|min:3|max:255',
        ]);
    }

    /**
     * Kategoriya uchun nomidan kelib chiqib URL yaratish
     *
     * @param $slug string|null
     * @param $request
     * @return string
     */
    private function generateSlug($slug, $request)
    {
        //TODO:: slugni unikallikka tekshirish
        if (!empty($slug)) {
            $slug = Str::slug($request->name);
        }
        return $slug;
    }
}
