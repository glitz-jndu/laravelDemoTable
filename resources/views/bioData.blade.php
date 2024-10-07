<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bio data</title>
</head>
<body>
    <h1>Bio data</h1>
    <form action="/sendBio" method="POST">
        @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="phone">Phone number</label>
    <input type="tel" id="phone" name="phone">

    {{-- <label for="image">image</label>
    <input type="file" id="image" name="image"> --}}

    <button type="submit">Submit</button>
    </form>


</body>
</html>
