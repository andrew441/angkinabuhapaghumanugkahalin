var jq = jQuery.noConflict();
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
        jq('#itemtypeconsign').val(jq('#frmConsign .tab_panels .tabs li.actived a').html());
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
        
            jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
                
        }else{          
            jq('#frmbuyer #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
            
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
        
            jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
                
        }else{          
            jq('#frmbuyer #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
            
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
        
            jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
                
        }else{          
            jq('#frmConsign #male_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
            
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
        
            jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box-check.png)');
                
        }else{          
            jq('#frmConsign #female_box').css('background','url('+siteurl+'/wp-content/themes/custom/img/box.png)');
            
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
        //detect nia daan ang scrollTopp or position sa browser\
        var viewportHeightop = $(window).scrollTop();
        if(viewportHeightop < 120){ 
            // if ang browser naa sa pinaka top 
            var id = jq(this).attr('href'); 
                jq('body').animate({
                    scrollTop: jq('#'+id).offset().top -120
                },'slow'); 
            return false;
        }else{
        // else and browser is wala sa pinaka top then mao ni ang code nia 
            var id = jq(this).attr('href'); 
                jq('body').animate({
                    scrollTop: jq('#'+id).offset().top -50
                },'slow'); 
            return false; 
        }
    }); 
});   //end of documents 
 