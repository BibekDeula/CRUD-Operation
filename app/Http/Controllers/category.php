<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class category extends Controller
{
    public function index(){
    	$datas=DB::table('categorytable')->get();
    	return view('deula.index',compact('datas'));

}
    public function create(){
    	$datas=DB::table('categorytable')->get();
    	return view('deula.create',compact('datas'));
    }
    public function store(Request $request)
{
	$datas=[
		'id'=>$request->input('id'),
	'name'=>$request->input('name'),
	'photo'=>$request->input('photo'),
	'discount'=>$request->input('discount'),
	'description'=>$request->input('description'),
    'meta_title'=>$request->input('meta_title'),
	'price'=>$request->input('price'),
	

	];
	DB::table('categorytable')->insert($datas);
	//return redirect('hard')->with('success','Product Added');
}

	public function getsession(Request $request){ 
	if($request->session()->has('name')){
echo $request->session()->get('name');
}
else{
	echo "no data";
	
}
	

}
public function storesession(Request $request){
	$request->session()->put('name','bibek');
	echo "data has been stored";
}
public function show($id){
	$datas=DB::table('categorytable')->where('id','=',$id)->get();
	return view('deula.show',compact('datas'));
}
public function removesession(Request $request){
	$request->session()->forget('name');
	echo "deleted";
}
public function edit($id){
	$datas=DB::table('categorytable')->where('id','=',$id)->first();
	return view('deula.edit',compact('datas'));
}
public function update(Request $request,$id){
$datas=[
		'id'=>$request->input('id'),
	'name'=>$request->input('name'),
	'photo'=>$request->input('photo'),
	'discount'=>$request->input('discount'),
	'description'=>$request->input('description'),
    'meta_title'=>$request->input('meta_title'),
	'price'=>$request->input('price'),
	

	];
	DB::table('categorytable')->where('id','=',$id)->update($datas);
}
public function destroy($id){
	DB::table('categorytable')->where('id','=',$id)->delete();
	return redirect('hard')->with('succes','Deleted');
}
}
