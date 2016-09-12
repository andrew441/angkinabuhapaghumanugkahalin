<?php
/**
 * Template Name: Full Width
 */
require_once('header.php');
?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="container">
            <h4 class="page_title"><span class="black"><?php the_title(); ?></span></h4>
        </div>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <!--do not delete-->
<?php else : ?>
    Not Found
    Sorry, but you are looking for something that isn't here.
    <!--do not delete-->
<?php endif; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-list.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/js/custom-mike.js" />
<link rel="stylesheet" type="text/javascript" src="<?php echo get_bloginfo ( 'template_url' ); ?>/js/custom-majax.js" />
<div style = "display: none">
    <!--this is for sign up-->
    <div class="container">
        <!-- Trigger the modal with a button -->
        <a style = "color:black;font-family: 'AvenirNextLTW01-UltraLight' !important; text-decoration: underline;font-size: 20px" class=" " data-toggle="modal" data-target="#myModal1">Sign up</a>

        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-for-width">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header modal-signup-for-h4-and-p">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" >SIGN UP <i>to</i> CONSIGN</h4>
                        <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                    </div>


                    <div class="modal-body modal-signup-p">

                        <form role="form" method = "POST" action = "">

                            <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12 "  >
                                <div class="form-group">
                                    <label for="user_name">First Name</label>
                                    <input type="text" name = "user_name" class="form-control" id="user_name" required ="field">
                                </div>
                                <div class="form-group">
                                    <label for="user_email">Email</label>
                                    <input type="email" name = "user_email" class="form-control" id="user_email" required>
                                </div>
                                <div class="form-group">
                                    <label for="promo_code">Promo Code</label>
                                    <input type="number" name = "user_promocode"  class="form-control" id="promo_code">
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-6 col-xs-12 ">
                                <div class="form-group">
                                    <label for="usr" style="margin-bottom: -21px;">Gender</label><br>
                                    <div class = "gender-col" ">
                                         <label class="checkbox-inline">
                                                <input type="checkbox"  class = "btn-check" value = "Male" rel = "gender1" id = "check1" name="user_gender">Male
                                         </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class = "btn-check"  value = "Female" rel = "gender2" id = "check2" name="user_gender">Female
                                        </label>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" name = "user_pass" class="form-control" id="user_password">
                                </div>
                                <div class="form-group">
                                    <label for="sbt">Already have an account?</label>
                                    <button type = "button" onclick = "MyNewSgnUp()" value = "join_now" name = "button-signUp" class="btn-check form-control form-sub" id="join_now" >JOIN NOW</button>

                                    <div id = "demoSignUp"></div>


                                </div>
                            </div>

                        </form>
                        <div style="clear:both">  </div>
                            <p>By creating an account, I accept Life After Purchase's <span><a href = "#" style = "color:red">Terms of Service</a></span> and <span><a href = "#" style = "color:red">Privacy Policy</a></span></p>
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>-->

                    </div>



                </div>

            </div>
        </div>



        <!--this is for sign in -->

        <!-- Trigger the modal with a button -->
        <a style = "color:black;font-family: 'AvenirNextLTW01-UltraLight' !important; text-decoration: underline;font-size: 20px" data-toggle="modal" data-target="#myModal2">Sign in</a>

        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog modal-col-width">
                <!-- Modal content-->
                <div class="modal-content modal-sub-content">
                    <div class="modal-header modal-signup-for-h4-and-p">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>

                        <h4 class="modal-title" style="letter-spacing: 0px;margin-top: 20px;">
                            Login to your Account
                        </h4>

                        <p style="
    text-align: center;
    font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
    color: black;
    list-style-type: none;
    font-weight: bolder;
    margin-right: 20px;
    color: #000 !important;
    text-decoration: none;
    font-size: 20px;
        letter-spacing: 2px;
">
                            Don't have an account?
                            <span>
                                <a href = "#">
                                    Sign up now
                                </a>
                            </span>
                        </p>
                    </div>
                    <div class="modal-body">
                        <form role="form" method = "POST" action = "">
                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 ">
                                <div class="form-group">
                                    <label for="email-signIn" style = "
    font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
    color: black;
    list-style-type: none;
    font-weight: bolder;
    margin-right: 20px;
    color: #000 !important;
    text-decoration: none;
    font-size: 20px;
    letter-spacing: 2px;">
                                        Email
                                    </label>
                                    <input type="email" name = "user_name" class="form-control" id="email-signIn" style="
    height: 10% !important;
    font-size: 20px;
">
                                </div>
                                <div class="form-group">
                                    <label for="pass-signIn" style = "
    font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
    color: black;
    list-style-type: none;
    font-weight: bolder;
    margin-right: 20px;
    color: #000 !important;
    text-decoration: none;
    font-size: 20px;
    letter-spacing: 2px;">Password</label>
                                    <input type="password" class="form-control" id="pass-signIn" style="
    height: 10% !important;
    font-size: 20px;
">

                                </div>
                                <div class="form-group">
                                    <label for="pwd" style = "
    font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
    color: black;
    list-style-type: none;
    font-weight: bolder;
    margin-right: 20px;
    color: #ccc !important;
    text-decoration: none;
    font-size: 20px;
    letter-spacing: 2px;">I forgot my password!</label>
                                    <button type="button" id = "login_now" value = "login_now" onclick = "MyNewSgnIn();" class="btn btn-primary btn-lg form-sub" style="padding: 10px 30px !important;position: relative; top: -26px;font-family: 'AvenirNextLTW01-UltraLight' !important;">LOG IN</button>
                                    <div id = "sigInDemo" style = "color: red"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div style="clear:both">  </div>
                    <div class="modal-footer">
                        <div class = "modal-fr" style="margin-top: -30px;margin-bottom: 20px;">
                            <p  style = "
                                font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
                            color: black;
                            list-style-type: none;
                            font-weight: bolder;
                            margin-right: 0px !important;
                            margin-left: 0px !important;
                            color: #000 !important;
                                line-height: 25px;
                            text-decoration: none;
                            font-size: 20px;
                            letter-spacing: 2px;position: inherit;top: -15px !important;">By creating an account, I accept Life After Purchase's
                                <span>
                                    <a href = "#">
                                        Terms of Service
                                    </a>
                                </span>
                                and
                                <span>
                                    <a href = "#">
                                        Privacy Policy
                                    </a>
                                </span>
                            </p>
                        </div>
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php
require_once('footer.php');
?>s