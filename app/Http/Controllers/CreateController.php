<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
  
class CreateController extends Controller
{
    public function home(){
    	$orders = Order::all(); 
 		return view('home', ['orders' => $orders]);
    }

    public function add(Request $request){
    	$this->validate ($request, [
    		'order_id' => 'required',
            'service_number' => 'required',
            'remark' => 'required',
            'order_status' => 'required',
            'state' => 'required',
    		]);

    	$orders = new Order;

        $orders->id = $request->input('order_id');
        $orders->order_id = $request->input('order_id');
        $orders->service_number = $request->input('service_number');
        $orders->segment_group = $request->input('segment_group');
        $orders->product_name = $request->input('product_name');
        $orders->remark = $request->input('remark');
        $orders->order_status = $request->input('order_status');
        $orders->state = $request->input('state');
    	$orders->save();
    	return redirect('/')->with('info', 'Order Added Successfully!');
    }
	public function edit(Request $request, $id){
    	$this->validate ($request, [
            'order_id' => 'required',
            'service_number' => 'required',
            'remark' => 'required',
            'order_status' => 'required',
            'state' => 'required',
    	]);
    	$data = array(
            'id' => $request->input('order_id'),
            'order_id' => $request->input('order_id'),
            'service_number' => $request->input('service_number'),
            'segment_group' => $request->input('segment_group'),
            'product_name' => $request->input('product_name'),
            'remark' => $request->input('remark'),
            'order_status' => $request->input('order_status'),
            'state' => $request->input('state')
    	);
    	Order::where('id', $id)
    	->update($data);
    	return redirect('/')->with('info', 'Order Saved Successfully!');
    }
    
    public function read($id){
    	$orders = Order::find($id); 
 		return view('read', ['orders' => $orders]);
 	}

 	public function delete($id){
 		Order::where('id', $id)
 		->delete();
    	return redirect('/')->with('info', 'Order Deleted Successfully!');

 	}

}
