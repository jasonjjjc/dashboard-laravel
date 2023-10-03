<header>
    <div class="flex justify-between items-center border-b border-red-400 p-2">
        <h1 class="flex">
            <a href="<?php echo $_SERVER['REQUEST_URI'] != '/' ? '/' : 'javascript:void(0)'; ?>" class="rounded-md py-1 px-3 cursor-pointer hover:text-red-400">LinkedUp</a>
        </h1>
        <ul class="flex flex-1 justify-end gap-3">
            <li class="rounded-md py-1 px-3 cursor-pointer hover:text-red-400">Help</li>
            <li class="rounded-md py-1 px-3 cursor-pointer hover:text-red-400">Logout</li>
        </ul>
    </div>
</header>