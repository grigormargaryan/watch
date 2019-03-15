<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\App;
use App\Dlink;
use Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader;
use Yajra\Datatables\Datatables;
use App\Category;
use App\SubCategorys;
use App\Products;
use App\Brand;
use App\Color;
use App\Belt;
use App\ProductsImages;



class AppController extends Controller
{

    public function categoryForm()
    {
        return view('add_category');
    }

    public function addCategory(Request $request)
    {
        Category::create(['name' => $request->name, 'title' => $request->title]);

        return redirect()->back()->with('status', 'App successfully added');

    }

    public function allCategory()
    {
        $categorys = Category::all();
        return view('all_categorys', compact('categorys'));
    }

    public function editCategoryForm($id)
    {
        $categorys = Category::find($id);
        return view('edit_category', compact('categorys'));
    }

    public function editCategory(Request $request, $id)
    {
        if ($request->method("post")) {
            $services = Category::find($id);
            $services->name = $request->name;
            $services->title = $request->title;
            if ($services->save()) {
                return redirect()->route('allcategory')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->route('allcategory')->with('status', 'Category successfully deleted');
        }
    }

    public function subCategoryForm()
    {
        $categorys = Category::all();
        return view('add_subcategory', compact('categorys'));
    }

    public function addSubCategory(Request $request)
    {
        if ($request->method("post")) {
            if ($request->hasFile('img')) {
                $originalName = $request->img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if ($request->img->storeAs('upload', $generatedName)) {
                    $request->img = $generatedName;
                };
            }
            $subCategorys = new SubCategorys([
                'categorys_id' => $request->categorys_id,
                'name' => $request->name,
                'description' => $request->description,
                'img' => $request->img,

            ]);
            $subCategorys->save();

            return redirect()->back()->with('status', 'App successfully added');

        }

    }

    public function allSubCategory()
    {
        return view('all_subcategory', compact('subService'));
    }

    public function anyDataSub()
    {
        $subCategorys = SubCategorys::with('categorys')->get();
        return Datatables::of($subCategorys)
            ->addColumn('action', function ($subCategorys) {
                return '<a href="' . route('subcategory_edit_form', $subCategorys->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="' . route('subcategory_delete', $subCategorys->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
            })->make(true);

    }

    public function editSubCategoryForm($id)
    {
        $subcategory = SubCategorys::find($id)->first()->toArray();
        $categorys = Category::all();
        return view('edit_subcategory', compact('subcategory', 'categorys', 'id'));
    }

    public function editSubCategory(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $originalName = $request->img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if ($request->img->storeAs('upload', $generatedName)) {
                $request->old_img = $generatedName;
            };
        }
        SubCategorys::where('id', $id)->update([
            'categorys_id' => $request->categorys_id,
            'name' => $request->name,
            'description' => $request->description,
            'img' => $request->old_img,
        ]);
        return view('all_subcategory')->with('status', 'Subservice successfully updatet');
    }

    public function deleteSubCategory($id)
    {
        $subcategory = SubCategorys::find($id);
        if ($subcategory->delete()) {
            return redirect()->route('allsubcategory')->with('status', 'Category successfully deleted');
        }

    }

    public function brandForm()
    {
        return view('add_brand');
    }

    public function addBrand (Request $request)
    {
        if ($request->method("post")) {
            if ($request->hasFile('img')) {
                $originalName = $request->img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if ($request->img->storeAs('upload', $generatedName)) {
                    $request->img = $generatedName;
                };
            }
            $brand = new Brand([
                'name' => $request->name,
                'img' => $request->img,

            ]);
            $brand->save();

            return redirect()->back()->with('status', 'App successfully added');

        }
    }

    public function allBrands () {
        $brands = Brand::all();
        return view('all_brands', compact('brands'));
    }

    public function deleteBrand ($id)
    {
        $brand = Brand::find($id);
        if ($brand->delete()) {
            return redirect()->route('allbrands')->with('status', 'Category successfully deleted');
        }
    }

    public function colorForm()
    {
        return view('add_color');
    }

    public function addColor (Request $request)
    {

        $color = new Color([
            'name' => $request->name,
            'title' => $request->title,

        ]);
        $color->save();

        return redirect()->back()->with('status', 'App successfully added');
    }

    public function allColors () {
        $colors = Color::all();
        return view('all_colors', compact('colors'));
    }

    public function deleteColor ($id)
    {
        $color = Color::find($id);
        if ($color->delete()) {
            return redirect()->route('allcolors')->with('status', 'Category successfully deleted');
        }
    }

    public function beltForm()
    {
        return view('add_belt');
    }

    public function addBelt (Request $request)
    {

        $belt = new Belt([
            'name' => $request->name,

        ]);
        $belt->save();

        return redirect()->back()->with('status', 'App successfully added');
    }

    public function allBelts () {
        $belts = Belt::all();
        return view('all_belts', compact('belts'));
    }

    public function deleteBelt ($id)
    {
        $belt = Belt::find($id);
        if ($belt->delete()) {
            return redirect()->route('allbelts')->with('status', 'Category successfully deleted');
        }
    }

    public function productForm()
    {
        $categorys = Category::all();
        $subCategorys = SubCategorys::all();
        $brands = Brand::all();
        $colors = Color::all();
        $belts = Belt   ::all();
        return view('add_product', compact('categorys', 'subCategorys', 'brands', 'colors', 'belts'));
    }

    public function addProduct(Request $request)
    {
        $product = Products::create($request->all());
        foreach ($request->img as $img) {
            $originalName = $img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if ($img->storeAs('upload', $generatedName)) {
                ProductsImages::create([
                    'products_id' => $product->id,
                    'filename' => $generatedName
                ]);
            };

        }
        return redirect()->back()->with('status', 'App successfully added');
    }

    public function allProducts()
    {
        $products = Products::all();
        return view('all_products', compact('products'));
    }

    public function editProductForm($id)
    {
        $categorys = Category::all();
        $subCategorys = SubCategorys::all();
        $products = Products::find($id);
        return view('edit_product', compact('products', 'categorys', 'subCategorys'));
    }

    public function editProduct(Request $request, $id)
    {
        if ($request->method("post")) {
            $products = Products::find($id);
            $products->name = $request->name;
            $products->description = $request->description;
            $products->categorys_id = $request->categorys_id;
            $products->sub_categorys_id = $request->sub_categorys_id;
            $products->price = $request->price;
            $products->quantity = $request->quantity;
            if ($products->save()) {
                return redirect()->route('allproducts')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteProduct($id)
    {
        $product = Products::find($id);
        if ($product->delete()) {
            return redirect()->route('allproducts')->with('status', 'Category successfully deleted');
        }
    }

}
