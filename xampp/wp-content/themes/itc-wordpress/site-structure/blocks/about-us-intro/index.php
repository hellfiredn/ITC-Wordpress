<?php
$title_intro = get_field('au_intro_title');
$content_intro = get_field('au_intro_content');
$bg_intro = get_field('au_intro_bg');
?>
<section class="about-us-intro" style="background-color: <?=$bg_intro?>;">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <p class="lg:w-2/3 mx-auto leading-relaxed text-white"><?=$content_intro?></p>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white-900"><?=$title_intro?>
        </div>
    </div>
</section>