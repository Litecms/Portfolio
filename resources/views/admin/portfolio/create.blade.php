
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Portfolio</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#portfolio-portfolio-create'  data-load-to='#portfolio-portfolio-entry' data-datatable='#portfolio-portfolio-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#portfolio-portfolio-entry' data-href='{{guard_url('portfolio/portfolio/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('portfolio-portfolio-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('portfolio/portfolio'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('portfolio::portfolio.name') !!}] </div>
                @include('portfolio::admin.portfolio.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>