<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\DataTables\ProductsDatatables;
use Illuminate\Http\Request;
use \App\Product;
use Illuminate\Support\Facades\Storage;
use function MongoDB\BSON\toJSON;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductsDatatables $product)
    {
        return $product->render('admin.products.index',['title'=>'Products Control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$product=Product::create([
    'title'=>'',

]);
if (!empty($product))
{
    return redirect(aurl('products/'.$product->id.'/edit'));
}

    }


    public function store()
    {

        $data=$this->validate(\request(),[
            'name'=>'required',
        ]);

        \App\Product::create($data);
        session()->flash('added','The New Product Added Successfully');
        return redirect(aurl('products'));
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

        $product=\App\Product::find($id);
        return view('admin.products.product',['title'=>'Create Or Update Product'.$product->title],['product'=>$product]);
    }
    public function multiDelete()
    {
        if (!request()->has('item'))
        {
            return back();
        }elseif ( is_array(request('item')))
        {
            foreach (\request('item') as $id)
            {
                $c=Product::find($id);
                $c->delete();
            }
        }
        else
        {
            $c=Product::find(\request('item'));
            $c->delete();
        }
        session()->flash('added','The Products Deleted Successfully');
        return redirect(aurl('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upload_files($id)
    {
        if (\request()->hasFile('file'))
        {

          $fid= up()->upload([

                'file'=>'file',
                'path'=>'products/'.$id,
                'upload_type'=>'files',
               'relation_id'=>$id,
               'file_type'=>'product',

            ]);
          return response(['status'=>true,'id'=>$fid],200);
        }
    }
    public function delete_product_image($id)
    {
        $product= Product::find($id);
        Storage::delete($product->photo);
        $product->photo=null;
        $product->save();
    }
    public function update_product_image($id)
    {
       $product= Product::where('id',$id)->update([
            'photo'=> up()->upload([

                'file'=>'file',
                'path'=>'products/'.$id,
                'upload_type'=>'single',
                'delete_file'=>'',

            ])
        ]);
        return response(['status'=>true],200);
    }

    public function deleteFile()
    {
        if (\request()->has('id'))
        {

            return up()->delete(\request('id'));
        }
    }
    public function update(Request $request, $id)
    {
        $data=$this->validate(\request(),[
            'name'=>'required',
        ]);

        \App\Product::where('id',$id)->update($data);
        session()->flash('added','The Product Updated Successfully');
        return redirect(aurl('products'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c=Product::find($id);
        $c->delete();
        session()->flash('added','The Product Deleted Successfully');
        return redirect(aurl('products'));
    }
}
