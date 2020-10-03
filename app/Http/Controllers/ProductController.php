<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{



    /**
     * return an array with the count of products
     */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=Product::paginate(9);
        $counts=$this->countElements();
        return view('inc.products.products',[
            'products'=>$products,
            'counts' => $counts
        ]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("inc.products.product_detail")->with('product',$product)->with('counts',$this->countElements());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public  function search(Request $request)
    {
        $products=DB::table('products')
                    ->where('name','LIKE',$request->name.'%')
                    ->paginate(9);
        return view('inc.products.products',[
            'products'=>$products,
            'counts'=>$this->countElements()
        ]);
    }

    public function searchType(Request $request)
    {


        $products = Product::where('type',$request->type)->paginate(9);
        $products->withPath('?type='.$request->type);
    return view('inc.products.products')->with('products',$products);

    }

    public static function countElements(){
        $products=Product::all();
        $count=count($products);
        $countPc=0;
        $countPs=0;
        $countXbox=0;

        for ($i=0; $i < $count; $i++) {
           switch ($products[$i]->type) {
                case 'pc':
                    $countPc++;
                break;

                case 'xbox':
                    $countXbox++;
                break;

                case 'ps':
                    $countPs++;
                break;

               default:
                   # code...
                   break;
           }
        }

        $counts=[
            "count" => $count,
            "countPc" => $countPc,
            "countPs" => $countPs,
            "countXbox" => $countXbox
             ];
           return $counts;
    }
}
