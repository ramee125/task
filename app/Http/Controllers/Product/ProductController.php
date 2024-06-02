<?php
namespace App\Http\Controllers\Product;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Undocumented function
     *
     * @return view
     */
    public function index(): View
    {
        $response['products']=Product::all();
        return view('pages.Product.all.index')->with(key:$response);// Implementation for index method
    }

    /**
     * method.create
     *
     * @return view
     */

    public function create()
    {
        return view('pages.Product.create.index');
    }

    /**
     * method.store
     * @param.ProductCreateRequest.$request[Product.creat.request]
     * @return.void
     */

    public function store(ProductCreateRequest $request)
    {
        Product::create($request->all());
        //return redirect()->route(route:'products.index');

        return redirect()->route('products.index')->with(key:'success', value:'Product created successfully.');
    }


    public function show($id)
    {
        $response['products']=Product::find($id);
        return view('pages.Product.Show.index')->with(key:$response);
    }

    public function edit($id)
    {
        $response['products']=Product::find($id);
        return view('pages.Product.edit.index')->with(key:$response);
    }

    public function update(ProductUpdateRequest  $request, $id)
    {
       Product::find($id)->update($request->all());
       return redirect()->route(route: 'products.index')->with(key:'success', value:'Product update successfully.');
    }

    public function destroy($id)
    {
        $products =Product::find($id);
        $products->delete();
        return redirect()->route('products.index')->with(key:'success', value:'Product ted successfully.');
    }

}


