<?php include_once "header.php" ?>
<?php $card = $_GET['card']; ?>
<img class="home_section_bg single_section_bg" src="./assets/iamges/background.png" alt="BG" />
<img class="right_lines" src="./assets/iamges/rightlines.png" alt="rightLines" />
<main class="main">
    <section class="single_section">
        <div class="container">
            <div class="single_page_content">
                <div class="single_page_description">
                    <h2 class="main_title">
                        <?php echo get_the_title(); ?>
                    </h2>
                    <p class="paragraph single_paragraph">
                        <?php echo get_the_description(); ?>
                    </p>
                    <div class="hidden_content single_content">
                        <div class="hidden_card_titles">
                            <?php foreach (get_card_titles() as $title) : ?>
                                <p class="card_paragraph"><?php echo $title; ?></p>
                            <?php endforeach; ?>
                        </div>
                        <div class="hidden_card_paragraphs">
                            <?php foreach (get_card_values() as $value) : ?>
                                <h4 class="hidden_paragraph"><?php echo $value; ?></h4>
                            <?php endforeach; ?>
                        </div>
                        <div class="range_bar">
                            <div class="range_color_bar"></div>
                        </div>
                        <p class="card_paragraph"><?php echo get_card_rate(); ?></p>
                    </div>
                </div>
                <div class="single_image">
                    <img src="<?php echo get_image_url(); ?>" alt="cuate" />
                    <div class="single_image_buttons">
                        <a class="btn btn5" href="./index.php #grid_cards">Go Back</a>
                        <a class="btn btn5" href="#">Reserve</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once "footer.php" ?>