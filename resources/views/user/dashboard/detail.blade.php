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
                            <p class="h3">{{ $show->title }}</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="lead">{{ $show->des }}</p>


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
                            <a href="{{ asset($show->file) }}" download={{ $show->title }} class="btn btn-success" >DOC FILE DOWNLOAD</a>
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
                                    <div class="card-header">
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
                        <p><a href="{{ url('user/task/detail', $item->id) }}">{{ $item->title }}</a> </p> <hr>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
