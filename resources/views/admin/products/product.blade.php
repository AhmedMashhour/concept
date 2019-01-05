@extends('admin.index')
@section('content')

    <link rel="stylesheet" href="{{url('/')}}/design/Adminlte/select2-4.0.6-rc.1/dist/css/select2.min.css">

@push('js')

    <script src="{{url('/')}}/design/Adminlte/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endpush
    <link rel="stylesheet" href="{{url('/')}}/design/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <div class="box">
        <div class="box-header" >
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="POST">
                <a href="#" class="btn btn-success save"><i class="fa fa-floppy-o"></i> Save</a>
                <a href="#" class="btn btn-primary save_and_continue"><i class="fa fa-floppy-o"></i> Save and Continue</a>
                <a href="#" class="btn btn-info copy_data"><i class="fa fa-copy"></i> Copy Data</a>
                <a href="#" class="btn btn-danger delete_info"><i class="fa fa-trash"></i> Delete</a>
                <div class="container">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Product Information <i class="fa fa-info-circle"></i></a></li>
                        <li class=""><a data-toggle="tab" href="#menu1"> Department <i class="fa fa-list"></i></a></li>
                        <li><a data-toggle="tab"  href="#menu2">Product Setting <i class="fa fa-cog"></i></a></li>
                        <li><a data-toggle="tab" href="#menu3">Product Media <i class="fa fa-photo"></i></a></li>
                        <li><a data-toggle="tab" href="#menu4">Size and Weight <i class="fa fa-bus"></i></a></li>
                        <li><a data-toggle="tab" href="#menu5">Other Data <i class="fa fa-database"></i></a></li>
                    </ul>
                    <br>
                    <div class="tab-content">

                        @include('admin.products.tabs.product_info')
                        @include('admin.products.tabs.department')
                        @include('admin.products.tabs.product_setting')
                        @include('admin.products.tabs.product_media')
                        @include('admin.products.tabs.other_data')


                    </div>



                </div>
                <a href="#" class="btn btn-success save"><i class="fa fa-floppy-o"></i> Save</a>
                <a href="#" class="btn btn-primary save_and_continue"><i class="fa fa-floppy-o"></i> Save and Continue</a>
                <a href="#" class="btn btn-info copy_data"><i class="fa fa-copy"></i> Copy Data</a>
                <a href="#" class="btn btn-danger delete_info"><i class="fa fa-trash"></i> Delete</a>

            </form>
        </div>
    </div>


@endsection