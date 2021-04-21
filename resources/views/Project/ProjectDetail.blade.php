@foreach($detail as $p)
    <div class="container project-view">
        <div class="row">
            <div class="col-md-8 project-images">
                <img src="{{ asset( "$p->imageTop" ) }}" alt="" class="img-responsive"/>
                <img src="{{ asset( "$p->imageBot" ) }}" alt="" class="img-responsive"/>
            </div>
            <div class="col-md-4">
                <div class="project-info">
                    <h2>{{ $p->ProjectName }}</h2>

                    <div class="details">
                        <div class="info-text">
                            <span class="title">Date</span>
                            <span class="val">{{ $p->DateFinish }}</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Location</span>
                            <span class="val">{{ $p->Location }}</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Value</span>
                            <span class="val">{{ $p->Price }}</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Client</span>
                            <span class="val">{{ $p->Client }}</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Category</span>
                            <span class="val">{{ $p->tagName }}</span>
                        </div>
                    </div>

                    <p>{{ $p->contentTop }}</p>
                    <h4>Our Solutions</h4>
                    <p>{{ $p->contentBot }}</p>


                </div>
            </div>
        </div>
    </div>
@endforeach


@section('title','Project_Contructure_Detail')
@section('idBody')class = "page-projects"@endsection
@section('header-bg')class = "header-bg"@endsection
