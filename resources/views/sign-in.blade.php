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
    <form method="POST" action="/sign-in">
        @csrf

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

        <br>

        <button type="submit">
            sign-in
        </button>
    </form>
</body>
</html>