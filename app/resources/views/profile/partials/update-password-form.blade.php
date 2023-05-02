
<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
	<h3 class="mb-4">Password Settings</h3>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
	<div class="row">

		<div class="col-md-6">
			<div class="form-group">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
                <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" />


			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />

			</div>
		</div>
	</div>
	<div>
		
	</div>
       <div>
        <button class="btn " type="submit"><span>Update</span></button>
		
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class=""
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</div>
