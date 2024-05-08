<form method="POST" action="{{ route('register.store') }}">
@csrf

    <!-- Login -->
    <div>
        <label for="login">{{ __('Login') }}</label>
        <input id="login" type="text" name="login" value="{{ old('login') }}" required autofocus autocomplete="login">
        @error('login')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Prénom -->
    <div>
        <label for="firstname">{{ __('Prénom') }}</label>
        <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname">
        @error('firstname')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Nom -->
    <div>
        <label for="lastname">{{ __('Nom') }}</label>
        <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
        @error('lastname')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label for="email">{{ __('Email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Mot de passe -->
    <div>
        <label for="password">{{ __('Mot de passe') }}</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Confirmation du mot de passe -->
    <div>
        <label for="password_confirmation">{{ __('Confirmation du mot de passe') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    <!-- Langue -->
    <div>
        <label for="langue">{{ __('Langue') }}</label>
        <select name="langue" id="langue">
            <option value="fr">Français</option>
            <option value="en">English</option>
            <!-- Ajoutez d'autres options de langue au besoin -->
        </select>
    </div>

    <div>
        <button type="submit">{{ __('S\'inscrire') }}</button>
    </div>
</form>
