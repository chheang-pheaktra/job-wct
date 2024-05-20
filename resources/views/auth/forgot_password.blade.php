<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
<h1>Forgot Password</h1>
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Send Password Reset Link</button>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
</form>
</body>
</html>

