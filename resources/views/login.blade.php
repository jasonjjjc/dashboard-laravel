<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen px-4 flex flex-col justify-center items-center gap-6">
        <h1 class="">Dashboard Login</h1>
        <!--  inputs for login form -->
        <form action="/login" method="POST" class="bg-gray-100 p-10 gap-10 rounded-sm flex flex-col">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" class="py-1 px-3 rounded-sm mt-2" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" class="py-1 px-3 rounded-sm mt-2" />
            </div>
            <button type="submit" class="mt-6 bg-gray-200 w-fit py-2 px-8 self-center rounded-md">Login</button>
        </form>
    </div>
</body>

</html>