            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('user_id')
                       -> label(trans('transactions::history.label.user_id'))
                       -> required()
                       -> placeholder(trans('transactions::history.placeholder.user_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('amount')
                       -> label(trans('transactions::history.label.amount'))
                       -> placeholder(trans('transactions::history.placeholder.amount'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('transaction_type')
                    -> options(trans('transactions::history.options.transaction_type'))
                    -> label(trans('transactions::history.label.transaction_type'))
                    -> placeholder(trans('transactions::history.placeholder.transaction_type'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('description')
                    -> label(trans('transactions::history.label.description'))
                    -> placeholder(trans('transactions::history.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_thro')
                       -> label(trans('transactions::history.label.payment_thro'))
                       -> placeholder(trans('transactions::history.placeholder.payment_thro'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('transaction_id')
                       -> label(trans('transactions::history.label.transaction_id'))
                       -> placeholder(trans('transactions::history.placeholder.transaction_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('status')
                       -> label(trans('transactions::history.label.status'))
                       -> required()
                       -> placeholder(trans('transactions::history.placeholder.status'))!!}
                </div>
            </div>