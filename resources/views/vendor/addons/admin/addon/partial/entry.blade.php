            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('admin_user_login')
                    -> options(trans('addons::addon.options.admin_user_login'))
                    -> label(trans('addons::addon.label.admin_user_login'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.admin_user_login'))!!}
               </div>

               <div class='col-md-4 col-sm-6'>
                    {!! Form::select('add_bank')
                    -> options(trans('addons::addon.options.add_bank'))
                    -> label(trans('addons::addon.label.add_bank'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.add_bank'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('hide_compound_rate')
                    -> options(trans('addons::addon.options.hide_compound_rate'))
                    -> label(trans('addons::addon.label.hide_compound_rate'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.hide_compound_rate'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('provide_google_authentication')
                    -> options(trans('addons::addon.options.provide_google_authentication'))
                    -> label(trans('addons::addon.label.provide_google_authentication'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.provide_google_authentication'))!!}
               </div>
               
               <div class='col-md-4 col-sm-6'>
                    {!! Form::select('show_admin_menu')
                    -> options(trans('addons::addon.options.show_admin_menu'))
                    -> label(trans('addons::addon.label.show_admin_menu'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.show_admin_menu'))!!}
               </div> 
               <div class='col-md-4 col-sm-6'>
                    {!! Form::select('manual_blockchain')
                    -> options(trans('addons::addon.options.manual_blockchain'))
                    -> label(trans('addons::addon.label.manual_blockchain'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.manual_blockchain'))!!}
               </div>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('blockmove')
                    -> options(trans('addons::addon.options.blockmove'))
                    -> label(trans('addons::addon.label.blockmove'))
                    -> required()
                    -> placeholder(trans('addons::addon.placeholder.blockmove'))!!}
               </div>
            </div>