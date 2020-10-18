<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('vendor/contact/css/style.css') }}">
</head>
<body>


<form action="{{ route('garstea.contact.send') }}" method="POST">
    <h3 id="logo">Contact Us</h3>
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
    <input type="submit" value="Submit">
</form>


</body>
</html>
