<?php

// for single page --->>> //

$titles = [
    'Oxalis', 'nonais', 'porais', 'loraiss', 'alis', 'Oxas',
];

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


// $the_content = [
//     'image' => [
//         './assets/iamges/card1.png', './assets/iamges/card2.png', './assets/iamges/card3.png',
//         './assets/iamges/card4.png', './assets/iamges/card5.png', './assets/iamges/card6.png',
//     ],
//     'description' => [
//         'A recognized leader in language immersion & early education, opening second school. education, 
//                       opening second school. education, opening second school. A recognized leader in language immersion & early 
//                       econd school. education, opening second school. A recognized leader in language immersion & early',
//         'A recognized leader in language immersion & early education, opening second school. education, 
//                       opening second school. education, opening second school. A recognized leader in language immersion & early 
//                       econd school. education, opening second school. A recognized leader in language immersion & early',
//         'A recognized leader in language immersion & early education, opening second school. education, 
//                       opening second school. education, opening second school. A recognized leader in language immersion & early 
//                       econd school. education, opening second school. A recognized leader in language immersion & early',
//         'A recognized leader in language immersion & early education, opening second school. education, 
//                       opening second school. education, opening second school. A recognized leader in language immersion & early 
//                       econd school. education, opening second school. A recognized leader in language immersion & early',
//         'A recognized leader in language immersion & early education, opening second school. education, 
//                       opening second school. education, opening second school. A recognized leader in language immersion & early 
//                       econd school. education, opening second school. A recognized leader in language immersion & early',
//         'A recognized leader in language immersion & early education, opening second school. education, 
//                       opening second school. education, opening second school. A recognized leader in language immersion & early 
//                       econd school. education, opening second school. A recognized leader in language immersion & early',
//     ],
//     'list' => [
//         '<p class="card_paragraph">Security Type</p>
//                 <p class="card_paragraph">Investment Multiple</p>
//                 <p class="card_paragraph">Maturity</p>
//                 <p class="card_paragraph">Min. Investment</p>',
//         '<p class="card_paragraph">Security Type</p>
//                 <p class="card_paragraph">Investment Multiple</p>
//                 <p class="card_paragraph">Maturity</p>
//                 <p class="card_paragraph">Min. Investment</p>',
//         '<p class="card_paragraph">Security Type</p>
//                 <p class="card_paragraph">Investment Multiple</p>
//                 <p class="card_paragraph">Maturity</p>
//                 <p class="card_paragraph">Min. Investment</p>',
//         '<p class="card_paragraph">Security Type</p>
//                 <p class="card_paragraph">Investment Multiple</p>
//                 <p class="card_paragraph">Maturity</p>
//                 <p class="card_paragraph">Min. Investment</p>',
//         '<p class="card_paragraph">Security Type</p>
//                 <p class="card_paragraph">Investment Multiple</p>
//                 <p class="card_paragraph">Maturity</p>
//                 <p class="card_paragraph">Min. Investment</p>',
//         '<p class="card_paragraph">Security Type</p>
//                 <p class="card_paragraph">Investment Multiple</p>
//                 <p class="card_paragraph">Maturity</p>
//                 <p class="card_paragraph">Min. Investment</p>',
//     ],
//     'list2' => [
//         '<h4 class="hidden_paragraph">Revenue Sharing Note</h4>
//                 <h4 class="hidden_paragraph">1.4x</h4>
//                 <h4 class="hidden_paragraph">48 Months</h4>
//                 <h4 class="hidden_paragraph">$100</h4>',
//         '<h4 class="hidden_paragraph">Revenue Sharing Note</h4>
//                 <h4 class="hidden_paragraph">1.4x</h4>
//                 <h4 class="hidden_paragraph">48 Months</h4>
//                 <h4 class="hidden_paragraph">$100</h4>',
//         '<h4 class="hidden_paragraph">Revenue Sharing Note</h4>
//                 <h4 class="hidden_paragraph">1.4x</h4>
//                 <h4 class="hidden_paragraph">48 Months</h4>
//                 <h4 class="hidden_paragraph">$100</h4>',
//         '<h4 class="hidden_paragraph">Revenue Sharing Note</h4>
//                 <h4 class="hidden_paragraph">1.4x</h4>
//                 <h4 class="hidden_paragraph">48 Months</h4>
//                 <h4 class="hidden_paragraph">$100</h4>',
//         '<h4 class="hidden_paragraph">Revenue Sharing Note</h4>
//                 <h4 class="hidden_paragraph">1.4x</h4>
//                 <h4 class="hidden_paragraph">48 Months</h4>
//                 <h4 class="hidden_paragraph">$100</h4>',
//         '<h4 class="hidden_paragraph">Revenue Sharing Note</h4>
//                 <h4 class="hidden_paragraph">1.4x</h4>
//                 <h4 class="hidden_paragraph">48 Months</h4>
//                 <h4 class="hidden_paragraph">$100</h4>',
//     ],
//     'rate' => [
//         '<div class="range_color_bar"></div>', '<div class="range_color_bar"></div>', '<div class="range_color_bar"></div>',
//         '<div class="range_color_bar"></div>', '<div class="range_color_bar"></div>', '<div class="range_color_bar"></div>',
//     ],
//     'price' => [
//         '<span>$574,920 </span>raised of $1,000,000', '<span>$574,920 </span>raised of $1,000,000',
//         '<span>$574,920 </span>raised of $1,000,000', '<span>$574,920 </span>raised of $1,000,000',
//         '<span>$574,920 </span>raised of $1,000,000', '<span>$574,920 </span>raised of $1,000,000',
//     ],
// ];