<!-- resources/views/auth/change-password.blade.php -->
<header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>


<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <label for="current_password">Current Password</label>
    <input id="current_password" type="password" name="current_password">
    @error('current_password')
        <span>{{ $message }}</span>
    @enderror

    <label for="password">New Password</label>
    <input id="password" type="password" name="password">
    @error('password')
        <span>{{ $message }}</span>
    @enderror

    <label for="password_confirmation">Confirm Password</label>
    <input id="password_confirmation" type="password" name="password_confirmation">

    <button type="submit">Change Password</button>
</form>