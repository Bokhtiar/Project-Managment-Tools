@extends('layouts.user.app')
@section('user_content')

    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">pmt > task</li>
            </ol>
          </nav>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-title">
                        <div class="card-header">
                            <p class="h3"><span class="font-weight-bold">Project Name: </span>{{ $show->project ? $show->project->name : '' }}</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class=""><span class="font-weight-bold">Task Title: </span> {{ $show->title }}</p>

                        <p class=""><span class="font-weight-bold">Task Description: </span> {{ $show->des }}</p>

                        <p class=""><span class="font-weight-bold">Task Duration: </span>{{ $show->start_date }} to {{ $show->end_dete }}</p>

                        <section class="row">
                            <div class="">
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


                        </section>
                        <div class="">
<<<<<<< HEAD
                            {{-- <a href="{{ asset($show->file) }}" download={{ $show->file }} class="btn btn-success" >DOC FILE DOWNLOAD</a> --}}
                            <a class="btn btn-success my-3" href="{{ url('user/doc/view', $show->id) }}">Task Document</a>
=======
                            <a href="{{ asset($show->file) }}" download={{ $show->file }} class="btn btn-success" >DOC FILE DOWNLOAD</a>
>>>>>>> 016c3dd18942721988d49eedb6c1ddeb96104eb6
                         </div>


                    <hr>
                        <section>
                            <form action="{{ url('user/comment/store', $show->id) }}">
                                @csrf
                                <div class="form-gorup">
                                    <label for="">Comment Section</label>
                                    <input required type="text" name="comment" placeholder="comment" class="form-control" id="">
                                </div>
                                <div class="form-gorup my-2">
                                    <input type="submit" class="btn btn-sm btn-success" value="Submit" name="" id="">
                                </div>
                            </form>

                            <section>
                                @forelse ($comments as $item)
                                <div class="card my-2">
                                    <div class="card-header"  style="background-color:  #eaf2f8;">
                                        <img height="40px" width="40px" src="{{ asset('user/img/a.jpg') }}" alt="">
                                        {{ $item->user ? $item->user->name : '' }}
                                    </div>
                                    <div class="card-body">
                                        <p>{{ $item->comment }}</p>
                                    </div>
                                </div>
                                @empty
                                <p>no comment this task</p>
                                @endforelse
                            </section>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-title">
                        <div class="card-header">
                            <p class="h3">Task</p>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach ($tasks as $item)
                        <?php
                        $str = $item->user_id;
                        $ex =  explode(" ",$str);

                        ?>
                @foreach ($ex as $e)
                    @if ($e==Auth::id())
                        <p><a href="{{ url('user/task/detail', $item->id) }}">{{ $item->title }}</a> </p> <hr>
                    @endif
                    @endforeach
                @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
