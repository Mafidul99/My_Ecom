<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Size::all();
        return view('admin.layouts.size',$result);
    }


    public function manage_size(Request $request, $id='')
    {
        if($id>0){
            $arr=Size::where(['id'=>$id])->get();

            $result['size']=$arr['0']->size;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }else{
            $result['size']='';
            $result['status']='';
            $result['id']=0;
        }
        return view('admin.layouts.manage_size',$result);

    }

        public function manage_size_process(Request $request)
        {
            //return $request->post();
            $request->validate([
                //'category_name'=>'required',//
                'size'=>'required|unique:sizes,size,'.$request->post('id'),
            ]);


            if($request->post('id')>0){
                $model=Size::find($request->post('id'));
                $msg="Size Updated";
            }else{
                $model=new Size();
                $msg="Size Inserted";
            }
            $model->size=$request->post('size');
            $model->status=1;
            $model->save();
            //$request->session()->flash('message',$msg);
            return redirect('admin/size')->with('message',$msg);
        }

        public function delete(Request $request, $id)
        {
            $model=Size::find($id);
            $model->delete();
            //$request->session()->flash('message','Size Deleted');
            return redirect('admin/size')->with('message_delet','Size Deleted');
        }

        public function status(Request $request,$status,$id)
        {
            $model=Size::find($id);
            $model->status=$status;
            $model->save();
            //$request->session()->flash('message',' Size Status Updadted');
            return redirect('admin/size')->with('message_status',' Size Status Updadted');
        }
}
