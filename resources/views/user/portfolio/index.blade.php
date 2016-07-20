<div class="dashboard-content">
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h3 class="panel-title">
                        My
                        <span>
                            Portfolio
                        </span>
                    </h3>
                    <p class="panel-sub-title m-t-5 text-muted">
                        Sub title goes here with small font
                    </p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="row m-t-5">
                        <div class="col-xs-6 col-sm-8">
                                {!!Form::open()
                                ->method('GET')
                                ->action(URL::to('user/portfolio/portfolio'))!!}
                                <div class="input-group">
                                    {!!Form::text('search')->type('text')->class('form-control')->placeholder('Search for Portfolios')->raw()!!}
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-danger" type="button">
                                            <i class="icon-magnifier">
                                            </i>
                                        </button>
                                    </span>
                                </div>
                                {!! Form::close()!!}
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <a class=" btn btn-success btn-block text-uppercase f-12" href="{{ trans_url('/user/portfolio/portfolio/create') }}">
                                {{ trans('cms.create')  }} Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="panel-body" >
            @foreach($portfolios as $portfolio)
            <div class="popular-post-block" id="{!! $portfolio->getRouteKey() !!}">
                <div class="row">
                    <div class="dashboard-blog-pic">
                        @if(!empty(@$portfolio['image']))
                        <img alt="" class="img-responsive" src="{!!trans_url('/image/lb/'.@$portfolio['image']['efolder'])!!}/{!!@$portfolio['image']['file']!!}">
                            @else
                            <img src="{!!trans_url('img/news1.jpg')!!}">
                                @endif
                            </img>
                        </img>
                    </div>

                    <div class="dashboard-blog-desc popular-post-inner">
                        <div class="popular-post-desc">
                            <a href="{{ trans_url('/portfolio') }}/{!! $portfolio['slug']!!}">
                                <h4>
                                    {{ucfirst($portfolio['title'])}}
                                </h4>
                            </a>
                            <p>
                                {{ ucfirst($portfolio->category['name'])}}
                            </p>
                        </div>
                    </div>
                    <div class="dashboard-blog-actions text-right">
                        <a class="btn btn-icon waves-effect btn-success m-b-5" href="{{trans_url('portfolio')}}/{{@$portfolio['slug']}}">
                            <i class="fa fa-eye">
                            </i>
                        </a>
                        <a class="btn btn-icon waves-effect btn-primary m-b-5" href="{{ trans_url('/user') }}/portfolio/portfolio/{!! $portfolio->getRouteKey() !!}/edit">
                            <i class="fa fa-pencil">
                            </i>
                        </a>
                         <a class="btn btn-icon waves-effect btn-danger" data-action="DELETE" data-href="{{ trans_url('/user/portfolio/portfolio') }}/{!! $portfolio->getRouteKey() !!}" data-remove="{!! $portfolio->getRouteKey() !!}">
                            <i class="fa fa-trash">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
         @endforeach   
        </div>
        
    </div>
</div>
