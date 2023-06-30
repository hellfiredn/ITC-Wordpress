import './main.scss';

'use strict';
var $ = jQuery;
$(document).ready(function() {
    var slider_leader = $('.slider-leader');
    if (slider_leader.length) {
        slider_leader.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true
        });
    }
});