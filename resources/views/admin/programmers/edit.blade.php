@extends('admin.index')
@section('content')


    <div class="box">
        <div class="box-header" >
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body">
            <form method="post" action="{{aurl('programmers/'.$data->id)}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label >Name</label><br>
                    <input type="text" name="name" value="{{$data['name']}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Email</label><br>
                    <input type="email" name="email" value="{{$data['email']}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Job</label><br>
                   <input type="text" name="job" value="{{$data->job}}" class="form-control">
                </div>
                <div class="form-group">
                    <label >Photo</label><br>
                    <input type="file" name="photo" value="" class="form-control">
                    @if(!empty($data->photo))
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->photo)}}" style="width: 100px;height:100px ;margin: auto">
                    @endif
                </div>

                <div class="form-group">
                    <label >Facebook</label><br>
                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                </div>

                <div class="form-group">
                    <label >Tweeter</label><br>
                    <input type="text" name="tweeter" value="{{$data->tweeter}}" class="form-control">
                </div>

                <div class="form-group">
                    <label >Git Hub</label><br>
                    <input type="text" name="git" value="{{$data->git}}" class="form-control">
                </div>

                <div class="form-group">
                    <label >Description</label><br>
                    <textarea class="form-control" name="description" >{{$data->description}}</textarea>
                </div>


                <div class="form-group">

                    <input type="submit" name="submit" value="Update programmer Data" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>


@endsection