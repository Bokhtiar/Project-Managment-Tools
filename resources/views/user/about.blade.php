@extends('layouts.user.app')
@section('user_content')


    <!-- About section start  -->

    <section class="my-5 container">
        <div class="">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-success">ABOUT DIU PMTS</h2>
                    <p class="my-3">
                        Welcome to DIU PMTS. DIU Project Management Information System aka DIU PMTS provides a
                        single point access to final year project information for both students and faculties.
                    </p>
                    <p class="my-3">
                        All the final year students of department of CSE have to do a mandatory year-long
                        development project, research project or internship. Over a year, a student needs to attend
                        six regular followups, three grand followups, prepare their report, presentation and lots of
                        other stuffs. To ease up the entire process and keep track of each and every events, DIU
                        PMTS was created.
                    </p>
                    <div class="my-4">
                        <button class="btn btn-primary w-50"><a class="text-light" href="{{ url('register') }}">Register For Title Defense</a></button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="https://pmiccse.daffodilvarsity.edu.bd/assets/img/6d933d6.png" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section end  -->
@endsection
