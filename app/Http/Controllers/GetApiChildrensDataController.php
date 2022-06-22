<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ChildrensData;
use GuzzleHttp\Client;

class GetApiChildrensDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/childrens');
           
        $childrens = $response->json();
        // dd($childrens);
        
        $childrens = $childrens['allChildrensData'];
       
        $no = 0;
        return view('getChildrensDataApi.index',compact('childrens','no'));
        
       
        // dd($childrens); 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('getChildrensDataApi.addData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $children = Http::asForm()->post('http://127.0.0.1:8000/api/add',[
           
            'nama'=> $request['nama'],
            'jenis_kelamin'=>$request['jenis_kelamin'],
            'alamat'=>$request['alamat'],
            'ttl'=>$request['ttl'],
            'golongan_darah'=>$request['golongan_darah']

        ]);
        $childrensData = new ChildrensData;
        $childrensData->nama = $request->nama;
        $childrensData->jenis_kelamin = $request->jenis_kelamin;
        $childrensData->alamat = $request->alamat;
        $childrensData->ttl = $request->ttl;
        $childrensData->golongan_darah =$request->golongan_darah;        
        $childrensData->save();
       
      
        return redirect('children/getChildrensApi');
    
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
          
        $children = http::get('http://127.0.0.1:8000/api/children/'.$id);
        $children = $children->json();
        $children = $children['ChildrenDataById'];
      
        // dd($children);
        // return redirect('children/getChildrensApi');
        // return view ('getChildrensDataApi.cek',compact('id','children'));
        
        
        return view('getChildrensDataApi.editData',compact('children'));

         
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
        $children = http::asForm()->PUT('http://127.0.0.1:8000/api/updateData/'.$id,[

            'nama'=> $request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'ttl'=>$request->ttl,
            'golongan_darah'=>$request->golongan_darah
           
        ]);
        $childrensData = ChildrensData::find($id);
        if($childrensData != null){
            $childrensData->nama = $request->nama;
            $childrensData->jenis_kelamin = $request->jenis_kelamin;
            $childrensData->alamat = $request->alamat;
            $childrensData->ttl = $request->ttl;
            $childrensData->golongan_darah =$request->golongan_darah;
            $childrensData->update();
        };
        
        return redirect('children/getChildrensApi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       
        $children = http::get('http://127.0.0.1:8000/api/deleteData/'.$id);
        $childrensData = ChildrensData::find($id);
        if($children != null){
            $childrensData->delete();
        }
        else{
            //
        }
    
        return redirect('children/getChildrensApi');

        
        // return view ('getChildrensDataApi.cek',compact('id'));

    }
}
