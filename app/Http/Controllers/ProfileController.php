<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProfileController extends Controller
{
    /**
     * User products
     * 
     * Return list of products offered by the user
     * 
     */

    public function showProducts(Request $request)
    {
        $user = $request->user();   
        return $this->showOne($user->products());
    }

    /**
     * Store products
     * 
     * Store a single product
     */
    public function storeProducts(ProductRequest $request)
    {
        $user_id = $request->user()->id;
        $product = new Product($request->all());
        $product->user_id = $user_id;
        if($product->save()){
            return $this->showOne([
                'message' => 'Registro del producto exitoso'
            ]);
        } 
        return $this->showError('Error al guardar el producto', [], 400);
    }
}
