<?php

namespace App\Http\Controllers\Programmer;
use App\Http\Controllers\controller;
use App\DataTables\ProgrammersDatatables;
use Illuminate\Http\Request;
use \App\Programmer;
class ProgrammersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProgrammersDatatables $programmers)
    {
        return $programmers->render('admins.programmers.index',['titel'=>'Programmer Control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.programmers.create',['title'=>'Create New Programmer']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data=$this->validate(\request(),[
            'name'=>'required',
            'job'=>'required',
            'email'=>'required|email|unique:programmers',
        ]);

        \App\Programmer::create($data);
        session()->flash('added','The New Programmer Added Successfully');
        return redirect(aurl('programmers'));
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
        $programmers=\App\Programmer::find($id);
        return view('admins.programmers.edit',['title'=>'Edit Programmer Data','data'=>$programmers]);
    }
    public function multiDelete()
    {
        if (!request()->has('item'))
        {
            return back();
        }elseif ( is_array(request('item')))
        {
            \App\Programmer::destroy(request('item'));

        }
        else
        {
            Programmer::find(request('item'))->delete();
        }
        session()->flash('added','The Programmers Deleted Successfully');
        return redirect(aurl('programmers'));
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
        $data=$this->validate(request(),[
            'name'=>'required',
            'job'=>'required',
            'email'=>'required|email|unique:programmers,email,'.$id,
        ]);

        \App\Programmer::where('id',$id)->update($data);
        session()->flash('added','The Programmer Data Updated Successfuly');
        return redirect(aurl('programmers'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Programmer::find($id)->delete();
        session()->flash('added','The Programmers Deleted Successfully');
        return redirect(aurl('programmers'));
    }
}
