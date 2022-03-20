@extends('layouts.user.app')
@section('user_content')
<header>
    <!-- banner section  -->
    <section>
        <div class="banner-container d-flex justify-content-center align-items-center">
            <div class="banner-content">
                <h1 class="font-weight-bolder mb-5">Educaton Progress Report.</h1>
                <button class="btn  btn-outline-primary m-3 w-50 p-3 button"><i class="fas fa-play mr-2"></i>GET
                    STARTED</button>

            </div>
        </div>
    </section>

</header>
<!-- header section end  -->



    <!-- About section start  -->

    <section class="my-5 container">
        <div class="">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-success">ABOUT DIU PMIC</h2>
                    <p class="my-3">
                        Welcome to DIU PMIS. DIU Project Management Information System aka DIU PMIS provides a
                        single point access to final year project information for both students and faculties.
                    </p>
                    <p class="my-3">
                        All the final year students of department of CSE have to do a mandatory year-long
                        development project, research project or internship. Over a year, a student needs to attend
                        six regular followups, three grand followups, prepare their report, presentation and lots of
                        other stuffs. To ease up the entire process and keep track of each and every events, DIU
                        PMIS was created.
                    </p>
                    <div class="my-4">
                        <button class="btn btn-primary w-50">Register For Title Defense</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="https://pmiscse.daffodilvarsity.edu.bd/assets/img/6d933d6.png" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section end  -->

    <!-- Popular Area Works start -->

    <section class="my-5 container">
        <div class="popular">
            <h2 class="text-success">Popular Areas of Project</h2>
            <p class="my-4">Here are the few most popular domains to work with.</p>
            <div class="row">
                <div class="col-12 col-lg-6 my-lg-5">
                    <div class="row">
                        @foreach (App\Models\Project::all() as $project)

                        @endforeach
                        <div class="col-12 col-lg-6 col-md-6">
                            <button class="btn btn-outline-success w-100 p-2 my-2 button">
                                <i class="fas fa-arrow-right mx-3"></i>  {{ $project->name }}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center my-5">
                        <img src="https://pmiscse.daffodilvarsity.edu.bd/assets/img/ed42144.png"
                            class="img-thumbnail image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Area Works end -->

    <!-- Project Internship Committee start -->

    <section class="my-5 container">
        <div class="project">
            <div class="text-center">
                <h1 class="text-success">Project/Internship Committee</h1>
                <p class="my-3">For any queries regarding project/internship contact the above mentioned persons.
                    For any other queries you may contact CSE Office .</p>
            </div>
            <div class="row my-5">
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="card text-center my-2" style="width: 15rem;">
                        <img class="card-img-top rounded-circle"
                            src="https://pmiscse.daffodilvarsity.edu.bd/api/media/uDrive/710002119/484682raju_150x150.jpg" alt="Card image cap"
                            height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Mahfuzur Rahman Raju</h5>
                            <p class="card-text">Assistant Professor<br>
                                mahfuzur@daffodilvarsity.edu.bd</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 ">
                    <div class="card text-center my-2" style="width: 15rem;">
                        <img class="card-img-top rounded-circle"
                            src="https://pmiscse.daffodilvarsity.edu.bd/media/members/SMTS.jpeg"
                            alt="Card image cap" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Narayan Ranjan Chakraborty</h5>
                            <p class="card-text">Assistant Professor<br>
                                narayan@daffodilvarsity.edu.bd</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="card text-center my-2" style="width: 15rem;">
                        <img class="card-img-top rounded-circle"
                            src="https://pmiscse.daffodilvarsity.edu.bd/media/members/image.png"
                            alt="Card image cap" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Narayan Ranjan Chakraborty</h5>
                            <p class="card-text">Assistant Professor<br>
                                narayan@daffodilvarsity.edu.bd</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="card text-center my-2" style="width: 15rem;">
                        <img class="card-img-top rounded-circle"
                            src="https://pmiscse.daffodilvarsity.edu.bd/media/members/Pic_6awfspP.png"
                            alt="Card image cap" height="250px">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Narayan Ranjan Chakraborty</h5>
                            <p class="card-text">Assistant Professor<br>
                                narayan@daffodilvarsity.edu.bd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
