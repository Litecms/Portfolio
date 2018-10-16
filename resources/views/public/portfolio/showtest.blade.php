@include('portfolio::portfolio.partial.header')
<section class="content">
    <div class="container">
        <div class="portfolio">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h5>{{$portfolio['title']}}</h5>
                        <h1>{{$portfolio->category['name']}}</h1>
                    </div>
                    <div class="single-post">
                        <p>Nulla sed mi leo, sit amet molestie nulla. Phasellus lobortis blandit ipsum, at adipiscing eros porta quis. Phasellus in nisi ipsum, quis dapibus magna. Phasellus odio dolor, pretium sit amet aliquam a, gravida eget dui. Pellentesque eu ipsum et quam faucibus scelerisque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget fringilla mi. Duis lobortis cursus mi vel tristique. Maecenas eu lorem hendrerit neque dapibus cursus id sit amet nisi. Proin rhoncus semper sem nec aliquet.</p>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="slider owl-carousel owl-theme">
                                    @forelse($portfolio->getImages('images') as $key=> $image)
                                    <img src="{!!url($portfolio->defaultImage('images'))!!}" class="img-responsive" alt="First slide">
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: false,
            autoplay: true,
            margin: 0,
            nav: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    });
</script>