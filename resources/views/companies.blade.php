<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="p-6 flex flex-col gap-6">
        <?php foreach ($companies as $company) : ?>
            <div class="flex flex-col border border-gray-100 rounded-sm">
                <h1 class="py-3 px-6 bg-green-400 text-white rounded-tl-sm rounded-tr-sm">
                    <a href="/companies/<?= $company->slug ?>"><?= $company->title ?></a>
                </h1>
                <p class="p-6"><?= $company->excerpt ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>