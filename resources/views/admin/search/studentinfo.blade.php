@extends('layouts.admin.app')

    @section('title', 'Student info')
    @section('css')
    @endsection

    @section('admin_content')


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 my-5 text-center">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('admin/download.png') }}" height="100px" width="100px" alt=""> <hr>
                            <p><strong>Student Name :</strong>  {{ $user->name }}</p>
                            <p><strong>Student E-Mail :</strong>  {{ $user->email }}</p>
                            <p><strong>Student Student ID :</strong>  {{ $user->student_id }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection

