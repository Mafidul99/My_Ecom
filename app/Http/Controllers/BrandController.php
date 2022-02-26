<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $result['data']=Brand::all();
        return view('admin.layouts.brand',$result);
    }


    public function manage_brand(Request $request, $id='')
    {
        if($id>0){
            $arr=Brand::where(['id'=>$id])->get();

            $result['name_brand']=$arr['0']->name_brand;
            $result['image']=$arr['0']->image;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }else{
            $result['name_brand']='';
            $result['image']='';
            $result['status']='';
            $result['id']=0;
        }
        return view('admin.layouts.manage_brand',$result);

    }

        public function manage_brand_process(Request $request)
        {
            //return $request->post();
            $request->validate([
                'image'=>'mimes:png,jpg,jpeg',
                'name_brand'=>'required|unique:brands,name_brand,'.$request->post('id'),

            ]);


            if($request->post('id')>0){
                $model=Brand::find($request->post('id'));
                $msg="Brand updated";
            }else{
                $model=new Brand();
                $msg="Brand Inserted";
            }
            if($request->hasfile('image')){
                $image=$request->file('image');
                $ext=$image->extension();
                $image_name=time().'.'.$ext;
                $image->storeAs('/public/media/brand/',$image_name);
                $model->image=$image_name;
            }

            $model->name_brand=$request->post('name_brand');
            $model->status=1;
            $model->save();
            //$request->session()->flash('message',$msg);
            return redirect('admin/brand')->with('message',$msg);
        }

        public function delete(Request $request, $id)
        {
            $model=Brand::find($id);
            $model->delete();
            //$request->session()->flash('message','Color Deleted');
            return redirect('admin/brand')->with('message_delet','Brand Deleted');
        }

        public function status(Request $request,$status,$id)
        {
            $model=Brand::find($id);
            $model->status=$status;
            $model->save();
            //$request->session()->flash('message',' color Status Updadted');
            return redirect('admin/brand')->with('message_status',' Brand Status Updadted');
        }
}
