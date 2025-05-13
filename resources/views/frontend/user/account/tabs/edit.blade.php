<form method="POST" action="{{ route('user.profile.update') }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <!-- Avatar -->
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="avatar">{{ __('validation.attributes.frontend.avatar') }}</label>
                <div>
                    <!-- <input type="radio" name="avatar_type" value="gravatar" {{ $logged_in_user->avatar_type === 'gravatar' ? 'checked' : '' }}> Gravatar
                    <input type="radio" name="avatar_type" value="storage" {{ $logged_in_user->avatar_type === 'storage' ? 'checked' : '' }}> Upload -->

                    @foreach($logged_in_user->providers as $provider)
                        @if(strlen($provider->avatar))
                            <!-- <input type="radio" name="avatar_type" value="{{ $provider->provider }}" {{ $logged_in_user->avatar_type === $provider->provider ? 'checked' : '' }}> {{ ucfirst($provider->provider) }} -->
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="form-group" id="avatar_location" style="display: none;">
                <input type="file" name="avatar_location" class="form-control-file">
            </div>
        </div>
    </div>

    <!-- First Name -->
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="first_name">{{ __('validation.attributes.frontend.first_name') }}</label>
                <input type="text" name="first_name" class="form-control" placeholder="{{ __('validation.attributes.frontend.first_name') }}" value="{{ old('first_name', $logged_in_user->first_name) }}" maxlength="191" required autofocus>
            </div>
        </div>
    </div>

    <!-- Last Name -->
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="last_name">{{ __('validation.attributes.frontend.last_name') }}</label>
                <input type="text" name="last_name" class="form-control" placeholder="{{ __('validation.attributes.frontend.last_name') }}" value="{{ old('last_name', $logged_in_user->last_name) }}" maxlength="191" required>
            </div>
        </div>
    </div>

    @if ($logged_in_user->canChangeEmail())
        <!-- Email -->
        <div class="row">
            <div class="col">
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i> {{ __('strings.frontend.user.change_email_notice') }}
                </div>

                <div class="form-group">
                    <label for="email">{{ __('validation.attributes.frontend.email') }}</label>
                    <input type="email" name="email" class="form-control" placeholder="{{ __('validation.attributes.frontend.email') }}" value="{{ old('email', $logged_in_user->email) }}" maxlength="191" required>
                </div>
            </div>
        </div>
    @endif

    <!-- Submit -->
    <div class="row">
        <div class="col">
            <div class="form-group mb-0 clearfix">
                <button type="submit" class="btn btn-primary">
                    {{ __('labels.general.buttons.update') }}
                </button>
            </div>
        </div>
    </div>
</form>
@push('after-scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const avatarLocation = document.getElementById("avatar_location");
            const avatarTypeInputs = document.querySelectorAll('input[name=avatar_type]');

            function toggleAvatarUpload() {
                const selected = document.querySelector('input[name=avatar_type]:checked');
                if (selected && selected.value === 'storage') {
                    avatarLocation.style.display = 'block';
                } else {
                    avatarLocation.style.display = 'none';
                }
            }

            avatarTypeInputs.forEach(input => {
                input.addEventListener('change', toggleAvatarUpload);
            });

            toggleAvatarUpload(); // initial state
        });
    </script>
@endpush
