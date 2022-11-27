<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body class="bg-[url('https://t3.ftcdn.net/jpg/03/35/61/78/360_F_335617818_D6XfmNhtCyDRTOvK9GXFkNYs3nyLKvfO.jpg')] bg-cover ">
 
    <div class="float-right flex mt-3 font-medium space-x-7 mr-6 text-4xl">
        <h1 class=""><a href="{{ route('login') }}" class="">Login</a></h1>
        <h1><a href="{{ route('register') }}" class="">Register</a></h1>
        <h1><a href="#">About</a></h1>
        <h1><a href="#">Contact Us</a></h1>
    </div>

    <div class="text-center mt-60"><h1 class="text-7xl text-center">Web-based Grocery Shopping System</h1></div>
    
</body>
</html>

