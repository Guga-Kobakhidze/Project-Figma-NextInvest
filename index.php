<?php include_once "header.php" ?>
<img class="home_section_bg" src="./assets/iamges/background.png" alt="BG" />
<img class="right_lines" src="./assets/iamges/rightlines.png" alt="rightLines" />
<main class="main">
    <section class="home_section_1">
        <div class="container">
            <div class="main_content">
                <img class="circle" src="./assets/iamges/Shape.png" alt="shape" />
                <h1 class="main_title">
                    Meaningful investments in Main Street businesses
                </h1>
                <p class="main_paragraph">
                    Browse vetted investment offerings <br />in communities all over
                    the US.
                </p>
                <button class="btn" type="submit">Get Started</button>
            </div>
        </div>
    </section>
    <section class="home_section_2 section_margin" id="grid_cards">
        <div class=" container">
            <div class="subtitle_section">
                <h2 class="subtitle">Offerings open for investment</h2>
                <p class="paragraph">
                    Explore pre-vetted investment opportunities available in a growing
                    <br />number of industry categories.
                </p>
            </div>
            <div class="grid_content_cards">
                <?php get_the_card(); ?>
            </div>
            <div class="grid_cards_button">
                <button class="btn" type="submit">View All Projects</button>
            </div>
        </div>
    </section>
    <section class="home_section_3 section_margin">
        <div class="vector_images">
            <img src="./assets/iamges/Vector.png" alt="Vector" />
            <img src="./assets/iamges/Group.png" alt="group" />
            <img src="./assets/iamges/Group 1.png" alt="group1" />
        </div>
        <div class="container">
            <div class="paid_section_content">
                <div class="paid_section_description">
                    <img src="./assets/iamges/Subtract.png" alt="Subtract" />
                    <?php get_section_content($sectionContent1, []); ?>
                </div>
            </div>
    </section>
    <section class="home_section_4 section_margin">
        <div class="container">
            <div class="paid_section_content">
                <div class="paid_section_description">
                    <?php get_section_content([], $sectionContent2); ?>
                </div>
            </div>
    </section>
</main>
<?php include_once "footer.php" ?>