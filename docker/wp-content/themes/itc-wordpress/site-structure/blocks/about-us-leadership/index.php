<?php
$au_leader_title = get_field('au_leader_title');
$au_leader_list = get_field('au_leader_list');
?>
<section class="about-us-leader">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><?= $au_leader_title ?></h1>
        </div>

        <div class="slider-leader">
            <?php
            foreach ($au_leader_list as $key => $item) :
                $img = "./wp-content/themes/itc-wordpress/assets/images/Yoan.webp";
            ?>
                <div class="flex flex-wrap">
                    <div class="p-4 w-full mb-3">
                        <div class="md:px-10 md:py-6 md:flex">
                            <div class=" md:w-4/12 w-full px-8 py-5"> <img src="<?= $img ?>"></div>
                            <div class="about-us-core_item md:w-8/12 w-full px-8 py-5">
                                <h2 class="sm:text-3xl text-2xl font-normal title-font mb-2"><?= $item["au_leader_list_name"] ?></h2>
                                <h4 class="sm:text-xl text-xl font-normal title-font mb-3"><?= $item["au_leader_list_position"] ?></h4>
                                <?= $item["au_leader_list_description"] ?>
                                <?php
                                if (count($item["au_leader_list_profile"]) > 0) : ?>
                                    <ul class="slides">
                                        <?php foreach ($item["au_leader_list_profile"] as $key => $item) : ?>
                                            <li><span><?= $item['au_leader_list_profile_title'] ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>