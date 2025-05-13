@if(config('app.read_only'))
    <div class="alert alert-info read-only">
        The application is currently in read-only mode. All requests other than GET are disabled.
    </div>
@endif