    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('portfolio::portfolio.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#portfolio-portfolio-entry' data-href='{{guard_url('portfolio/portfolio/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($portfolio->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#portfolio-portfolio-entry' data-href='{{ guard_url('portfolio/portfolio') }}/{{$portfolio->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#portfolio-portfolio-entry' data-datatable='#portfolio-portfolio-list' data-href='{{ guard_url('portfolio/portfolio') }}/{{$portfolio->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('portfolio-portfolio-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('portfolio/portfolio'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('portfolio::portfolio.name') !!}  [{!! $portfolio->title !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('portfolio::admin.portfolio.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>