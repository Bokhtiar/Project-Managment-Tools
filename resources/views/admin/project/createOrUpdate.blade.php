@extends('layouts.admin.app')

@section('title', 'Project Create')
@section('css')
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/select2/select2.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.jqueryui.min.css">
@endsection
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@section('admin_content')

<section class="card">
    <div class="card-header ">
        <div class="card-body">
            <form action="@route('admin.project.store')" method="POST" class="form-group">
                @csrf
                <div class="my-3">
                    <div class="">
                        <div class="card-header"></div>
                        <div class="">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Project Name</label>
                                        <input type="text" name="name" placeholder="Project Name" class="form-control" id="">
                                    </div>
                                    <label for="">Select Student</label>
                                    <select name="student_id" id="product_id" class="form-control select2">
                                        <option value="">--Select Student--</option>
                                        @foreach (App\Models\User::where('role_id', 2)->get() as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                    <!--table start -->
                                    <table class="table table-striped my-3">
                                        <thead class="bg-success">
                                            <tr>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <!--table start -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="float-right">
                    <input type="submit" class="btn btn-primary" value="Project Confirm">
                </div>
            </form>

        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('admin') }}/plugins/select2/select2.full.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });//end of ajax heaer setup
    $(function () {
        $('.select2').select2()
    })
    //end of select2

    $("#product_id").on('change',function(e){
            var id = e.target.value
            console.log("user id ", id);
            if(id){
                $.ajax({
                    url:'/admin/student/search/'+id,
                    type: 'GET',
                    dataType: 'Json',
                    success:function(response){
                        console.log(response)
                            $.each(response, function(key, item){
                            $("tbody").append('<tr id="del1 '+item.id+'">\
                            <input type="hidden" class="form-control form-control-sm" value="'+item.id+'" name="user_id[]" >\
                            <td>'+item.name+'</td>\
                            <td>'+item.email+'</td>\
                            </tr>')
                            })
                    }
                })
            }
        })//product serach and show

</script>


@endsection
