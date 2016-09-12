
<footer class = "sub-footer" style = "border-top: 50px solid #000;"  >
    <div class = "container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "padding-right: 0px" >
            <div class="col-lg-5  col-md-5 col-sm-5 col-xs-5 under-footer"  >
                <h1>
                    <b>
                        LIFE AFTER
                    </b>
                    PURCHASE
                </h1>
                <p style = "line-height: 1.5 !important;font-family: 'AvenirNextLTW01-UltraLight' !important;margin-right: 20px; ">
                    <strong>
                    An consignment boutique with upscale aesthetic that
                    specializes in selling new and gently used men and women designer
                    clothing, shoes, accessories and home goods</strong>
                </p>
                <p style = "font-family: 'AvenirNextLTW01-UltraLight' !important;margin-right: 20px;line-height: 1.5 !important;">
                    <strong>
                    Our primary mission is to offer consumers a place to sell their gently
                    used items, so they can make extra money and help lessen the items
                    that end up in landfills - domestically or abroad.</strong>
                </p>

            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 under-footer" style="padding-right: 0px;">
                <form class="form-inline" role="form" style = "text-align: left;">
                    <div class="form-group form-jon col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="margin-bottom: 30px;padding: 0px; ">
                             <h2 for="email" >
                                JOIN OUR NEWSLETTER
                             </h2>
                             <input type="email" class=" input-lg form-control fullwith-search-icon" placeholder = "YOUR EMAIL" id="email" placeholder="Enter email"  >

                    </div>
                </form>
                <div style = "clear: both"></div>
                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 footer-border"></div>

                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6 footer-side-nav" style = "    padding: 0px;text-align: left">

                    <label for="email"><strong>BUY / SELL / SAVE</strong></label>
                    <ul>
                        <li>Event Info</li>
                        <li>How To Consign</li>
                        <li>Why Consign?</li>
                    </ul>

                </div>
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6 footer-side-nav" style = "    padding: 0px;text-align: left" >

                    <label for="email">Potential Profit</label>
                    <ul>
                        <li>Potential Profit</li>
                        <li>What We Accept</li>
                        <li>Selling Guide</li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6 footer-side-nav" style = "    padding: 0px;text-align: left">

                    <label for="email"><strong>COMPANY INFO</strong></label>
                    <ul>
                        <li>About</li>
                        <li>Contact</li>
                        <li>FQA</li>
                    </ul>

                </div>
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6 footer-side-nav" style = "    padding: 0px;text-align: left">

                    <label for="email "><strong>CAREERS</strong></label>
                    <ul>
                        <li><Job> Listings</Job></li>
                        <li>Working At The LAP</li>
                        <li></li>
                    </ul>
                </div>
            </div>

           <!-- <div class="row about_us">

                <h4 class="text-left" style = "border-top:1px solid black;" ></h4>

                <h1 style = "font-size:18px;display:inline">
                        <span style="font-family:'Didot';">
                            <b style="font-weight: 700;">
                                LIFE AFTER
                            </b>
                        </span>
                        <span style="font-family:'Didot Regular';">
                            PURCHASE
                        </span>
                </h1>
              </div>-->
            </div>



        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 footer-border" ></div>

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 div-cp copy-right-column" >
            <h4 style = "font-size: 16px;">Copyright &copy; 2016 Life After Purchase. All Rights Reserved.</h4>
        </div>
    </div>
</footer>































<script>
var jq = $.noConflict();
jq(document).ready(function(){

    jq('#frmConsign .tab_panels .tabs li').click(function(){
        jq('#frmConsign .tab_panels .tabs li.actived').removeClass('actived');
        jq(this).addClass('actived');
        var panelToShow= jq(this).attr('rel');
        jq('#frmConsign .tab_panels .panell.actived').fadeOut(300,function(){
                    jq(this, '#frmConsign').removeClass('actived');
            jq('#frmConsign #'+panelToShow).fadeIn(300, function(){
                jq(this).addClass('actived');
            });
        });
        //jq('#itemtypeconsign').val(jq('#frmConsign .tab_panels .tabs li.actived a').html());
    });

    jq('#frmbuyer .tab_panels .tabs li').click(function(){
        jq('#frmbuyer .tab_panels .tabs li.actived').removeClass('actived');
        jq(this).addClass('actived');
        var panelToShow= jq(this).attr('rel');
        jq('#frmbuyer .tab_panels .panell.actived').fadeOut(300,function(){
            jq(this, '#frmbuyer').removeClass('actived');
            jq('#frmbuyer #'+panelToShow).fadeIn(300, function(){
                jq(this).addClass('actived');

                jq('#itemtypebuyer').val(jq('#frmbuyer .tab_panels .tabs li.actived a').html());
            });
        });
    });



    var s = jq("#sticker");
    var pos = s.position();
    jq(window).scroll(function() {
        var windowpos = jq(window).scrollTop();
        if (windowpos >= pos.top) {
            s.addClass("fixed");

            if(jq(window).width() < 768)
            {
                jq('div.title-collapse').show();
            }
            else{
                jq('div.title-collapse').hide();
            }

        } else {
            s.removeClass("fixed");
            jq('div.title-collapse').hide();
        }
    });


    var siteurl = "<?php echo SITEURL; ?>";

    if(jq('#frmbuyer .male_box input[type=checkbox]').prop( "checked" )){

        jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

    }else{
        jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');

    }

    jq(document).on('click','#frmbuyer #male_box',function(){

        jq('#frmbuyer .male_box input[type=checkbox]').click();

        if(jq('#frmbuyer .male_box input[type=checkbox]').prop( "checked" )){
            jq('#frmbuyer .female_box input[type=checkbox]').prop( "checked", false );
            jq('#dress_jacket').text("Jacket");
            jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
            jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');

        }else{
            jq('#dress_jacket').text("Dress");
            jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
            jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

        }
    })


    /*female_box for buyer*/

    if(jq('#frmbuyer .female_box input[type=checkbox]').prop( "checked" )){

        jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

    }else{
        jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');

    }

    jq(document).on('click','#frmbuyer #female_box',function(){

        jq('#frmbuyer .female_box input[type=checkbox]').click();

        if(jq('#frmbuyer .female_box input[type=checkbox]').prop( "checked" )){
            jq('#frmbuyer .male_box input[type=checkbox]').prop( "checked",false );
            jq('#dress_jacket').text("Dress");
            jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
            jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');

        }else{
            jq('#dress_jacket').text("Jacket");
            jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
            jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

        }
    })


    /*
     consigner_check box

     */
    if(jq('#frmConsign .male_box input[type=checkbox]').prop( "checked" )){

        jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

    }else{
        jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');

    }

    jq(document).on('click','#frmConsign #male_box',function(){

        jq('#frmConsign .male_box input[type=checkbox]').click();

        if(jq('#frmConsign .male_box input[type=checkbox]').prop( "checked" )){
            jq('#frmConsign .female_box input[type=checkbox]').prop( "checked", false );
            jq('#dress_jacket').text("Dress");
            jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)'); //Updated here
            jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
        }else{
            jq('#dress_jacket').text("Jacket");
            jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)'); //Updated here
            jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
        }
    })

    /*female_box for consigner*/

    if(jq('#frmConsign .female_box input[type=checkbox]').prop( "checked" )){

        jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

    }else{
        jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');

    }

    jq(document).on('click','#frmConsign #female_box',function(){

        jq('#frmConsign .female_box input[type=checkbox]').click();

        if(jq('#frmConsign .female_box input[type=checkbox]').prop( "checked" )){
            jq('#frmConsign .male_box input[type=checkbox]').prop( "checked", false );
            jq('#dress_jacket').text("Jacket");
            jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)'); //updated here
            jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
        }else{
            jq('#dress_jacket').text("Dress");
            jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)'); //updated here
            jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');

        }

    })

    jq(function(){
        jq('.slider img:first').addClass('top');

        var change = function(){
            var curr = jq('.slider img.top');
            var next = curr.next();

            if(!next.length){
                next = jq('.slider img:first');
                next.addClass('top');
                curr.animate({opacity:0.0},300, function(){
                    curr.removeClass('top');
                    curr.css({opacity:1.0});
                });
            }
            else{
                next.css({opacity:0.0})
                    .addClass('top')
                    .animate({opacity:1.0},1000,function(){
                        curr.removeClass('top');
                    });
            }
        }

        setInterval(change,3000);

    });




    /* this is for second panel */
    jq('.consigner_shoper_panel .navfirst ul li').click(function(){
        jq('.consigner_shoper_panel .navfirst ul li.active').removeClass('active');
        jq(this).addClass('active');
        var second_panel = jq(this).attr('rel');
        jq('.consigner_shoper_panel .panel_for_second_nav.active').fadeOut(200,function(){
            jq(this).removeClass('active');
            jq('.consigner_shoper_panel .panel_for_second_nav#'+second_panel).fadeIn(200,function(){
                jq(this).addClass('active');
            });
        });



    });

    jq('.panel_for_second_nav .navsecond ul li').on('click',function(){
        var panel = jq(this).closest('.panel_for_second_nav');
        panel.find('.navsecond ul li.active').removeClass('active');
        jq(this).addClass('active');

        var child_p_show = jq(this).attr('rel');

        panel.find('.child_panel_main .active').fadeOut(200, displayNext);

        function displayNext(){
            jq(this).removeClass('active');
            panel.find('#'+child_p_show).fadeIn(200, function(){
                jq(this).addClass('active');
            });
        }



    });



// navigation----

    if(jq(window).width() < 768)
    {
        jq('.slide_down').hide();
    }
    jq(window).resize(function(){
        if (jq(window).width() > 768){
            jq('.slide_down').show();
            jq('div.title-collapse').hide();
        }
        else{
            jq('.slide_down').hide();
        }
    });

    jq('#icons').click(function(){
        jq('.slide_down').slideToggle(200);

    });

// tooggle text
    jq('.items h4').nextAll('p').hide();
    jq('.items h4').click(function(){
        jq(this).next().stop().slideToggle('fast');
        return false;
    });


    // navigation menu smooth effects
    jq('.slide_down li a').click(function(){
        var id = jq(this).attr('href');
        jq('body').animate({
            scrollTop: jq('#'+id).offset().top-120
        },'slow');
        return false;
    });

    //   var widthImg = jq('#frmbuyer .col-md-3 img').width();
    //jq('#frmbuyer .col-md-3').append("<div class='hover_append' onclick='changeColor(this)' style='cursor:pointer;' ><button onclick='this.disabled=true' class='select_submit'>SELECT</button></div>");
    // jq('.hover_append').css({'width':widthImg+'px'});

    // jq(window).resize(function(){
    // 	 var widthImgR = jq('#frmbuyer .col-md-3 img').width();
    // 	  jq('#frmbuyer .col-md-3').prepend('<div class="hover_append hover-product"><input type="submit" name="submit" value="SELECT" class="select_submit"></div>');
    //   	jq('.hover_append').css({'width':widthImgR+'px'});
    // });






});   //end of documents

</script>