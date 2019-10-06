<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Brand;
use App\Category;
use App\Logo;
use App\Product;
use App\Slider;
use App\Subcategory;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['except'=>['create','store','findbrand']]);
    }

    /*===============Admin Dashbord===========================*/

    public function index()
    {
        $noti_fai = Product::where('noti_fai',0)->count();
        return view('admin.index',compact('noti_fai'));
    }


    public function create()
    {
        return view('admin.pages.admin.admin_signup');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if($request->password_confirmation===$request->password){
            if( Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ])){
                return redirect('login')->with('msg','Successfully Registration Now Log In with your email and Password!');
            }
        }
        return redirect('admin-signup');
    }

    public function categories()
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
        return view('admin.pages.categories',compact('categories','subcategories'));
    }
    public function category_store(Request $request)
    {
       if (

           Category::create($request->all())
       ){
           return redirect()->route('categories');
       }
    }

    public function category_update(Request $request ,$id)
    {
        $Category=Category::findOrFail($id);
        $Category->update($request->all());
        return redirect()->route('categories')->with('msg','Category Updated Successfully');
    }
    public function category_destroy(Request $request ,$id)
    {
        Category::destroy($id);
        return redirect()->route('categories')->with('msg','Category Deleted Successfully');
    }
    public function category_active($id)
    {
      Category::where('id',$id)
            ->update(['publication_status'=>1]);
        return redirect()->route('categories')->with('msg','Category Activated Successfully');
    }
    public function category_deactive($id)
    {

        Category::where('id', $id)->update(['publication_status' => 0]);
        return redirect()->route('categories')->with('msg','Category Dectivated Successfully');
    }

    public function brands()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $subcategories=Subcategory::all();
        return view('admin.pages.brands',compact('brands','categories','subcategories'));
    }
    public function getClassList(Request $request)
    {
       /*$classes = DB::table("subcategories")
            ->where("category_id",$request->category_id)
            ->pluck("name","id");*/
       $classes =Subcategory::where("category_id",$request->category_id)->pluck("name","id","category_name");
        return response()->json($classes);
    }
    public function getBrandList(Request $request)
    {
        /*$classes = DB::table("subcategories")
             ->where("category_id",$request->category_id)
             ->pluck("name","id");*/
        $classes =Brand::where("subcategory_id",$request->brand_id)->pluck("name","id","category_id","subcategory_id");
        return response()->json($classes);
    }
    public function brand_store(Request $request)
    {
//return $request;
        if (

        Brand::create($request->all())
        ){
            return redirect()->route('brands')->with('msg','Brand Added Successfully');
        }
    }
    public function brand_update(Request $request ,$id)
    {
        $brand=Brand::findOrFail($id);
        $brand->update($request->all());
        return redirect()->route('brands')->with('msg','Brand Updated Successfully');
    }
    public function brand_destroy(Request $request ,$id)
    {
        Brand::destroy($id);
        return redirect()->route('brands')->with('msg','Brand Deleted Successfully');
    }
    public function brand_active($id)
    {
        Brand::where('id',$id)
            ->update(['publication_status'=>1]);
        return redirect()->route('brands')->with('msg','Brand Activated Successfully');
    }
    public function brand_deactive($id)
    {

        Brand::where('id', $id)->update(['publication_status' => 0]);
        return redirect()->route('brands')->with('msg','Brand Dectivated Successfully');
    }



    public function subcategory()
    {
        return view('admin.pages.category');
    }
    public function subcategories()
    {
        $categories=Subcategory::all();
        return view('admin.pages.categories',compact('categories'));
    }
    public function subcategory_store(Request $request)
    {
        if (

        Subcategory::create($request->all())
        ){
            return redirect()->route('categories');
        }
    }
    public function subcategory_edit(Request $request ,$id)
    {
        $category=Subcategory::findOrFail($id);
        return view('admin.pages.category_edit',compact('category'));
    }
    public function subcategory_update(Request $request ,$id)
    {
        $Category=Subcategory::findOrFail($id);
        $Category->update($request->all());
        return redirect()->route('categories')->with('msg','Brand Updated Successfully');
    }
    public function subcategory_destroy(Request $request ,$id)
    {
        Subcategory::destroy($id);
        return redirect()->route('categories')->with('msg','Category Deleted Successfully');
    }

    public function products()
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $products=Product::all();
        return view('admin.pages.products',compact('categories','subcategories','products'));
    }
    public function product_store(Request $request)
    {
        //return $request;
        if($request->hasFile('image'))
        {
            $destinationPath="image/product";
            $file=$request->image;
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move($destinationPath, $filename);
            $image=$filename;
        }
        if($request->hasFile('image1'))
        {
            $destinationPath1="image/product";
            $file1=$request->image1;
            $extention1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$extention1;
            $file1->move($destinationPath1, $filename1);
            $image1=$filename;
        }
        if($request->hasFile('image2'))
        {
            $destinationPath2="image/product";
            $file2=$request->image2;
            $extention2=$file2->getClientOriginalExtension();
            $filename2=time().'.'.$extention2;
            $file2->move($destinationPath2, $filename2);
            $image2=$filename2;
        }
        if($request->hasFile('image3'))
        {
            $destinationPath3="image/product";
            $file3=$request->image3;
            $extention3=$file3->getClientOriginalExtension();
            $filename3=time().'.'.$extention3;
            $file3->move($destinationPath3, $filename3);
            $image3=$filename3;
        }
        $data=[
            'publication_status'=>$request->publication_status,
            'name'=>$request->name,
            'details'=>$request->details,
            'model'=>$request->model,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'minimum_quantity'=>$request->minimum_quantity,
            'stock'=>$request->stock,
            'weight'=>$request->weight,
            'length'=>$request->length,
            'location'=>$request->location,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'brand_id'=>$request->brand_id,
            'image'=>$image,
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
        ];
        Product::create($data);
        return redirect()->route('products')->with('msg','Successfully Added');
    }

    public function product_update(Request $request ,$id)
    {
        $product=Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products')->with('msg','Product Updated Successfully');
    }
    public function product_destroy(Request $request ,$id)
    {
        Product::destroy($id);
        return redirect()->route('products')->with('msg','Product Deleted Successfully');
    }
    public function product_active($id)
    {
        Product::where('id',$id)
            ->update(['publication_status'=>1]);
        return redirect()->route('products')->with('msg','Product Activated Successfully');
    }
    public function product_deactive($id)
    {

        Product::where('id', $id)->update(['publication_status' => 0]);
        return redirect()->route('products')->with('msg','Product Dectivated Successfully');
    }




    public function addlogo(){

        $x = DB::table('logos')->first();
        if (is_null($x)){return view('admin.pages.logo.logo');}
        else
        {
            $logo=Logo::all();
            return view('admin.pages.logo.index',compact('logo'));
        }

    }
    public function storelogo(Request $request)
    {
        $logo_image='';
        if($request->hasFile('logo_image'))
        {
            $destinationPath="image/logo";
            $file=$request->logo_image;
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move($destinationPath, $filename);
            $logo_image=$filename;
        }
        $data=[
            'logo_image'=>$logo_image,
        ];
        Logo::create($data);
        return redirect()->route('logo-index')->with('msg','Logo Added');

    }
    public function alllogo(){
        $logo=Logo::all();
        return view('admin.pages.logo.index',compact('logo'));
    }

    public function deletelogo($id)
    {
        $oldimage = Logo::findOrFail($id);
        $image_path = 'image/logo/'.$oldimage->logo_image;

        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $oldimage->delete();
        return redirect()->route('logo')->with('msg','Successfully Deleted');
    }

    public function addslider(){

        return view('admin.pages.slider.slider');
    }
    public function storeslider(Request $request)
    {
        $slider_image='';
        if($request->hasFile('slider_image'))
        {
            $destinationPath='image/slider';
            $file=$request->slider_image;
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move($destinationPath, $filename);
            $slider_image = $filename;
        }
        $data=[
            'heading_1'=>$request->heading_1,
            'heading_2'=>$request->heading_2,
            'description'=>$request->description,
            'slider_image'=>$slider_image,
        ];
        Slider::create($data);
        return redirect()->route('slider-index')->with('msg','Successfully Added');

    }
    public function allslider(){

        $slider=Slider::all();

        return view('admin.pages.slider.index',compact('slider'));
    }
    public function editslider($id){
        $slider=Slider::findOrFail($id);
        return view('admin.pages.slider.editslider',compact('slider'));
    }



    public function updateslider(Request $request, $id)
    {

        $oldimage=Slider::select('slider_image')->find($id);
        if($request->hasFile('slider_image'))
        {
            $file=$request->slider_image;
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('image/slider',$filename);
            $photo=$filename;
            $filename=($photo);
            $oldimage = Slider::findOrFail($id);
            $image_path ='image/slider/'.$oldimage->slider_image;

            if(File::exists($image_path))
            {
                File::delete($image_path);

            }
            $data=[

                'heading_1'=>$request->heading_1,
                'heading_2'=>$request->heading_2,
                'description'=>$request->description,
                'slider_image'=>$photo,
            ];

            DB::table('sliders')
                ->where('id', $id)
                ->update($data);
            return redirect()->route('slider-index');
        }
        else{
            $data=[

                'heading_1'=>$request->heading_1,
                'heading_2'=>$request->heading_2,
                'description'=>$request->description,
                'slider_image'=>$oldimage->slider_image,
            ];

            DB::table('sliders')
                ->where('id', $id)
                ->update($data);
            return redirect()->route('slider-index')->with('msg','Successfully Updated');
        }
    }

    public function deleteslider($id)
    {

        $oldimage = Slider::findOrFail($id);
        $image_path ='image/slider/'.$oldimage->slider_image;

        if(File::exists($image_path))
        {
            File::delete($image_path);
        }


        $oldimage->delete();

        return redirect()->route('slider-index')->with('msg','Successfully Deleted');

    }

    public function allproduct()
    {

        $categorys = Category::get();
        $subcategorys = Subcategory::get();
        $products = Product::latest()->get();
        

        $noti_fai = Product::where('noti_fai',0)->get();
        foreach ($noti_fai as $value) {
            $value->noti_fai = 1;
            $value->save();
        }
        return view('admin.pages.showproduct',compact('products','categorys','subcategorys'));
    }

    public function adminpostproduct()
    {
        $noti_fai = Product::where('noti_fai',0)->get();
        foreach ($noti_fai as $value) {
            $value->noti_fai = 1;
            $value->save();
        }
        $categorys = Category::get();
        $subcategorys = Subcategory::get();
        $products = Product::where('admin_id',Auth::user()->id)->latest()->get();
        return view('admin.pages.adminproduct',compact('products','categorys','subcategorys'));
    }

    public function addproduct(){
        $categorys=Category::all();
        return view('admin.pages.addproductform',['categorys'=>$categorys]);
    }

    public function productadd(Request $request){

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
                'brandname'                 => 'required',
        ]);

        $productname        =$request->productname;
        $categoryname       =$request->categoryname;
        $subcategory        =$request->subcategory;
        $brandname          =$request->brandname;
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

        if (\Auth::guard('admin')->check()) {

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
                $product->brand_id=$brandname;
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
                $product->seller_id=0;
                $product->admin_id=\Auth::guard('admin')->user()->id;
                $product->publication_status=1;
                $product->save();
                toastr()->success('New Product Add Successfully');
                return redirect('admin/admin-add-product');  
            }
                   
        }else{
            toastr()->error('Something Wrong');
            return redirect('admin/admin-add-product');  
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

    public function adminediteproduct($id)
    {
        $categorys = Category::get();
        $subcategory = Subcategory::get();
        $product = Product::find($id);
        return view('admin.pages.edite',compact('product','categorys','subcategory'));
    }


    /*Edite Product*/

 public function adminupdateproduct(Request $request, $id){

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

        if (\Auth::guard('admin')->check()) {

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
            $product->seller_id=0;
            $product->admin_id=\Auth::guard('admin')->user()->id;
            $product->compositions=$compostitons;
            $product->style=$style;
            $product->properties=$request->properties;
            $product->specification=$specification;
            $product->product_ran=$trackid;
            $product->publication_status=0;
            $product->save();
            toastr()->success('Product Update Successfully');
            return redirect('admin/admin-all-product');         
        }else{

        }
    }

    /*Publish Product*/

    public function adminpublishproduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        toastr()->success('Product Publish Successfully');
        return redirect()->back();
    }
    
    /*Unpublish product*/
    public function adminunpublishproduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        toastr()->success('Product UnPublish Successfully');
        return redirect()->back();
    }


    public function findbrand(Request $request){

        $catid=$request->catid;
        $subcatid=$request->subcatid;

        $brands=Brand::where(['category_id'=>$catid,'subcategory_id'=>$subcatid,'publication_status'=>1])->get();
        $count=count($brands);
        return response()->json(['brands'=>$brands,'count'=>$count]);
    }              

}
