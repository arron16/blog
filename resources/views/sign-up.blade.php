<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
</head>
<body>
    <form method="POST" action="/sign-up">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="password_confirmation">
        @error('password_confirmation')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>

        <button type="submit">
            submit
        </button>
    </form>
</body>
</html>