<?php
/*
* Plugin Name: APA Shortcodes
* Description: Display custom content for Asian Pacific Adventures. REQURIEMENTS: BETTER FONT AWESOME - https://wordpress.org/plugins/better-font-awesome/. Examples: [apa trip-grading="Easy, Moderate, Strenuous, Adventurous, Family, High Elevation, Special Festival"]
* Version: 1.1
* Author: Elikem Adadevoh
* Author URI: elikem@gmail.com
*/

/*
 * TRIP GRADING
 * This shortcode relies on the Better Font Awesome plugin glypicons.
 * Example: [apa trip-grading="Easy, Moderate, Strenuous, Adventurous, Family, High Elevation, Special Festival"]
 * REQURIEMENTS: Better Font Awesome - https://wordpress.org/plugins/better-font-awesome/
*/

function apa_grading ($attributes) {
    $grades = $attributes['trip-grading'];

    if ($attributes['trip-grading']) {
        return trip_grading($grades);
    }

}

function trip_grading ($grades) {
    $grades = explode(',', $grades);
    $grades = array_map('trim', $grades);
    $grade_builder = '';

    $grading_legend = [
        'Easy' => 'fa fa-circle-o',
        'Moderate' => 'fa fa-adjust',
        'Strenuous' => 'fa fa-circle',
        'Adventurous' => 'fa fa-tree',
        'Family' => 'fa fa-users',
        'High Elevation' => 'fa fa-caret-square-o-up',
        'Special Festival' => 'fa fa-star'
    ];

    foreach ($grades as $index => $grade) {
        $grade_builder = $grade_builder . "<span><i class='{$grading_legend[$grade]}'></i> {$grade}</span>";
    }

    echo "<div class='trip-grading'><p id='heading'><strong>Trip Grading</strong></p><p id='grading'>" . $grade_builder . "</p></div>";
}

add_shortcode('apa', 'apa_grading');
?>