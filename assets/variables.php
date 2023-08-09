<?php

// for hidden content --> //
// for grid cards --> //

$grid_cards = [
    'image' => [
        './assets/iamges/card1.png', './assets/iamges/card2.png', './assets/iamges/card3.png',
        './assets/iamges/card4.png', './assets/iamges/card5.png', './assets/iamges/card6.png',
    ],
    'title' => ['Oxalis', 'nonais', 'porais', 'loraiss', 'alis', 'Oxas',],
    'subtitle' => ['Brooklyn, NY', 'New Mexico', 'Ohio', 'Oklahoma', 'Rhode Island', 'Brooklyn, NY'],
    'description' => ['A recognized leader in language immersion & early education,
                       opening second school.', 'A recognized leader in language immersion & early education,
                       opening second school.', 'A recognized leader in language immersion & early education,
                       opening second school.', 'A recognized leader in language immersion & early education,
                       opening second school.', 'A recognized leader in language immersion & early education,
                       opening second school.', 'A recognized leader in language immersion & early education,
                       opening second school.',],
    'price' => [
        '<span>$594,920 </span>raised of $1,000,000', '<span>$504,920 </span>raised of $1,000,000',
        '<span>$604,920 </span>raised of $1,000,000', '<span>$574,520 </span>raised of $1,000,000',
        '<span>$584,920 </span>raised of $1,000,000', '<span>$510,920 </span>raised of $1,000,000'
    ],
    'hidden_title' => [
        ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'], ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'], ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
        ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'], ['Security Type', 'Investment Multiple', 'Maturity', 'Min. Investment'],
    ],
    'hidden_value' => [
        ['Revenue Sharing', ' 1.4x', '48 Months', '$100'], ['Revenue', ' 1.5x', '64 Months', '$200'],
        ['Revenue sharing', ' 1x', '12 Months', '$300'], ['Revenue Type', ' 1.4x', '24 Months', '$500'],
        ['Revenue', ' 1.3x', '64 Months', '$250'], ['Revenue sharing', ' 1.8x', '12 Months', '$800'],
    ],
    'permanlink' => [
        'single.php?card=card1', 'single.php?card=card2', 'single.php?card=card3', 'single.php?card=card4',
        'single.php?card=card5', 'single.php?card=card6'
    ],
];

function get_the_cards()
{
    global $grid_cards;
    for ($i = 0; $i < sizeof($grid_cards['title']); $i++) {
        echo '<div class="grid_card">
        <div class="grid_card_image">
            <img src="' . $grid_cards['image'][$i] . '" alt="card" />
            <div class="grid_inner_buttons">
                <button class="btn btn3" type="submit">House</button>
                <button class="btn btn3" type="submit">Family Business</button>
            </div>
        </div>
        <div class="grid_card_content">
            <h2 class="card_title">' . $grid_cards['title'][$i] . '</h2>
            <h3 class="card_subtitle">' . $grid_cards['subtitle'][$i] . '</h3>
            <p class="card_paragraph">' . $grid_cards['description'][$i] . '</p>
            <div class="range_bar"><div class="range_color_bar"></div></div>
            <p class="card_paragraph">' . $grid_cards['price'][$i] . '</p>
            <div class="hidden_content">
                <div class="hidden_card_titles">';
        foreach ($grid_cards['hidden_title'][$i] as $title) {
            echo '<p class="card_paragraph">' . $title . '</p>';
        }
        echo '</div>
                <div class="hidden_card_paragraphs">';
        foreach ($grid_cards['hidden_value'][$i] as $value) {
            echo '<h4 class="hidden_paragraph">' . $value . '</h4>';
        }
        echo '</div>
                    <a class="btn btn4" href="' . $grid_cards['permanlink'][$i] . '">View</a>
                </div>
            </div>
        </div>';
    }
    return $grid_cards;
}

$sectionContent1 = [
    'subtitle' => '$7M+ paid out to investors',
    'description' => 'Next Invest has already paid out over $7M in cash returns to
                      investors. Earn potential cash payments through unique
                      revenue-share and debt financing investments.',
    'image' => './assets/iamges/Chart.png',
];

$sectionContent2 = [
    'subtitle' => 'Looking to raise capital for your growing business?',
    'description' => 'Whether expanding or opening a brand-new concept, we make it
                      easy to raise money from thousands of local investors.',
    'image' => './assets/iamges/cuate.png',
];

function get_section_content($sectionContent1, $sectionContent2)
{
    $section_content = array_merge($sectionContent1, $sectionContent2);
    switch ($section_content) {
        case ($sectionContent1):
            $button = '';
            $text_class = 'main_paragraph';
            break;
        case ($sectionContent2):
            $button = '<button class="btn" type="submit">View All Projects</button>';
            $text_class = 'paragraph';
            break;
    }
    echo '<h2 class="subtitle">' . $section_content['subtitle'] . '</h2>
                    <p class="' . $text_class . '">' . $section_content['description'] . '</p>
                    ' . $button . '
                </div>
                <div class="paid_section_chart">
                    <img src="' . $section_content['image'] . '" alt="cuate" />
                </div>';
}
