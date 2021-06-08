            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('user_id')
                    -> fromQuery(\Litecms\Deposit\Models\Deposit::all(), 'name', 'id')
                    -> label(trans('deposit::deposit.label.user_id'))
                    -> required()
                    -> placeholder(trans('deposit::deposit.placeholder.user_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('plan_id')
                    -> fromQuery(\Litecms\Deposit\Models\Deposit::all(), 'name', 'id')
                    -> label(trans('deposit::deposit.label.plan_id'))
                    -> required()
                    -> placeholder(trans('deposit::deposit.placeholder.plan_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('amount')
                       -> label(trans('deposit::deposit.label.amount'))
                       -> required()
                       -> placeholder(trans('deposit::deposit.placeholder.amount'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('transaction_id')
                       -> label(trans('deposit::deposit.label.transaction_id'))
                       -> placeholder(trans('deposit::deposit.placeholder.transaction_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='investment_date' class='control-label'>{!!trans('deposit::deposit.label.investment_date')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('investment_date')
                        -> placeholder(trans('deposit::deposit.placeholder.investment_date'))
                        -> required()
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='maturity_date' class='control-label'>{!!trans('deposit::deposit.label.maturity_date')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('maturity_date')
                        -> placeholder(trans('deposit::deposit.placeholder.maturity_date'))
                        -> required()
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('status')
                    -> options(trans('deposit::deposit.options.status'))
                    -> label(trans('deposit::deposit.label.status'))
                    -> required()
                    -> placeholder(trans('deposit::deposit.placeholder.status'))!!}
               </div>
            </div>