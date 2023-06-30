<?php
$au_achievement_position_image = get_field('au_achievement_position_image');
$au_achievement_subtitle = get_field('au_achievement_subtitle');
$au_achievement_title = get_field('au_achievement_title');
$au_achievement_content = get_field('au_achievement_content');
$au_achievement_image = get_field('au_achievement_image');
$au_achievement_bacground = get_field('au_achievement_bacground');
if($au_achievement_position_image == "Left"){
    $posotion_left = "md:w-2/5";
    $html_left = '<img src="./wp-content/themes/itc-wordpress/assets/images/achievement-2.webp" class="m-auto w-3/5" alt="ITC">';

    $posotion_right = "md:w-3/5";    
    $html_right = '<div class="">'.$au_achievement_subtitle.'</div>';
    $html_right .= '<h2 class="sm:text-2xl text-2xl font-medium title-font mb-6 text-gray-900">'.$au_achievement_title.'</h2>';
    $html_right .= '<div class="">'.$au_achievement_content.'</div>';
}else{
    $posotion_left = "md:w-3/5";    
    $html_left = '<div class="">'.$au_achievement_subtitle.'</div>';
    $html_left .= '<h2 class="sm:text-2xl text-2xl font-medium title-font mb-6 text-gray-900">'.$au_achievement_title.'</h2>';
    $html_left .= '<div class="">'.$au_achievement_content.'</div>';

    $posotion_right = "md:w-2/5";
    $html_right = '<img src="./wp-content/themes/itc-wordpress/assets/images/achievement-1.webp" class="m-auto w-3/5 alt="ITC">';
}
?>
<section class="about-us-achievement" style="background-color: <?= $au_achievement_bacground ?>;">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="p-4 <?=$posotion_left?> sm:w-1/2 w-full <?= $au_achievement_position_image == "Left" ? 'flex align-center' : '';?>">
                <?=$html_left?>                
            </div>
            <div class="p-4 <?=$posotion_right?> sm:w-1/2 w-full <?= $au_achievement_position_image != "Left" ? 'flex align-center' : '';?>">
                <?=$html_right?>
            </div>
        </div>
    </div>
</section>