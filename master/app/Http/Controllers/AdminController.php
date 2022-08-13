<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\cart ;
use App\Models\category ;
use App\Models\contact ;
use App\Models\order ;
use App\Models\product ;
use App\Models\provider ;
use App\Models\user ;


class AdminController extends Controller
{
    /**
   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashbord.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashbord.category.category');
    }





    //**Category Functions**//

    public function category(){
       
        $categories = category::all();
        return view('dashbord.category.category' , compact('categories'));
    }

    public function categoryAdd(){
        return view('dashbord.category.categoryadd') ;
    }


   public function categoryStore(Request $request){
  
      // Validation for required fields (and using some regex to validate our numeric value)
      $request->validate([
        'name'=>'required',
        'description'=>'required',
        'image'=>'required',

     
    ]); 
    $input=$request->all();
    
    if ($request->file('image')) {
        $file = $request->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $input['image'] = "$filename";

    }
    // Getting values from the blade template form
    
    category::create($input);
    return redirect()->route('admin.category')->with('success', 'category added.');   // -> resources/views/stocks/index.blade.php
   }


    public function categoryEdit($id){
        $category = category::find($id);
        return view('dashbord.category.categoryedit')->with('category' , $category) ;

    }

    public function categoryUpdate($id  , Request $request  ){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            // 'image'=>'required',
            
        ]); 
        
        
        
        $input=$request->all();
        $category = category::find($id);
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $input['image'] = "$filename";
            $category->image=  $input['image'];
        }
        $category->name = $request->name;
        $category->description = $request->description;
        
        
        $category->update();
        
        return redirect()->route('admin.category')->with('success', 'category updated.'); 



    

    }


    public function categoryDelete($id){
        $category=category::find($id);
        $category->delete() ;
      
        return redirect()->route('admin.category') ->with(['message' => "you have deleted category sucssessfuly"]);
    }


    //**end of category functions */



    public function product(){
       
        $products = product::all();
        return view('dashbord.product.product' , compact('products'));
    }


    public function productAdd(){
        $categories=category::all();
        return view('dashbord.product.productadd' , compact('categories')) ;
    }



    public function productStore(Request $request){
  
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
          'name'=>'required',
          'description'=>'required',
          'price'=>'required',
            'category_id'=>'required',
       
      ]); 
      $input=$request->all();
      
      if ($request->file('main_image')) {
          $file = $request->file('main_image');
          $filename = date('YmdHi') . $file->getClientOriginalName();
          $file->move(public_path('images'), $filename);
          $input['main_image'] = "$filename";
  
      }
      // Getting values from the blade template form
      
      product::create($input);
      return redirect()->route('admin.product')->with('success', 'product added.');   // -> resources/views/stocks/index.blade.php
     }


     public function productEdit($id){
        $product = product::find($id);
        return view('dashbord.product.productedit')->with('product' , $product) ;

    }


    public function productUpdate($id ,Request $request ){


        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
           
        ]); 



      
        $input=$request->all();
        $product = product::find($id);
        
        if ($request->file('main_image')) {
            $file = $request->file('main_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $input['main_image'] = "$filename";
            $product->main_image=  $input['main_image'];
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        
        
        $product->update();
        
        return redirect()->route('admin.product')->with('success', 'product updated.'); 

    
    
    
        // $input=$request->all();
        // $product = product::find($id);

        // if ($request->file('main_image')) {
        //     $file = $request->file('main_image');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('images'), $filename);
        //     $input['main_image'] = "$filename";
        //     $product->main_image= $request->main_image;
          
        //   $product->name = $request->name;
        //   $product->description = $request->description;
        //   $product->price= $request->price; 
         
        // }
    
        //  $product->update();
        
    
        // return redirect()->route('admin.product')->with('success', 'product updated.'); 
    
    
        
    
        }


        public function productDelete($id){
            $product=product::find($id);
            $product->delete() ;
          
            return redirect()->route('admin.product') ->with(['message' => "you have deleted product sucssessfuly"]);
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
     
    }
}
