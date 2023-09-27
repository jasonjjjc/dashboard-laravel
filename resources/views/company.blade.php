<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col p-10">
        <article class="flex flex-col border-b border-gray-100">
            <?= $content ?>
        </article>
        <a href="/" class="mt-4 py-2 px-6 bg-green-500 text-white w-fit rounded-md">Back</a>
    </div>
</body>

</html>