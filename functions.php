<?php

// for single page --->>> //

function get_the_title()
{
    global $card;
    $cardTitles = [
        'card1' => 'Oxalis',
        'card2' => 'nonais',
        'card3' => 'porais',
        'card4' => 'loraiss',
        'card5' => 'alis',
        'card6' => 'Oxas',
    ];
    return $cardTitles[$card];
}

function get_image_url()
{
    global $card;
    $cardImageUrls = [
        'card1' => './assets/iamges/card1.png',
        'card2' => './assets/iamges/card2.png',
        'card3' => './assets/iamges/card3.png',
        'card4' => './assets/iamges/card4.png',
        'card5' => './assets/iamges/card5.png',
        'card6' => './assets/iamges/card6.png',
    ];
    return $cardImageUrls[$card];
}

function get_the_description()
{
    global $card;
    $cardDescription = [
        'card1' => 'A recognized leader in language immersion & early education, opening second school. education, 
                    opening second school. education, opening second school. A recognized leader in language immersion & early 
                    econd school. education, opening second school. A recognized leader in language immersion & early',
        'card2' => 'A recognized leader in language immersion & early education, opening second school. education, 
                    opening second school. education, opening second school. A recognized leader in language immersion',
        'card3' => 'A recognized leader . A recognized leader in language immersion & early A recognized leader in language immersion & early
                    A recognized leader in language immersion & early',
        'card4' => 'A recognized leader opening second school. A recognized leader in language immersion & early
                    education, opening second school. education, in language immersion & early education, opening second school. education, 
                    opening second school. education, opening second school. A recognized leader in',
        'card5' => 'A recognized leader in language immersion & early education, opening second school. education, 
                    opening second school. opening second school. A recognized leader in language immersion & early
                    A recognized leader in language immersion & early',
        'card6' => 'A recognized leader in language immersion & early education, opening second school. education, 
                    opening second school. education, opening second school. A recognized leader in language immersion & early',
    ];
    return $cardDescription[$card];
}

function get_card_titles()
{
    global $card;
    $cardHiddenTitles = [
        'card1' => ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        'card2' => ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        'card3' => ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        'card4' => ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        'card5' => ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        'card6' => ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
    ];
    return $cardHiddenTitles[$card];
}

function get_card_values()
{
    global $card;
    $cardHiddenValues = [
        'card1' => ['Revenue Sharing Note', ' 1.4x', '48 Months', '$100'],
        'card2' => ['Revenue', ' 1.5x', '64 Months', '$200'],
        'card3' => ['Revenue sharing', ' 1x', '12 Months', '$300'],
        'card4' => ['Revenue Type', ' 1.4x', '24 Months', '$500'],
        'card5' => ['Revenue', ' 1.3x', '64 Months', '$250'],
        'card6' => ['Revenue sharing', ' 1.8x', '12 Months', '$800'],
    ];
    return $cardHiddenValues[$card];
}

function get_card_rate()
{
    global $card;
    $cardRate = [
        'card1' => '<span>$594,920 </span>raised of $1,000,000',
        'card2' => '<span>$504,920 </span>raised of $1,000,000',
        'card3' => '<span>$604,920 </span>raised of $1,000,000',
        'card4' => '<span>$574,520 </span>raised of $1,000,000',
        'card5' => '<span>$584,920 </span>raised of $1,000,000',
        'card6' => '<span>$510,920 </span>raised of $1,000,000',
    ];
    return $cardRate[$card];
}

// for header --> //

$header_menu = [
    'list' => ['Investment Opportunities', 'How it works', 'About us'],
    'dropdown' => ['<i class="bx bx-chevron-down arrow_down"></i>', '<i class="bx bx-chevron-down arrow_down"></i>', ''],
];

function get_header_menu()
{
    global $header_menu;
    for ($i = 0; $i < sizeof($header_menu['list']); $i++) {
        switch ($header_menu) {
            case ($i == 0 || $i == 1):
                echo '<li>
                        <a class="link" href="#">' . $header_menu['list'][$i] . '</a>' . $header_menu['dropdown'][$i] . '</li>';
                break;
            default:
                echo '<li><a class="link" href="#">' . $header_menu['list'][$i] . '</a></li>';
                break;
        }
    }
    return $header_menu;
}

// for footer --> //

$footer_menu = [
    'title' => [
        'Services' => ['Email Marketing', 'Campaigns', 'Branding', 'Offline'],
        'About' => ['Our Story', 'Benefits', 'Team', 'Careers'],
    ],
];

function get_footer_menu()
{
    global $footer_menu;
    $i = 0;
    foreach ($footer_menu['title'] as $menuTitle => $menuItems) {
        if ($i == 0) {
            $class = 'service_menu';
        } else {
            $class = 'about_menu';
        }
        echo '<div class="' . $class . '">
                <ul class="footer_navigation">
                <h3 class="card_paragraph">' . $menuTitle . '</h3>';
        foreach ($menuItems as $menuItem) {
            echo '<li><a class="link" href="#">' . $menuItem . '</a></li>';
        }
        echo '</ul></div>';
        $i++;
    }
    return $footer_menu;
}
