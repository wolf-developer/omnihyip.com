            <table class="table" id="main-table" data-url="{!!guard_url('faq/faq?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="question">{!! trans('faq::faq.label.question')!!}</th>
                    <th data-field="answer">{!! trans('faq::faq.label.answer')!!}</th>
                    <th data-field="created_at">{!! trans('faq::faq.label.created_at')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>