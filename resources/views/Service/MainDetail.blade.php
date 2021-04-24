<div id="content">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-md-3 wow fadeInUp">
                <ul id="services-list">

                    <li class="active"><a href="{{ asset('Service_detail') }}">Residential Design</a></li>
                    <li><a href="Hospitaly Design">Hospitaly Design</a></li>
                    <li><a href="service-3.html">Office Design</a></li>
                    <li><a href="service-4.html">Commercial Design</a></li>

                    <li class="active"><a href="{{ route('Service_detail') }}">Residential Design</a></li>
                    <li><a href="#">Hospitaly Design</a></li>
                    <li><a href="#">Office Design</a></li>
                    <li><a href="#">Commercial Design</a></li>

                </ul>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
                            fugiat quo voluptas nulla pariatur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-6 pic-services wow fadeInUp" data-wow-delay=".6s">
                        <img src="{{ asset('images/services/p1_a.jpg') }}" class="img-responsive" alt="">
                        <img src="{{ asset('images/services/p1_b.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>



    @section('title','Service_Detail_Contructure_Detail')
    @section('idBody')class = "page-services"@endsection
    @section('header-bg')class = "header-bg"@endsection




