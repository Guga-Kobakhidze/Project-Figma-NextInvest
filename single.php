<?php include_once "header.php" ?>
<?php $card = $_GET['card']; ?>
<img class="home_section_bg single_section_bg" src="./assets/iamges/background.png" alt="BG" />
<img class="right_lines" src="./assets/iamges/rightlines.png" alt="rightLines" />
<main class="main">
    <section class="single_section">
        <div class="container">
            <div class="paid_section_content">
                <div class="paid_section_description">
                    <h2 class="main_title">
                        <?php echo get_the_title(); ?>
                    </h2>
                    <p class="paragraph single_paragraph">
                        <?php echo get_the_description(); ?>
                    </p>
                    <div class="hidden_content single_content">
                        <div class="hidden_card_titles">
                            <p class="card_paragraph">Security Type</p>
                            <p class="card_paragraph">Investment Multiple</p>
                            <p class="card_paragraph">Maturity</p>
                            <p class="card_paragraph">Min. Investment</p>
                        </div>
                        <div class="hidden_card_paragraphs">
                            <h4 class="hidden_paragraph">Revenue Sharing Note</h4>
                            <h4 class="hidden_paragraph">1.4x</h4>
                            <h4 class="hidden_paragraph">48 Months</h4>
                            <h4 class="hidden_paragraph">$100</h4>
                        </div>
                        <div class="range_bar">
                            <div class="range_color_bar"></div>
                        </div>
                        <p class="card_paragraph">
                            <span>$574,920 </span>raised of $1,000,000
                        </p>
                        <!-- <button class="btn btn4" type="submit" data-title="Oxalis">View</button> -->
                    </div>
                </div>
                <div class="single_image">
                    <img src="<?php echo get_image_url(); ?>" alt="cuate" />
                </div>
            </div>
        </div>
    </section>
    <?php include_once "footer.php" ?>