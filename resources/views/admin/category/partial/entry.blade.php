            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('portfolio::category.label.name'))
                       -> placeholder(trans('portfolio::category.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('status')
                    -> options(trans('portfolio::category.options.status'))
                    -> label(trans('portfolio::category.label.status'))
                    -> placeholder(trans('portfolio::category.placeholder.status'))!!}
               </div>
            </div>