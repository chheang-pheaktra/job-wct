<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
<h1>Reset Password</h1>
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $email) }}" required>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
    <button type="submit">Reset Password</button>
</form>
</body>
</html>

