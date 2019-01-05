<?php

namespace App\Http\Controllers;
use App\DataTables\ProductsDatatables;
use Illuminate\Http\Request;
use \App\Product;
use \App\Department;
use Illuminate\Support\Facades\Storage;
use function MongoDB\BSON\toJSON;
use App\Programmer;

class concept extends Controller
{
   public function web_design_products()
   {
       $dept_ids=Department::all();
       foreach ($dept_ids as $dept_id){
           if ($dept_id->department_name =='web design')
           {
               $products=Product::where('department_id',$dept_id->id)->paginate(3);
               return view('style.custom_product',['title'=>'Web Design Products','products'=>$products]);
           }
       }


   }

    public function products()
    {
                $products=Product::paginate(3);
                return view('style.custom_product',['title'=>'Products','products'=>$products]);
    }

    public function android()
    {
        $dept_ids=Department::all();
        foreach ($dept_ids as $dept_id){
            if ($dept_id->department_name =='android')
            {
                $products=Product::where('department_id',$dept_id->id)->paginate(3);
                return view('style.custom_product',['title'=>'Android Products','products'=>$products]);
            }
        }
    }


    public function desktop()
    {
        $dept_ids=Department::all();
        foreach ($dept_ids as $dept_id){
            if ($dept_id->department_name =='desktop')
            {
                $products=Product::where('department_id',$dept_id->id)->paginate(3);
                return view('style.custom_product',['title'=>'Desktop Products','products'=>$products]);
            }
        }
    }

    public function ecommerce()
    {
        $dept_ids=Department::all();
        foreach ($dept_ids as $dept_id){
            if ($dept_id->department_name =='ecommerce')
            {
                $products=Product::where('department_id',$dept_id->id)->paginate(3);
                return view('style.custom_product',['title'=>'E-Commerce Products','products'=>$products]);
            }
        }
    }

    public function home()
    {
       $products= Product::orderBy('id','desc')->paginate(3);
        return view('style.home',['products'=>$products]);
    }
    public function designer()
    {
          $d= Programmer::where('job','web designer')->get();
          return view('style.programmer',['data'=>$d,'title'=>'Designer']);
    }

    public function developer()
    {
        $d= Programmer::where('job','web developer')->get();
        return view('style.programmer',['data'=>$d,'title'=>'Developer']);
    }
}
