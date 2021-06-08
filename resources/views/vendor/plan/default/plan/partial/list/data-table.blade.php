            <table class="table" id="main-table" data-url="{!!guard_url('plan/plan?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="name">{!! trans('plan::plan.label.name')!!}</th>
                    <th data-field="min_investment">{!! trans('plan::plan.label.min_investment')!!}</th>
                    <th data-field="max_investment">{!! trans('plan::plan.label.max_investment')!!}</th>
                    <th data-field="interest_after_matured">{!! trans('plan::plan.label.interest_after_matured')!!}</th>
                    <th data-field="release_deposit">{!! trans('plan::plan.label.release_deposit')!!}</th>
                    <th data-field="profit">{!! trans('plan::plan.label.profit')!!}</th>
                    <th data-field="interest_period_type">{!! trans('plan::plan.label.interest_period_type')!!}</th>
                    <th data-field="investment_duration">{!! trans('plan::plan.label.investment_duration')!!}</th>
                    <th data-field="investment_duration_type">{!! trans('plan::plan.label.investment_duration_type')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>
