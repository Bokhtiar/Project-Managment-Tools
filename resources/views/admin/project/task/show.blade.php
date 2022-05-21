@extends('layouts.admin.app')
@section('title', 'List Of Sells')

@section('css')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.jqueryui.min.css">
@endsection

    @section('admin_content')

    <section class="card container">
        <h3 class="float-right my-2 ml-3">Project Title: {{ $show->project->name }}</h3>
        <h3 class="float-right my-2 ml-3">Task Details</h3>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>Project Info</h3>
                    <p><span class="font-weight-bold">Project Name:</span>  &nbsp;&nbsp; {{ $show->project ? $show->project->name: '' }}</p>
                    <p><span class="font-weight-bold">Task Title:</span>   &nbsp;&nbsp;      {{ $show->title }}</p>
                    <p><span class="font-weight-bold">Task Description:</span>    &nbsp;&nbsp;   {{ $show->des }}</p>
                    <p><?php
                        $str = $show->user_id;
                        $ex =  explode(" ",$str);

                        ?>
                        @foreach ($ex as $e)
                           
                        @endforeach
                        </p>
                </div>
                <div class="col-md-6">
                    <h3>Task Duration</h3>
                   
                    <p>{{ $show->start_date }} to {{ $show->end_dete }}</p>
                </div>
            </div>
        </div>


        <section class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                @if ($show->images == null)

                @else
                @php
                $images = json_decode($show->images);
                @endphp
                @foreach ($images as $item)
                    <img height="200px" width="200px" src="{{ asset($item) }}"  alt="">
                @endforeach
                @endif
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
               {{-- <a href="{{ asset($show->file) }}" download={{ $show->title }}>DOC</a> --}}
               <h3>Task Documents</h3>
               <a class="btn btn-success my-3" href="{{ url('admin/doc/view', $show->id) }}">Task Documents</a>
               <p>
                   <h3>Task Status</h3>
                   @if($show->status == 0)
                    <a class="btn btn-danger btn-sm" href="{{ url('admin/task/status', $show->id) }}">pending</a>
                    @else 
                    <a class="btn-sm btn btn-success" href="{{ url('admin/task/status', $show->id) }}">Done</a>
                   @endif
               </p>
            </div>

        </section>
    </section>
    <section class="container">
        <h2>Comment Create Section </h2>
        <form action="{{ url('admin/comment/store', $show->id) }}">
            @csrf
                <input class="form-control" type="text" placeholder="Comment here" name="comment" required id="">
                <input type="submit" name="" value="submit" class="btn btn-success my-2" id="">
            </form>
        <h2>Comment Section</h2>
        @forelse ($comments as $item)
        <div class="card my-2">
            <div class="card-header"   style="height: 50px;background-color:  #eaf2f8;">
                <p>
                    <img height="40px" width="40px" src="{{ asset('user/img/a.jpg') }}" alt="">
                   <span class="h5"> {{ $item->user ? $item->user->name : '' }}</span>
                </p>
            </div>
            <div class="card-body">
                <p class="ml-3">{{ $item->comment }}</p>
            </div>
        </div>
        @empty
        <p>no comment this task</p>
        @endforelse
    </section>
    @endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>

</script>

@endsection
