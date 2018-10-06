<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('portfolio::portfolio.names') !!} [{!! trans('portfolio::portfolio.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#portfolio-portfolio-entry' data-href='{!!guard_url('portfolio/portfolio/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>