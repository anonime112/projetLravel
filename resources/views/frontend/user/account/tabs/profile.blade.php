<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>@lang('labels.frontend.user.profile.avatar')</th>

        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.name')</th>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.email')</th>
            <td>{{ auth()->user()->email }}</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.created_at')</th>
            <td>{{auth()->user()->created_at->timezone(auth()->user()->timezone ?? config('app.timezone'))->format('F jS, Y') }} ({{ auth()->user()->created_at->diffForHumans() }})</td>
        </tr>
        <tr>
            <th>@lang('labels.frontend.user.profile.last_updated')</th>
            <td>{{ auth()->user()->created_at->timezone(auth()->user()->timezone ?? config('app.timezone'))->format('F jS, Y')  }} ({{ auth()->user()->updated_at->diffForHumans() }})</td>
        </tr>
    </table>
</div>
