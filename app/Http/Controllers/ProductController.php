<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    
    //

    public function create (Request $request)
    {

        //Crea nueva instancia del modelo Procuct
        $product = new Product();
        $user = Auth::user()->id;

        //Asigna los valores del request a las propiedades del modelo 

        $nproducto = $request->input('nproducto');
        $tproducto = $request->input('tproducto');
        $cproduct = $request->input('cproduct');
        $pproduct = $request->input('pproduct');
        $iproduct = $request->file('iproduct');
        $user = $request->input('user');

        $product -> name_product = $nproducto ;
        $product -> type_product = $tproducto ;
        $product -> inventory_product = $cproduct ;
        $product -> price_product = $pproduct;
        $product -> status_product = 'Disponible';
        $product -> id_user = $user;
        $product -> image_product = $iproduct;

        $products = Product::where('id_user',  $user)
                            ->where('name_product', $nproducto)
                            ->where('status_product', "Disponible")
                            ->get();
                                    
        if ($products->isEmpty())
        {
            // Guardar el cliente en la base de datos
            $product->save();

            // Muestra la vista para hacer login 
            return redirect('/agregar');

        }else
        {

            $suma = $products->first()->inventory_product  + $cproduct;

            //Busca el producto segun id , estado y suma el dato al inventario actual. 
            $Actualizar = Product::where('id_user', $user)
                                    ->where('name_product', $nproducto)
                                    ->where('status_product', "Disponible")
                                    ->update(['inventory_product'  => $suma ,'price_product' => $pproduct , 'type_product' => $tproducto , 'image_product' => $iproduct]);

            // Muestra la vista para 
            return redirect('/agregar');

        }
    
    }

    public function find (Request $request)
    {
        //Crea nueva instancia del modelo Procuct
        $product = new Product();
        $user = Auth::user()->id;

        //Asigna los valores del request a las propiedades del modelo 
        $id_user = $user;
        $status_product = 'Disponible' ;

        //busca según el ID del usuario y el estado del producto 
        $products = Product::where('id_user', $id_user)
                            ->where('status_product', $status_product)
                            ->get();
                            
        //var_dump($products);
        //die;

        // Verifica si se encontró el producto
        if ($products->isEmpty()) {
            // Si no se encontró el producto, redirecciona a la vista sin valor.
            //return view('partials.menu.inventario', ['products' => $products]);
            return redirect('/agregar');
        } else {
            // Redirecciona a vista Inventario con el valor encontrado
            //return redirect('/inventario')->with('products', $products);
            //return view('partials.menu.inventario', ['products' => $products]);
            //return response($products);
            //return reponse(['products' => $products]);
            //return $this->success(compact('products'));
            return response()->json([ "result"=> true, "data" => $products ], 200, [ 'Content-Type'=> 'application/json', 'Accept'=> 'application/json']);

        }

    }

    public function find_all ()
    {
        //Crea nueva instancia del modelo Procuct
        $product = new Product();

        //Asigna los valores del request a las propiedades del modelo 
        $status_product = 'Disponible';

        //busca según el ID del usuario y el estado del producto 
        $products = Product::where('status_product', $status_product)
                            ->get();

        // Verifica si se encontró el producto
        if ($products->isEmpty()) {
            // Si no se encontró el producto, redirecciona a la vista sin valor.
            return redirect('/inventario')->with('alert', 'Sin productos encontradoss');
        } else {
            // Redirecciona a vista Inventario con el valor encontrado
            //return redirect('/inventario')->with('products', $products);
            return view('partials.compra.comprar', ['products' => $products]);
        }
    }

    public function delete (Request $request)
    {
        //Crea nueva instancia del modelo Procuct
        $product = new Product();
        $user = Auth::user()->id;

        //Asigna los valores del request a las propiedades del modelo 
        $name_product = $request -> nproduct ;
        $id_user = $user;

        //Elimina el producto seleccionado 
        $dproduct = Product::where('id_user', $is_user )
                            ->where('name_product',  $request -> nproduct)
                            ->delete();

        //busca según el ID del usuario y el estado del producto 
        $products = Product::where('id_user', $id_user)
                            ->where('status_product', "Disponible")
                            ->get();

        // Verifica si se encontró el producto
        if ($products->isEmpty()) {
            // Si no se encontró el producto, redirecciona a la vista sin valor.
            return redirect('/agregar')->with('alert', 'Sin productos registrados');
        } else {
            // Redirecciona a vista Inventario con el valor encontrado
            //return redirect('/inventario')->with('products', $products);
            return view('partials.menu.inventario', ['products' => $products]);
        }
    }

    public function editar(Request $request)
    {
        //Crea nueva instancia del modelo Procuct
        $product = new Product();

        //Asigna los valores del request a las propiedades del modelo 
        $name_product = $request -> nproduct;
        $id_user = $user;
                                    
        //busca según el ID del usuario y el estado del producto 
        $products = Product::where('id_user', $id_user)
                            ->where('status_product', 'Disponible')
                            ->where('name_product', $request -> nproduct)
                            ->get();

        // Verifica si se encontró el producto
        if ($products->isEmpty()) {
            // Si no se encontró el producto, redirecciona a la vista sin valor.
            return redirect('/historial')->with('alert', 'Sin productos registrados');
        } else {
            // Redirecciona a vista Inventario con el valor encontrado
            //return redirect('/inventario')->with('products', $products);
            return view('partials.menu.editar', ['products' => $products]);
        }
        
    }

    public function find_sell (Request $request)
    {
        //Crea nueva instancia del modelo Procuct
        $product = new Product();
        $user = Auth::user()->id; 

        //Asigna los valores del request a las propiedades del modelo 
        $id_user = $user ;
        $status_product = 'Vendido';

        //busca según el ID del usuario y el estado del producto 
        $products = Product::where('id_user', $id_user)
                            ->where('status_product', $status_product)
                            ->get();

        // Verifica si se encontró el producto
        if ($products->isEmpty()) {
            // Si no se encontró el producto, redirecciona a la vista sin valor.
            //return view('partials.menu.checkin', ['products' => $products]);
            return response('Sin ventas');

        } else {
            // Redirecciona a vista Inventario con el valor encontrado
            //return redirect('/inventario')->with('products', $products);
            return view('partials.menu.checkin', ['products' => $products]);
        }

    }
    
}
