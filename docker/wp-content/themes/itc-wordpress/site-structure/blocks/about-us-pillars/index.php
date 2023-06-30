<?php
$title_pillars = get_field('au_pillars_title');
$content_pillars = get_field('au_pillars_content');
$au_pillars_list = get_field('au_pillars_list');
$au_pillars_link_button = get_field('au_pillars_link_button');
?>
<section>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><?= $title_pillars ?></h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?= $content_pillars ?></p>
        </div>
        <div class="flex flex-wrap -m-4 text-center">            
            <?php
            foreach ($au_pillars_list as $key => $item) :
                $path = "./wp-content/themes/itc-wordpress/assets/svg/$key.html";
                $svg = file_get_contents($path);
            ?>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="bg-gray px-4 py-4 rounded-3xl">
                        <div class="border-gray-200 px-4 py-6 rounded-lg">
                            <div class="my-8"> <?= $svg ?></div>
                            <p class="title-font text-gray-900 font-medium"><?= $item["au_pillars_list_title"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="flex flex-col text-center w-full mt-20">
            <a href="<?=$au_pillars_link_button?>" class="btn-more" alt="ITC">Learn More</a>
        </div>
    </div>
</section>