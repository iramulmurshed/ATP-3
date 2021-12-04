<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function showHomePage()
    {
        return view('pages.home');
    }
    function productList()
    {
        $products = Product::all();

        return $products;
    }

    function addProductPage()
    {
        return view('pages.addProduct');
    }
    function insertProduct(Request $request)
    {
        $validate = $request->validate(
            [
                'pName' => 'required|min:4|max:50',
                'pdesc' => 'required',
                'pCode' => 'required|min:4',
                'pPrice' => 'required|numeric',
                'pQuantity' => 'required|numeric',
                'pStockDate' => 'required',
                'pPurchased' => 'required',

                'pRating' => 'required|numeric'
            ],
            [

                'pName.required' => 'input product name',
                'pName.min' => 'minimum 4 character required',
                'pName.max' => 'maximum 50 character allowed',

                'pdesc.required' => 'input description',

                'pCode.required' => 'input product code',
                'pCode.min' => 'minimum 4 character needed',

                'pPrice.required' => 'input price',
                'pPrice.numeric' => 'only numbers are allowed',

                'pQuantity.required' => 'input quantity',
                'pQuantity.numeric' => 'only numbers are allowed',

                'pStockDate.required' => 'input stock date',

                'pPurchased.required' => 'input purchase date',


                'ppRating.required' => 'input rating',
                'ppRating.numeric' => 'only numbers are allowed'

            ]
        );


        $data=new Product();
        $data->p_name=$request->pName;
        $data->p_desc=$request->pdesc;
        $data->p_code=$request->pCode;
        $data->p_category=$request->pCategory;
        $data->p_price=$request->pPrice;
        $data->p_quantity=$request->pQuantity;
        $data->p_stock_date=$request->pStockDate;
        $data->p_rating=$request->pRating;
        $data->p_purchased=$request->pPurchased;
        $data->save();
        return "Product Successfully Added";

    }
    function showProductDetails(Request $request){
        $data = Product::where('id',$request->id)->first();
        return view('pages.productDetails')->with('product',$data);
    }
    function deleteProduct(Request $request)
    {
        $data=Product::where('id',$request->id)->first();
        $data->delete();
        return redirect()->route('productList');
    }
    function editProductPage(Request $request){
        $product=Product::where('id',$request->id)->first();
        return view('pages.editProduct')->with('product',$product);
    }
    function editProductDetails(Request $request){

        $validate = $request->validate(
            [
                'pName' => 'required|min:4|max:50',
                'pdesc' => 'required',
                'pCode' => 'required|min:4',
                'pPrice' => 'required|numeric',
                'pQuantity' => 'required|numeric',
                'pStockDate' => 'required',
                'pPurchased' => 'required',

                'pRating' => 'required|numeric'
            ],
            [

                'pName.required' => 'input product name',
                'pName.min' => 'minimum 4 character required',
                'pName.max' => 'maximum 50 character allowed',

                'pdesc.required' => 'input description',

                'pCode.required' => 'input product code',
                'pCode.min' => 'minimum 4 character needed',

                'pPrice.required' => 'input price',
                'pPrice.numeric' => 'only numbers are allowed',

                'pQuantity.required' => 'input quantity',
                'pQuantity.numeric' => 'only numbers are allowed',

                'pStockDate.required' => 'input stock date',

                'pPurchased.required' => 'input purchase date',


                'ppRating.required' => 'input rating',
                'ppRating.numeric' => 'only numbers are allowed'

            ]
        );

        $product=Product::where('id',$request->id)->first();
        $product->p_name=$request->pName;
        $product->p_desc=$request->pdesc;
        $product->p_code=$request->pCode;
        $product->p_category=$request->pCategory;
        $product->p_price=$request->pPrice;
        $product->p_quantity=$request->pQuantity;
        $product->p_stock_date=$request->pStockDate;
        $product->p_rating=$request->pRating;
        $product->p_purchased=$request->pPurchased;
        $product->save();
        return redirect(route('home'));

    }
}
