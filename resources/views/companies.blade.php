<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="p-10 flex flex-col gap-6">
        <?php foreach ($companies as $company) : ?>
            <?= $company ?>
        <?php endforeach; ?>
        
    </div>
</body>

</html>