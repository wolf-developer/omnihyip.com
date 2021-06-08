            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('plan::plan.label.name'))
                       -> required()
                       -> placeholder(trans('plan::plan.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('min_investment')
                       -> label(trans('plan::plan.label.min_investment'))
                       -> required()
                       -> placeholder(trans('plan::plan.placeholder.min_investment'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('max_investment')
                       -> label(trans('plan::plan.label.max_investment'))
                       -> required()
                       -> placeholder(trans('plan::plan.placeholder.max_investment'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_checkboxes('interest_after_matured[]')
                   -> checkboxes(trans('plan::plan.options.interest_after_matured'))
                   -> label(trans('plan::plan.label.interest_after_matured'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_checkboxes('release_deposit[]')
                   -> checkboxes(trans('plan::plan.options.release_deposit'))
                   -> label(trans('plan::plan.label.release_deposit'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('profit')
                       -> label(trans('plan::plan.label.profit'))
                       -> required()
                       -> placeholder(trans('plan::plan.placeholder.profit'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('interest_period_type')
                    -> options(trans('plan::plan.options.interest_period_type'))
                    -> label(trans('plan::plan.label.interest_period_type'))
                    -> placeholder(trans('plan::plan.placeholder.interest_period_type'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('investment_duration')
                       -> label(trans('plan::plan.label.investment_duration'))
                       -> required()
                       -> placeholder(trans('plan::plan.placeholder.investment_duration'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('investment_duration_type')
                    -> options(trans('plan::plan.options.investment_duration_type'))
                    -> label(trans('plan::plan.label.investment_duration_type'))
                    -> required()
                    -> placeholder(trans('plan::plan.placeholder.investment_duration_type'))!!}
               </div>
            </div>