<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col p-6">
        <article class="flex flex-col border border-gray-100">
            <h1 class="py-3 px-6 bg-green-400 text-white rounded-tl-sm rounded-tr-sm">
                <?= $content->title ?>
            </h1>
            <p class="p-6"><?= $content->body ?></p>
        </article>
        <a href="/" class="mt-6 py-2 px-6 bg-green-500 text-white w-fit rounded-md">Back</a>
    </div>
</body>

</html>