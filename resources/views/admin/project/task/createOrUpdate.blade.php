@extends('layouts.admin.app')

@section('title', 'Task Create')
@section('css')
@endsection

@section('admin_content')

<section class="card container">
    <div class="card-title">
        <p class="text-center">{{ @$edit ? 'Update Form' : 'Create Form' }}</p>
    </div>
    <div class="card-header ">
        <div class="card-body">
            @if(@$edit)
            <form action="@route('admin.task.update', @$edit->id)" method="POST" class="form-group">
                @method('PUT')
            @endif
            <form action="@route('admin.task.store')" method="POST" class="form-group">
                @csrf
                <div class="my-3">
                    <div class="">
                        <div class="card-header"></div>
                        <div class="">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <label for="">Select Project</label>
                                    <select name="project_id" id="" class="form-control select2" required>
                                        <option value="">--Select Student--</option>
                                        @foreach ($projects as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == @$edit->project_id ? 'selected' : '' }}> {{ $item->name }}</option>
                                        @endforeach
                                    </select>

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
                                    </div>

                                    <div class="form-group">
                                        <label for="">Task Description</label>
                                        <textarea class="form-control" name="des" id="" cols="10" rows="4" placeholder="Description" required>{{ @$edit->des }}</textarea>
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



@endsection
