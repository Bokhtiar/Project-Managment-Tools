@extends('layouts.user.app')
@section('user_content')

<section>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center bg-success text-light">Contact Form</h2>
            <div class="container">
                <form action="{{ url('contact/store') }}" method="POST">
                    @csrf
                    <div class="form-gorup">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="">Enter Your Name</label>
                                <input class="form-control" type="text" placeholder="type here name" name="name" id="">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="">Enter Your E-mail</label>
                                <input class="form-control" type="email" placeholder="type here E-mail" name="email" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Message</label>
                                <textarea class="form-control" placeholder="Message" name="msg" id="" cols="10" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-12 float-right">
                                <input type="submit" class="btn btn-success" value="Submit" name="" id="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
