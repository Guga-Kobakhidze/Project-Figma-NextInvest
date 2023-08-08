<footer class="footer">
    <div class="container">
        <div class="footer_section">
            <div class="footer_menu_content">
                <div class="footer_copyright">
                    <a href="" class="Logo footer_logo">NEW INVEST</a>
                    <h4 class="footer_text copyright">Copyright © 2020. LogoIpsum. All rights reserved.</h4>
                </div>
                <?php get_footer_menu(); ?>
                <a class="link" href="#">
                    <img class="back_to_top" src="./assets/iamges/Backtotop.png" alt="goback" /></a>
            </div>
            <div class="footer_social_links" id="form_section">
                <form class="email_forms" action="#form_section" method="post">
                    <h2> <?php
                            if (isset($_POST['email'])) {
                                $mail = $_POST['email'];
                                if ($mail == false) {
                                    echo 'Subscribe to our newsletter';
                                } else {
                                    echo 'Thank you for your Subscription';
                                }
                            }
                            ?> </h2>
                    <div class="input_section">
                        <input id="email_input" type="email" name="email" placeholder="Email address" />
                        <button class="btn btn_email" type="submit">
                            <i class="bx bx-chevron-right icon_btn"></i>
                        </button>
                    </div>
                </form>
                <div class="social_icons">
                    <a href="#" class="link"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="link"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="link"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>