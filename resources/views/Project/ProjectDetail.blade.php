@extends('Layout.main')

@section('sub-header')
    @include('Project.SubHeader')
@endsection

@section('content')
    <div class="container project-view">

        <div class="row">
            <div class="col-md-8 project-images">
                <img src="images/portfolio/view/p2_a.jpg" alt="" class="img-responsive" />
                <img src="images/portfolio/view/p2_b.jpg" alt="" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <div class="project-info">
                    <h2>Elegance Modern Suite</h2>

                    <div class="details">
                        <div class="info-text">
                            <span class="title">Date</span>
                            <span class="val">January 2015</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Location</span>
                            <span class="val">Roma, Italia</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Value</span>
                            <span class="val">$25,000</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Client</span>
                            <span class="val">Hilton Hotel</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Category</span>
                            <span class="val">Hospitaly</span>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <p>
                    <h4>Our Solutions</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    </p>


                </div>
            </div>
        </div>
    </div>
@endsection


@section('title','Project_Contructure_Detail')
@section('idBody')class = "page-projects"@endsection
@section('header-bg')class = "header-bg"@endsection
