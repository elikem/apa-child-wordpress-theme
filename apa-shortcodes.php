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
        'Easy' => ['Easy / moderate.', 'Easy / moderate.', 'fa fa-circle-o'],
        'Moderate' => ['Moderate / strenuous.', 'Moderate / strenuous. More physically challenging.', 'fa fa-adjust'],
        'Strenuous' => ['Very strenuous.', 'Very strenuous. Tough, and physically challenging.', 'fa fa-circle'],
        'Adventurous' => ['For the adventurous!', 'For the adventurous! Could include rustic/basic accommodations in remote, rural areas (sometimes with no running water)', 'fa fa-tree'],
        'Family' => ['Suitable for families.', 'Suitable for families with children ages 5 and up.', 'fa fa-users'],
        'High Elevation' => ['Elevation over 10,500 ft.', 'This tour visits elevations in excess of 10,500 ft.', 'fa fa-caret-square-o-up'],
        'Special Festival' => ['Special local festival', 'This tour includes a special local festival.', 'fa fa-star']
    ];

    foreach ($grades as $index => $grade) {
        $grade_builder = $grade_builder . "<span class='tippy' data-tippy-theme='apa' title='{$grading_legend[$grade][1]}'><i class='{$grading_legend[$grade][2]}'></i> {$grading_legend[$grade][0]}</span>";
    }

    echo "<div class='trip-grading'><p id='heading'><strong>Trip Grading</strong></p><p id='grading'>" . $grade_builder . "</p></div>";
}

add_shortcode('apa', 'apa_grading');
?>