<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Orders::all();
        return view('admin.layouts.order',$result);
    }


    public function manage_order(Request $request, $id='')
    {
        if($id>0){
            $arr=Orders::where(['id'=>$id])->get();

            $result['order']=$arr['0']->order;
            $result['company_Name']=$arr['0']->company_Name;
            $result['status']=$arr['0']->status;
            $result['total']=$arr['0']->total;
            $result['date']=$arr['0']->date;
            $result['view_details']=$arr['0']->view_details;
            $result['id']=$arr['0']->id;
        }else{
            $result['order']='';
            $result['company_Name']='';
            $result['status']='';
            $result['total']='';
            $result['date']='';
            $result['view_details']='';
            $result['id']=0;
        }
        return view('admin.layouts.manage_order',$result);

    }

        public function manage_order_process(Request $request)
        {
            //return $request->post();
            $request->validate([
                //'order'=>'required',
                'order'=>'required|unique:orders,order,'.$request->post('id'),
                //'value'=>'required',
            ]);


            if($request->post('id')>0){
                $model=Orders::find($request->post('id'));
                $msg="Order updated";
            }else{
                $model=new Orders();
                $msg="Order Inserted";
            }
            $model->order=$request->post('order');
            $model->company_Name=$request->post('company_Name');
            $model->total=$request->post('total');
            $model->date=$request->post('date');
            $model->view_details=$request->post('view_details');
            $model->status=1;
            $model->save();
            //$request->session()->flash('message',$msg);
            return redirect('admin/order')->with('message',$msg);
        }

        public function delete(Request $request, $id)
        {
            $model=Orders::find($id);
            $model->delete();
            //$request->session()->flash('message','coupon Deleted');
            return redirect('admin/order')->with('message_delet','Order Deleted');
        }

        public function status(Request $request,$status, $id)
        {
            $model=Orders::find($id);
            $model->status=$status;
            $model->save();
            //$request->session()->flash('message',' Coupon Status Updadted');
            return redirect('admin/order')->with('message_status',' Order Status Updadted');
        }
}
