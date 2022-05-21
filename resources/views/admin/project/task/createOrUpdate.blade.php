@extends('layouts.admin.app')

@section('title', 'Task Create')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/prettify.css"></link>
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.css"></link>

    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/wysihtml5-0.3.0.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/jquery-1.7.2.min.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/prettify.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/bootstrap.min.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.js"></script>
@endsection

@section('admin_content')

<section class="card container">
    <h3 class="float-right my-2 ml-3">Create Task</h3>
    <div class="card-title">
        <p class="text-center">{{ @$edit ? 'Update Form' : 'Create Form' }}</p>
    </div>
    <div class="card-header ">
        <div class="card-body">
            @if(@$edit)
            <form action="@route('admin.task.update', @$edit->id)" method="POST" class="form-group" enctype="multipart/form-data">
                @method('PUT')
            @endif
            <form action="@route('admin.task.store')" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <div class="">
                        <div class="card-header"></div>
                        <div class="">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <label for="">Select Project</label>
                                    <select name="project_id" id="project_id" class="form-control select2" required>
                                        <option value="">--Select Project--</option>
                                        @foreach ($projects as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == @$edit->project_id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                    <div class="form-group form-inline">
                                    <ul id="list_user_id"> <!--project ways list student show -->
                                             
                                    </ul>
                                        <br>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Task Title</label>
                                        <input type="text" value="{{ @$edit->title }}" name="title" placeholder="Project Task Title" required class="form-control" id="">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="">Task Start Date</label>
                                                <input type="date" value="{{ @$edit->start_date }}" name="start_date"  required class="form-control" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6"><div class="form-group">
                                            <label for="">Task End Date</label>
                                            <input type="date" name="end_date" value="{{ @$edit->end_dete }}"  required class="form-control" id="">
                                        </div></div>



                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label for="">Select Images</label>
                                        <input type="file" class="form-control my-5" style="height: 200px" name="images[]" multiple>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label for="">File Choose</label>
                                        <input type="file" class="form-control my-5" style="height: 200px" name="file">
                                    </div>

                                    </div>

                                    <div class="form-group">
                                        <label><strong>Description :</strong></label>
                                        <textarea class="form-control" name="des">{{ @$edit->des }}</textarea>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="float-right">
                    <input type="submit" class="btn btn-primary" value="Task Confirm">
                </div>
            </form>

        </div>
    </div>
</section>


@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
           $('select[name="project_id"]').on('change', function(){
               var project_id = $(this).val();
               if(project_id){
                $.ajax({
                    url:'/project/'+project_id,
                    type:'GET',
                    dataType:"Json",
                    success:function(data){
                        console.log(data)


                        data.forEach( item => {
                            $("#list_user_id").append(' <li style="list-style: none" class="my-2"><label><input id="user_id" type="checkbox" name="user_id[]" value='+item.user_id+'></label> '+item.user.name+'</li>');
                        });
                            
                    }
                })
               }
           })
    </script>


@endsection

@endsection
