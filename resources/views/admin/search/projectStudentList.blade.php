@extends('layouts.admin.app')
@section('title', 'List Of Search')

@section('css')
@endsection

    @section('admin_content')

    <section class="card">
        <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentAssigns as $item)
                <tr>
                    <td>{{ $item->user ? $item->user->name : '' }}</td>
                    <td>{{ $item->user ? $item->user->email : '' }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{ url('admin/student', $item->user->id) }}">Details</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </tfoot>
        </table>
    </div>
    </section>
    @endsection

@section('js')
@endsection
