
<div class="row">
{!! Form::hidden('upload_folder')!!}
           <div class='col-md-4 col-sm-6'>
                   {!! Form::text('title')
                   -> required()
                   -> label(trans('portfolio::portfolio.label.title'))
                   -> placeholder(trans('portfolio::portfolio.placeholder.title'))!!}
           </div>

            <div class='col-md-4 col-sm-6'>
                   {!! Form::select('category_id')
                   -> required()
                   -> options(Portfolio::getCategory())
                   -> label(trans('portfolio::portfolio.label.category_id'))
                   -> placeholder(trans('portfolio::portfolio.placeholder.category_id'))!!}
            </div>
            <div class='col-md-4 col-sm-6'>
                   {!! Form::select('status')
                   -> options(trans('portfolio::portfolio.options.status'))
                   -> label(trans('portfolio::portfolio.label.status'))
                   -> placeholder(trans('portfolio::portfolio.placeholder.status'))!!}
            </div>

            <div class='col-md-12 col-sm-12'>
                   {!! Form::textArea('details')
                   -> addClass('html-editor')
                   -> label(trans('portfolio::portfolio.label.details'))
                   -> placeholder(trans('portfolio::portfolio.placeholder.details'))!!}
            </div>

            <div class='col-md-12 col-sm-12'>
            Image:
                {!!@$portfolio->fileUpload('image')!!}
                {!!@$portfolio->fileEdit('image')!!}
            </div>

            <div class='col-md-12 col-sm-12'>
            Images:
                {!!@$portfolio->fileUpload('images')!!}
                {!!@$portfolio->fileEdit('images')!!}
            </div>


</div>
