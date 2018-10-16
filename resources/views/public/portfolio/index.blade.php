@include('portfolio::portfolio.partial.header')
            <div class="content">
                <div class="container">
                    <div class="portfolio">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="grid-container">
                                    @foreach($portfolios as $portfolio)
                                     <div class="cbp-item">
                                            <a href="{{trans_url('portfolios')}}/{{$portfolio['slug']}}">
                                                 <figure class="fig">
                                                <img src="{{url($portfolio->defaultImage('image'))}}" alt="">
                                                <figcaption>
                                                    <h3>{{$portfolio['title']}}</h3>
                                                </figcaption>
                                            </figure>
                                            </a>
                                      </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
