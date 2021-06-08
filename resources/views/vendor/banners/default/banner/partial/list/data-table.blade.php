            <table class="table" id="main-table" data-url="{!!guard_url('banners/banner?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="image">{!! trans('banners::banner.label.image')!!}</th>
                    <th data-field="status">{!! trans('banners::banner.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">app.actions</th>
                    </tr>
                </thead>
            </table>