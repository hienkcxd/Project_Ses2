<section id="section-team">
    <div class="container">


        <div class="row">
            <div class="col-md-12 container-4">
                <!-- team member -->
                @foreach($emp as $e)
                <div class="de-team-list">
                    <div class="team-pic">
                        <img src="{{ asset ("$e->images") }}" class="img-responsive" alt=""/>
                    </div>
                    <div class="team-desc col-md-12">
                        <h3>{{ $e->empName }}</h3>
                        <p class="lead">{{ $e->position }}</p>
                        <div class="small-border"></div>
                        <p>{{ $e->describe }}</p>

                        <div class="social">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- team close -->


                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</section>
