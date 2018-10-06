            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('portfolio::portfolio.label.title'))
                       -> placeholder(trans('portfolio::portfolio.placeholder.title'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('subtitle')
                       -> label(trans('portfolio::portfolio.label.subtitle'))
                       -> placeholder(trans('portfolio::portfolio.placeholder.subtitle'))!!}
                </div>
              <div class='col-md-4 col-sm-6'>
                       {!! Form::select('category_id')
                       -> options(Portfolio::categories())
                       -> label(trans('portfolio::portfolio.label.category_id'))
                       -> placeholder(trans('portfolio::portfolio.placeholder.category_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('url')
                       -> label(trans('portfolio::portfolio.label.url'))
                       -> placeholder(trans('portfolio::portfolio.placeholder.url'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::select('published')
                   -> options(trans('portfolio::portfolio.options.published'))
                   -> label(trans('portfolio::portfolio.label.published'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('status')
                    -> options(trans('portfolio::portfolio.options.status'))
                    -> label(trans('portfolio::portfolio.label.status'))
                    -> placeholder(trans('portfolio::portfolio.placeholder.status'))!!}
               </div> 
               <div class='col-md-12 col-sm-12'>
                       {!! Form::textarea('details')
                       -> label(trans('portfolio::portfolio.label.details'))
                       -> placeholder(trans('portfolio::portfolio.placeholder.details'))
                       -> rows(5)!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('portfolio::portfolio.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $portfolio->files('image')
                            ->url($portfolio->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $portfolio->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('portfolio::portfolio.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $portfolio->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($portfolio->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $portfolio->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
               
            </div>