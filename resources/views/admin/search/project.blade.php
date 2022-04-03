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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{ url('admin/projectinfo', $item->id) }}">Details</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
        </table>
    </div>
    </section>
    @endsection

@section('js')
@endsection
