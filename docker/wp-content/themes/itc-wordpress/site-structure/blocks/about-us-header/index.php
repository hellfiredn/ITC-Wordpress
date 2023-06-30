<?php
$title = get_field('au_header_title');
$content = get_field('au_header_content');
?>
<section>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><?=$title?></h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?=$content?></p>
        </div>
    </div>
</section>