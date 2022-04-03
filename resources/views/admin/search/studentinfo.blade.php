@extends('layouts.admin.app')

    @section('title', 'Student info')
    @section('css')
    @endsection

    @section('admin_content')


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 my-5 text-center">
                    <img src="{{ asset('admin/download.png') }}" height="100px" width="100px" alt=""> <hr>
                    <div>
                        {{ $user->name }} <br>
                        {{ $user->email }}
                        {{ $user->student_id }}
                    </div>
                </div>
            </div>
        </div>


    @endsection

