<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
     <style>

     </style>

</head>
<body class="antialiased">
<div class="container">
    <h1 class='name'> From Sigup </h1>
    <form action="" method="post">
        @csrf
        <div class="information">
            <label for="username"> Username </label><br>
            <input type="text" id="username" class="form-control" placeholder="Enter username" name="username">
        </div>
        <div class="information">
            <label for="password"> Password </label><br>
            <input type="password" id="password" class="form-control" placeholder="Enter password" name="password">
        </div>
        <div >
            <label for="confirm_password"> Retype password </label><br>
            <input type="password" id="confirm_password" class="form-control" placeholder="Enter retype password " name="retype">
        </div>
        <div >
            <label for="email">Email</label><br>
            <input type="email" id="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div>
            <label for="address">Address</label><br>
            <input type="text" id="address" class="form-control" placeholder="Enter address" name="address">
        </div>
        <div >
            <label for="phonenumber"> Cellphone </label><br>
            <input type="number" id="phonenumber" class="form-control" placeholder="Enter cellphone" name="tel">
        </div>
        <button type="submit" class="button" name='signup'>Signup</button>
    </form>
</div>
</body>
</html>

