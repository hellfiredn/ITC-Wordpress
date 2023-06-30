<?php
$au_core_title = get_field('au_core_title');
$au_core_description = get_field('au_core_description');
$au_core_value = get_field('au_core_value');
// echo "<pre>";
// var_dump($au_core_value);
// echo "</pre>";
?>
<section class="bg-gray about-us-core">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><?= $au_core_title ?></h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?= $au_core_description ?></p>
        </div>

        <?php
        foreach ($au_core_value as $key => $item) :
            $img = "./wp-content/themes/itc-wordpress/assets/images/$key.webp";
        ?>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/5 w-full"></div>
                <div class="p-4 md:w-3/5 w-full mb-3">
                    <div class="bg-white px-4 py-6 rounded-2xl md:flex">
                        <div class=" md:w-1/4 w-full px-5 py-5"> <img src="<?= $img ?>"></div>
                        <div class="about-us-core_item md:w-3/4 w-full">
                            <h2 class="sm:text-2xl text-2xl font-medium title-font mb-5 text-gray-900"><?= $item["au_core_value_title"] ?></h2>
                            <?= $item["au_core_value_content"] ?>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/5 w-full"></div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>