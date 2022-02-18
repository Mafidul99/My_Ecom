<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Category::all();
        return view('admin.layouts.category',$result);
    }


    public function manage_category(Request $request, $id='')
    {
        if($id>0){
            $arr=Category::where(['id'=>$id])->get();

            $result['category_name']=$arr['0']->category_name;
            $result['category_slug']=$arr['0']->category_slug;
            $result['id']=$arr['0']->id;
        }else{
            $result['category_name']='';
            $result['category_slug']='';
            $result['id']=0;
        }
        return view('admin.layouts.manage_category',$result);

    }

        public function manage_category_process(Request $request)
        {
            //return $request->post();
            $request->validate([
                'category_name'=>'required',
                'category_slug'=>'required|unique:categories,category_slug,'.$request->post('id'),
            ]);


            if($request->post('id')>0){
                $model=Category::find($request->post('id'));
                $msg="Category updated";
            }else{
                $model=new Category();
                $msg="Category Inserted";
            }
            $model->category_name=$request->post('category_name');
            $model->category_slug=$request->post('category_slug');
            $model->status=1;
            $model->save();
            //$request->session()->flash('message',$msg);
            return redirect('admin/category')->with('message',$msg);
        }

        public function delete(Request $request, $id)
        {
            $model=Category::find($id);
            $model->delete();
            //$request->session()->flash('message','Category Deleted');
            return redirect('admin/category')->with('message_delet','Category Deleted');
        }

        public function status(Request $request,$status,$id)
        {
            $model=Category::find($id);
            $model->status=$status;
            $model->save();
            //$request->session()->flash('message',' Category Status Updadted');
            return redirect('admin/category')->with('message_status',' Category Status Updadted');
        }

}
