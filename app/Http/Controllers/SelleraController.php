<?php

namespace App\Http\Controllers;

use App\Seller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SelleraController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::latest()->get();
        return view('seller.seller1.index',compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.seller1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        $seller = new Seller();
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->address = $request->address;
        $seller->image = 'Picther';
        $seller->phone = $request->phone;
        $seller->password = Hash::make($request->password);
        $seller->save();

        $lastId = $seller->id;
        $prictureInfo = $request->file('image');
        $picName = $lastId.$prictureInfo->getClientOriginalName();
                                          
        $folder = "SellerImages/";
        $prictureInfo->move($folder,$picName);
        $picUrl = $folder.$picName;
        $productPic = Seller::find($lastId);
        $productPic->image = $picUrl;
        $productPic->save();

        Toastr::success('Product Upload Successfully :)','Success');
        return redirect()->route('adminseller.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $seller = Seller::find($id);
        $seller->state = $request->state;
        $seller->save();
        Toastr::success('Seller State Update Successfully :)','Success');
        return redirect()->back();
    }


    public function approveSeller($id)
    {
        $seller = Seller::find($id);
        $seller->state = 'active';
        $seller->save();
        Toastr::success('Seller State Successfully Update :)','Success');
        return redirect()->back();
    }

    public function suspendSeller($id)
    {
        $seller = Seller::find($id);
        $seller->state = 'suspend';
        $seller->save();
        Toastr::success('Seller State Successfully Update :)','Success');
        return redirect()->back();
    }

    public function deactiveSeller($id)
    {
        $seller = Seller::find($id);
        $seller->state = 'deactive';
        $seller->save();
        Toastr::success('Seller State Successfully Update :)','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller = Seller::find($id);
        $seller->delete();
        Toastr::success('Seller Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
