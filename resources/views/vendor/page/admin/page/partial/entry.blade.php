            <div class="tab-pane disabled active row" id="details">

                <div class="col-md-12 col-lg-12">
                {!! Form::text('name')
                -> label(trans(trans('page::page.label.name')))
                -> placeholder(trans(trans('page::page.placeholder.name')))
                ->required()
                !!}

                {!! Form::textarea('content')
                -> label(trans('page::page.label.content'))
                -> value(e($page['content']))
                -> dataUpload(url($page->getUploadURL('content')))
                -> addClass('html-editor')
                -> placeholder(trans('page::page.placeholder.content'))
                -> required()
                !!}
                </div>
            </div>
            <div class="tab-pane disabled row" id="metatags">
                <div class="col-md-6 col-lg-6 cpp tags">
                    {!! Form::text('title')
                    -> label(trans('page::page.label.title'))
                    -> placeholder(trans('page::page.placeholder.title'))
                     -> required()
                    !!}
                    {!! Form::text('heading')
                    -> label(trans('page::page.label.heading'))
                    -> placeholder(trans('page::page.placeholder.heading'))
                    !!}
                    {!! Form::text('sub_heading')
                    -> label(trans('page::page.label.sub_heading'))
                    -> placeholder(trans('page::page.placeholder.sub_heading'))
                    !!}
                    {!! Form::text('meta_title')
                    -> label(trans('page::page.label.meta_title'))
                    -> placeholder(trans('page::page.placeholder.meta_title'))
                    !!}
                </div>

                <div class="col-md-6 col-lg-6 cpp tags">
                    {!! Form::text('meta_keyword')
                    -> label(trans('page::page.label.meta_keyword'))
                    -> placeholder(trans('page::page.placeholder.meta_keyword'))
                    !!}
                    {!! Form::textarea('meta_description')
                    -> label(trans('page::page.label.meta_description'))
                    -> rows(3)
                    -> placeholder(trans('page::page.placeholder.meta_description'))
                    !!}
                    {!! Form::textarea('abstract')
                    -> label(trans('page::page.label.abstract'))
                    -> rows(3)
                    -> placeholder(trans('page::page.placeholder.abstract'))
                    !!}
                </div>
            </div>
            <div class="tab-pane disabled row" id="settings">
                <div class="col-md-6 cpp tags">
                    {!! Form::range('order')
                    -> label(trans('page::page.label.order'))
                    -> placeholder(trans('page::page.placeholder.order'))
                    !!}

                    {!! Form::text('slug')
                    -> label(trans('page::page.label.slug'))
                    -> append('.html')
                    -> placeholder(trans('page::page.placeholder.slug'))
                    -> required()
                    !!}

                    {!! Form::select('view')
                    -> options(trans('page::page.options.view'))
                    -> label(trans('page::page.label.view'))
                    -> placeholder(trans('page::page.placeholder.view'))
                    !!}
                </div>
                <div class='col-md-6'>
                    {!! Form::hidden('compile')
                    -> forceValue('0')
                    !!}

                    {!! Form::select('compile')
                    -> options(trans('page::page.options.compile'))
                    -> label(trans('page::page.label.compile'))
                    -> placeholder(trans('page::page.placeholder.compile'))
                    !!}

                    {!! Form::select('category')
                    -> options(trans('page::page.options.category'))
                    -> label(trans('page::page.label.category_id'))
                    -> placeholder(trans('page::page.placeholder.category_id'))
                    !!}

                    {!! Form::select('status')
                    -> options(trans('page::page.options.status'))
                    -> label(trans('page::page.label.status'))
                    -> placeholder(trans('page::page.placeholder.status'))
                    -> required()
                    !!}
                </div>
            </div>
            @if ($mode == 'create')
            <div class="tab-pane row" id="imagesc">
                <div class="form-group">
                    <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                        {{trans('page::page.label.images') }}
                    </label>
                    <div class='col-lg-12'>
                        {!! $page->files('images')
                        ->url($page->getUploadUrl('images'))
                        ->uploader()!!}
                    </div>                            
                </div>
            </div>
            @elseif ($mode == 'edit')
            <div class="tab-pane row" id="imagesc">
                <div class="form-group">
                    <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                        {{trans('page::page.label.images') }}
                    </label>
                    <div class='col-lg-12'>
                        {!! $page->files('images')
                        ->url($page->getUploadUrl('images'))
                        ->uploader()!!}
                    </div>

                </div>
            </div>
            @elseif ($mode == 'show')
            <div class="tab-pane disabled row" id="imagesc">

                <div class='col-md-12'>
                    {!! $page->files('images') !!}
                </div>
            </div>
            @endif
<script>
$(document).ready(function(){

    $('.cpp').on("cut copy paste",function(e) {
        e.preventDefault();
        alert("You cannot copy and paste into this text field.");
    });

    $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
        e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
    $('#name').on("cut copy paste",function(e) {
      e.preventDefault();
      alert("You cannot copy and paste into this text field.");
   });
});
</script>
