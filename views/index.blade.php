@extends('directory::layout')

@section('buttons')
    <div id="actions">
        <div class="btn-group">
            <a href="javascript:;" class="btn btn-success" onclick="location.reload();">
                {!! svg('tabler-refresh')->toHtml() !!}</i><span>@lang('directory::messages.refresh')</span>
            </a>
        </div>
    </div>
@endsection

@section('body')
    <div class="tab-page" id="tab_main">
        <h2 class="tab">
            @lang('directory::messages.documents_list')
        </h2>

        <script type="text/javascript">
            tpModule.addTabPage(document.getElementById('tab_main'));
        </script>
    </div>
@endsection

