@extends('admin.index')
@section('content')


    <div class="box">
        <div class="box-header" >
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body">
            <form method="post" action="{{aurl('programmers')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="POST">
                <div class="form-group">
            <label >Name</label><br>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Email</label><br>
                    <input type="email" name="email" value="{{old('Email')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Job</label><br>
                  <input type="text" name="job" class="form-control" value="{{old('job')}}">
                </div>
                <div class="form-group">
                    <label >Photo</label><br>
                    <input type="file" name="photo" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label >Facebook</label><br>
                    <input type="text" name="facebook" value="{{old('facebook')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Tweeter</label><br>
                    <input type="text" name="tweeter" value="{{old('tweeter')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Git Hub</label><br>
                    <input type="text" name="git" value="{{old('git')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label >Description</label><br>
                    <textarea class="form-control" name="description" >{{old('description')}}</textarea>
                </div>

                <div class="form-group">

                    <input type="submit" name="submit" value="Add New Programmer" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>


@endsection