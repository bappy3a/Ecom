<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Admin;
use App\Brand;
use App\Category;
use App\Logo;
use App\Product;
use App\Slider;
use App\Subcategory;
use Illuminate\Http\Request;
use File;
use Image;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller',['except'=>['addproduct','findcatid']]);
    }

     /**
     * Where to redirect product Show page.
     * V -1.0
     * @var Seller Product Show
     */   

    public function showproduct(){
        $categorys = Category::get();
        $subcategorys = Subcategory::get();
    	$products = Product::where('seller_id',Auth::user()->id)->latest()->get();
    	return view('seller.pages.showproduct',compact('products','categorys','subcategorys'));
    }

    public function showformaddproduct(){
    	$categorys=Category::where('publication_status',1)->orderBy('name')->get();
    	return view('seller.pages.addproduct',['categorys'=>$categorys]);
    }

    public function findcatid(Request $request){
    	$subcat=Subcategory::where('category_id',$request->catid)->get();
    	$sub=array();
        $subid=[];

    	foreach ($subcat as $key => $value) {
    		$sub[]=$value->name;
            $subid[]=$value->id;
    	}
    	return response()->json(['count'=>count($sub),'subcat'=>$sub,'subid'=>$subid]);
    	
    }



    public function addproduct(Request $request){
$this->validate($request,[
                'productname'               => 'required',
                'categoryname'              => 'required',
                'subcategory'               => 'required',
                'productprice'              => 'required',
                'quantity'                  => 'required|integer|min:0',
                'color'                     => 'required',
                'short_description'         => 'required',
                'long_description'          => 'required',
                'compostitons'              => 'required',
                'style'                     => 'required',
                'properties'                => 'required',
                'specification'             => 'required',
                'images'                    => 'required',
        ]);

        $productname        =$request->productname;
        $categoryname       =$request->categoryname;
        $subcategory        =$request->subcategory;
        $productprice       =$request->productprice;
        $quantity           =$request->quantity;
        $color              =$request->color;
        $trackid            =$this->RandomString();;
        $short_description  =$request->short_description;
        $long_description   =$request->long_description;
        $compostitons       =$request->compostitons;
        $style              =$request->style;
        $properties         =$request->properties;
        $specification      =$request->specification;
        $descount           =$request->descount;
       



        $product=new Product();


            if($files=$request->file('images')){

                $k=0;
                $images=[];
                $name=[];
                foreach($files as $file){

                    $name[$k]=time().$k.'.'.$file->getClientOriginalExtension();
                    
                    $destinationPath = public_path('Productimages/');
                    Image::make($file)->resize(438,438)->save($destinationPath.$name[$k]);
                    $images[]=$name[$k];
                    $k++;
                }

                $pimage=serialize($images);

                $product->name=$productname;
                $product->category_id=$categoryname;
                $product->sub_category=$subcategory;
                $product->price=$productprice;
                $product->quantity=$quantity;
                $product->color=$color ;
                $product->product_ran=$trackid;
                $product->description=$short_description;
                $product->long_description=$long_description;
                $product->compositions=$compostitons;
                $product->style=$style;
                $product->properties=$properties;
                $product->specification=$specification;
                $product->image=$pimage;
                $product->descount=$descount;
                $product->seller_id=\Auth::guard('seller')->user()->id;
                $product->admin_id=0;
                $product->publication_status=0;
                $product->save();
                toastr()->success('New Product Add Successfully');
                return redirect('/productshowtable');  
            }
                
    }

    // Generate Randam number
    function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring .= $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
    }
 
    public function productdestroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Toastr::success('Product Delete Successfully :)','Success');
        return redirect()->route('adminseller.index');
    }

    public function productedite($id)
    {
        $categorys = Category::get();
        $subcategory = Subcategory::get();
        $product = Product::find($id);
        return view('seller.pages.edite',compact('product','categorys','subcategory'));
    }



    public function updateproduct(Request $request, $id){

    

        $this->validate($request,[
                'productname'               => 'required',
                'categoryname'              => 'required',
                'subcategory'               => 'required',
                'productprice'              => 'required',
                'quantity'                  => 'required|integer|min:0',
                'color'                     => 'required',
                'short_description'         => 'required',
                'long_description'          => 'required',
                'compostitons'              => 'required',
                'style'                     => 'required',
                'properties'                => 'required',
                'specification'             => 'required',
        ]);

        $productname        =$request->productname;
        $categoryname       =$request->categoryname;
        $subcategory        =$request->subcategory;
        $productprice       =$request->productprice;
        $quantity           =$request->quantity;
        $color              =$request->color;
        $trackid            =$this->RandomString();
        $short_description  =$request->short_description;
        $long_description   =$request->long_description;
        $compostitons       =$request->compostitons;
        $style              =$request->style;
        $Properties         =$request->properties;
        $specification      =$request->specification;
        $images             =$request->images;


        $product=Product::find($id);

        if (\Auth::guard('seller')->check()) {

            if ($images) {
                if($files=$request->file($images)){
                    $k=0;
                    $images=[];
                    foreach($files as $file){
                        $name=time().$k.".".$file->getClientOriginalExtension();
                        $destinationPath = public_path('Productimages/');
                        Image::make($file)->resize(100,100)->save($destinationPath.$name);
                        $images[]=$name;
                        $k++;
                    }

                    $pimage=serialize($images);
                }
            }

            $product->name=$productname;
            $product->price=$productprice;
            $product->descount=$request->descount;
            $product->description=$request->short_description;
            $product->color=$color ;
            $product->quantity=$quantity;
            $product->category_id=$categoryname ;
            $product->sub_category=$subcategory;
            if ($images) {
                $product->image=$pimage;
            }
            $product->long_description=$request->long_description;
            $product->seller_id=\Auth::guard('seller')->user()->id;
            $product->admin_id=0;
            $product->compositions=$compostitons;
            $product->style=$style;
            $product->properties=$request->properties;
            $product->specification=$specification;
            $product->product_ran=$trackid;
            $product->publication_status=0;
            $product->save();
            toastr()->success('Product Update Successfully');
            return redirect('/productshowtable');         
        }else{

        }
    }

    public function findbrand(Request $request){

        $catid=$request->catid;
        $subcatid=$request->subcatid;

        $brands=Brand::where(['category_id'=>$catid,'subcategory_id'=>$subcatid,'publication_status'=>1])->get();
        $count=count($brands);
        return response()->json(['brands'=>$brands,'count'=>$count]);
    } 



}
