@include('portfolio::portfolio.partial.header')
<section class="content">
    <div class="container">
        <div class="portfolio">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h5>{{$portfolio['title']}}</h5>
                        <h1>{{$portfolio['subtitle']}}</h1>
                    </div>
                    <div class="single-post">
                        <p>{!!$portfolio['details']!!}</p>
                        <div class="row"> 
                            <div class="col-md-8 col-md-offset-2">
                                <div class="fotorama mt-20 mb-30" data-nav="thumbs" data-width="100%" data-allowfullscreen="true" data-fit="contain">
                                    @forelse($portfolio->getImages('images') as $key=> $image)
                                    <img data-src="{!!url($portfolio->defaultImage('images', 'sm', $key))!!}" src="{!!url($portfolio->defaultImage('images', 'sm', $key))!!}" class="img-responsive" alt="First slide">
                                    @empty
                                    @endif 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
