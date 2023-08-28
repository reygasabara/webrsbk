<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    {{-- Alert Gagal Login --}}
    @if(session()->has('loginError'))
        <div class="alert alert-danger text-center" role="alert">
            {{ session('loginError') }}
        </div>
    @endif

    {{-- Form Login --}}
    <form action="/login" method="post">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="username" autocomplete="off" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password" autocomplete="off" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>