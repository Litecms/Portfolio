    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#portfolio" data-toggle="tab">{!! trans('portfolio::portfolio.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#portfolio-portfolio-edit'  data-load-to='#portfolio-portfolio-entry' data-datatable='#portfolio-portfolio-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#portfolio-portfolio-entry' data-href='{{guard_url('portfolio/portfolio')}}/{{$portfolio->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('portfolio-portfolio-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('portfolio/portfolio/'. $portfolio->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="portfolio">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('portfolio::portfolio.name') !!} [{!!$portfolio->title!!}] </div>
                @include('portfolio::admin.portfolio.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>