<?php  
/**
* Template Name: Desired Items 2
*/  
	require_once('header.php');
?>  
<br><br>
<div id = "wrapper"> 
	<div class = "container cont-desired-items"> 
		<p style="text-align: center;">
			<strong>
				<span style="color: #ff9900; letter-spacing: 3px;">
					Summer 2016
				</span>
			</strong>
		</p>
		<p style="text-align: center; font-family: 'Lucida Sans Typewriter'; font-size: 14px;">
			<strong>
				WHAT WE' RE LOOKING FOOR
			</strong>
		</p>
		<p style="text-align: center;">
			<b> 	
				________
			</b>
		</p>
		<p style="text-align: center; line-height: 27px;">
			<span style="font-size: 14px;">
				Wondering what we' re buying right now? Look no further. Our Selling Guide is the most up-to-date place to find
				<br>
			</span>
			<span style="font-size: 14px;">
				out which styles and trends we' re currently excited about. 
				<span style="color: #000000;">
					<i>
						Now buying for spring.
					</i>
				</span>
			</span>
		</p>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
	$(document).ready(function(){ 
		//This is for the title WOMEN
		$('#women-desired').css({  // title
			color:'#000'
		});	 
		$('.wom1').css({
			display: 'none'
		});
		$('.wom2').css({
			color:'#000',
			display:'inline' 
		});
		$('.men1').css({
			display: 'inline'
		});
		$('.men2').css({
			display: 'none'
		});
		$('.home1').css({
			display: 'inline'
		});
		$('.home2').css({
			display: 'none' 
		});
		$('#women-desired').click(function(){

			$('.wom1').css({
				display: 'none'
			});
			$('.wom2').css({
				display: 'inline',
				color:'#000'
			});
			$('.men1').css({
				display: 'inline'
			});
			$('.men2').css({
				display: 'none'
			});
			$('.home1').css({ 
				display: 'inline'
			});
			$('.home2').css({
				 display: 'none'
			});
			//title
			$('#women-desired').css({
				color:'#000'
			});
			$('#men-desired').css({
				color:'#fff',
				textDecoration:'none'
			});
			$('#home-desired').css({
				color:'#fff'
			});
			//subtitle
			$('.casual-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.chic-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.preppy-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			//
			$('.women-chic').css({
				display:'block'
			});
			$('.mens-wear').css({
				display:'none'
			});
			
			$('.home-decor').css({
				display: 'none'
			});
			//COLUMN FOR WOMEN
			//first column
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column
			$('#women-chic-column-desired').css({
				display: 'block'
			});
			//third column
			$('#women-preppy-column-desired').css({
				display: 'none'
			});	
			//fourth column 
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	

			//COLUMN FOR MEN
			//first column 
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column 
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column 
	 		$('#mens-streetwear-column-desired').css({	 
				display: 'none'
			});

	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});
 
			 
			  
		}); 
		$('.women-chic').css({ //column for the women subtitle 
			display:'block'
		}); 
		/*
 		* This is for woman subtitle
 		*Default
		*/

		$('.casual-desired').css({
			color: '#000',
			textDecoration:'none' 
		});
		$('.chic-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
		$('.casual-desired').click(function(){

			//subtitle 
			$('.casual-desired').css({ 
				color: '#ccc',
				textDecoration:'none'
			});
			$('.chic-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'block'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	
			//men's column
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({		 
				display: 'none'
			});

	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});

		});
		$('.chic-desired').click(function(){
			//subtitle
			$('.casual-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.chic-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.preppy-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired').css({
				color: '#000',
				textDecoration:'none'
			});

			//column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'block'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			}); 
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});

			//men's column
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({  
				display: 'none'
			});	

			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});
		});
		$('.preppy-desired').click(function(){
			//subtitle
			$('.casual-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.chic-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.streetwear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			//column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'block'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	
			//men's column
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({ 
				display: 'none'
			});

			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});
		});
		$('.streetwear-desired').click(function(){
			//subtitle
			$('.casual-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.chic-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'block'
			});	
			//men's column
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({
				display: 'none'
			});

			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});
		});

		//this is for first column for women
		$('#women-column-desired').css({
			display: 'none'
		});
		$('#more-desired').click(function(){
			$('.more-item-desired').css({
				display: 'block' 
			});
			$('#more-desired').css({
				display: 'none' 
			});
		});
		$('.more-item-desired').css({
			display: 'none'
		});

		//this is for te second column for women
		$('#women-chic-column-desired').css({
			display: 'block'
		});
		$('.more-chic-item-desired').css({
			display: 'none'
		});
		$('#more-chic-desired').click(function(){
			$('#more-chic-desired').css({
				display: 'none'
			});
			$('.more-chic-item-desired').css({
				display: 'block'
			});
		});

		//this is for the third column for women
		$('#women-preppy-column-desired').css({
			display: 'none'
		});	
		$('.more-preppy-item-desired').css({
			display: 'none'
		});
		$('#more-preppy-desired').click(function(){
			$('#more-preppy-desired').css({
				display: 'none'
			});
			$('.more-preppy-item-desired').css({
				display: 'block'
			});
		});

		//this is for the fourth column for women
		$('#women-streetwear-column-desired').css({
			display: 'none'
		});	
		$('.more-streetwear-item-desired').css({
			display: 'none'
		});
		$('#more-streetwear-desired').click(function(){
			$('#more-streetwear-desired').css({
				display: 'none'
			});
			$('.more-streetwear-item-desired').css({
				display: 'block'
			});
		});

 


		/*
		* 
		*
		*/

		//This is for the title MEN
		$('.mens-wear').css({ // column for the subtitle of men
			display:'none'
		});
		$('#men-desired').click(function(){
			$('.wom1').css({
				display: 'inline'
			});
			$('.wom2').css({
				display: 'none'
			});
			$('.men1').css({
				display: 'none'
			});
			$('.men2').css({
				display: 'inline',
				color:'#000'
			});
			$('.home1').css({
				display: 'inline'
			});
			$('.home2').css({
				display: 'none'
			});
			//title column
			$('.mens-wear').css({
				display:'block'
			});
			$('.women-chic').css({
				display:'none'
			}); 
			$('.home-decor').css({
				display: 'none'
			});  
			//subtitle
			$('#men-desired').css({
				color:'#000',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#fff'
			});
			// this is for the subtitle of men
			$('.casual-desired2').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.menswear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			//men's column 
			//first column for men
			$('#mens-column-desired').css({
				display: 'block'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});

			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({			//column 
				display: 'none'
			});

			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});

			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});
 		
		});
		//this is for men subtitle
		$('.casual-desired2').click(function(){
			$('.casual-desired2').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.menswear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			//title column
			$('#women-desired').css({
				color:'#fff'
			});
			$('#men-desired').css({
				color:'#000',
				textDecoration:'none'
			});
			$('#home-desired').css({
				color:'#fff'
			});
			// this is for the subtitle of men
			$('.casual-desired2').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.menswear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			
			//men's column 
			//first column for men
			$('#mens-column-desired').css({
				display: 'block'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});

			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({			//column 
				display: 'none'
			});

			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});



			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});

		});
		$('.menswear-desired').click(function(){
			//title column
			$('#women-desired').css({
				color:'#fff'
			});
			$('#men-desired').css({
				color:'#000',
				textDecoration:'none'
			});
			$('#home-desired').css({
				color:'#fff'
			});
			// this is for the subtitle of men
			$('.casual-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.menswear-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.preppy-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired2').css({
				color: '#000',
				textDecoration:'none'
			});

			//men's column 
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'block'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//this is the fourth column for men
	 		$('#mens-streetwear-column-desired').css({			//column 
				display: 'none'
			});
			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});
 
 
			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});

		});
		$('.preppy-desired2').click(function(){ 
 
			//title column
			$('#men-desired').css({
				color:'#000',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#fff'
			});
			// this is for the subtitle of men
			$('.casual-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.menswear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired2').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.streetwear-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			//men's column 
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'block'
			});
			//fourth column for men 
			$('#mens-streetwear-column-desired').css({
				display: 'none'
			});
			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});
 
			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});

 
		});
		$('.streetwear-desired2').click(function(){
			//title column
			$('#men-desired').css({
				color:'#000',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#fff'
			});
			// this is for the subtitle of men
			$('.casual-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.menswear-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.preppy-desired2').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.streetwear-desired2').css({
				color: '#ccc',
				textDecoration:'none'
			});
			//men's column 
			//first column for men
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column for men
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column for men
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for men 
			$('#mens-streetwear-column-desired').css({
				display: 'block'
			});

			//women's column
			//first column for women
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column for women
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column for women
			$('#women-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column for women
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});

			/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			});
		}); 	

		//this is the first column for men
		$('#mens-column-desired').css({			//column 
			display: 'none'
		});
		$('.show-more-desired').css({   //show the image
			display: 'none'
		});
		$('#men-more-desired').click(function(){   //button 
			$('#men-more-desired').css({
				display: 'none' 
			});
			$('.show-more-desired').css({
				display: 'block'
			}); 
		});
		//this is the second column for men
		$('#mens-menswear-column-desired').css({			//column 
			display: 'none'
		});
		$('.show-more-menswear-items').css({   //show the image
			display: 'none'
		});
		$('#more-menswear').click(function(){   //button 
			$('#more-menswear').css({
				display: 'none' 
			});
			$('.show-more-menswear-items').css({
				display: 'block'
			}); 
		});
 		//this is the third column for men
 		$('#mens-preppy-column-desired').css({			//column 
			display: 'none'
		});
		$('.show-more-preppy-desired').css({   //show the image
			display: 'none'
		});
		$('#more-preppy').click(function(){   //button 
			$('#more-preppy').css({
				display: 'none' 
			});
			$('.show-more-preppy-desired').css({
				display: 'block'
			}); 
		});
		//this is the fourth column for men
 		$('#mens-streetwear-column-desired').css({			//column 
			display: 'none'
		});
		$('.show-more-streetwear-desired').css({   //show the image
			display: 'none'
		});
		$('#more-streetwear').click(function(){   //button 
			$('#more-streetwear').css({
				display: 'none' 
			});
			$('.show-more-streetwear-desired').css({
				display: 'block'
			}); 
		});




		//This is for the title HOME
		$('.home-decor').css({ //column for the subtitle of home
			display: 'none'
		});
		$('#home-desired').click(function(){
			$('.wom1').css({
				display: 'inline'
			});
			$('.wom2').css({
				display: 'none'
			});
			$('.men1').css({
				display: 'inline'
			});
			$('.men2').css({
				display: 'none'
			});
			$('.home1').css({
				display: 'none'
			});
			$('.home2').css({
				display: 'inline',
				color:'#000'
			});
			//title column
			$('#men-desired').css({
				color:'#fff',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#000'
			});
			
			// this is for the subtitle of men
			$('.bedding-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.decor-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.denning-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.furniture-desired').css({
				color: '#000',
				textDecoration:'none'
			}); 
			//
			$('.mens-wear').css({
				display:'none'
			});
			$('.women-chic').css({
				display:'none'
			});
			$('.home-decor').css({
				display: 'block'
			});
			  
			//COLUMN FOR WOMEN
			//first column 
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column
			$('#women-preppy-column-desired').css({
				display: 'none'
			});	
			//fourth column
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	

			//column for men
			//first column 
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column 
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column 
	 		$('#mens-streetwear-column-desired').css({	 
				display: 'none'
			});
 
	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 
			$('#home-column-desired').css({
				display: 'block'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			}); 

		}); 
		//this is for home subtitle 

		$('.bedding-desired').click(function(){
			//title column
			$('#men-desired').css({
				color:'#fff',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#000'
			});
			// this is for the subtitle of home
			$('.bedding-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.decor-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.denning-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.furniture-desired').css({
				color: '#000',
				textDecoration:'none'
			});

			//COLUMN FOR WOMEN
			//first column 
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column
			$('#women-preppy-column-desired').css({
				display: 'none'
			});	
			//fourth column
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	

			//column for men
			//first column 
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column 
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column 
	 		$('#mens-streetwear-column-desired').css({	 
				display: 'none'
			});
 
	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 
			$('#home-column-desired').css({
				display: 'block'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			}); 
		});
		$('.decor-desired').click(function(){
			//title column
			$('#men-desired').css({
				color:'#fff',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#000'
			});
			// this is for the subtitle of men
			$('.bedding-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.decor-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.denning-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.furniture-desired').css({
				color: '#000',
				textDecoration:'none'
			});	

			//COLUMN FOR WOMEN
			//first column 
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column
			$('#women-preppy-column-desired').css({
				display: 'none'
			});	
			//fourth column
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	

			//column for men
			//first column 
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column 
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column 
	 		$('#mens-streetwear-column-desired').css({	 
				display: 'none'
			});
 
	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 
			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'block'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			}); 
		});
		$('.denning-desired').click(function(){
			//title column
			$('#men-desired').css({
				color:'#fff',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#000'
			});
			// this is for the subtitle of men
			$('.bedding-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.decor-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.denning-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});
			$('.furniture-desired').css({
				color: '#000',
				textDecoration:'none'
			});



			//COLUMN FOR WOMEN
			//first column 
			$('#women-column-desired').css({
				display: 'none'
			});
			//second column
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column
			$('#women-preppy-column-desired').css({
				display: 'none'
			});	
			//fourth column
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	

			//column for men
			//first column 
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column 
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column 
	 		$('#mens-streetwear-column-desired').css({	 
				display: 'none'
			});
 
	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 
			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'block'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			}); 
		});
		$('.furniture-desired').click(function(){
			//title column
			$('#men-desired').css({
				color:'#fff',
				textDecoration:'none'
			});
			$('#women-desired').css({
				color:'#fff'
			});
			$('#home-desired').css({
				color:'#000'
			});
			// this is for the subtitle of men
			$('.bedding-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.decor-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.denning-desired').css({
				color: '#000',
				textDecoration:'none'
			});
			$('.furniture-desired').css({
				color: '#ccc',
				textDecoration:'none'
			});


			/*
			*COLUMN FOR WOMEN
			*first column
			*/

 			$('#women-column-desired').css({
				display: 'none'
			});
			//second column
			$('#women-chic-column-desired').css({
				display: 'none'
			});
			//third column
			$('#women-preppy-column-desired').css({
				display: 'none'
			});	
			//fourth column
			$('#women-streetwear-column-desired').css({
				display: 'none'
			});	

			/*
			*column for men
			*first column 
			*/
			$('#mens-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#mens-menswear-column-desired').css({
				display: 'none'
			});
			//third column 
			$('#mens-preppy-column-desired').css({
				display: 'none'
			});
			//fourth column 
	 		$('#mens-streetwear-column-desired').css({	 
				display: 'none'
			});
 
	 		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 

			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'block'
			}); 
		}); 

		/*
			*"COLUMN FOR HOME"
			*first column
			*/ 
			$('#home-column-desired').css({
				display: 'none'
			});
			//second column 
			$('#home-decor-column-desired').css({
				display: 'none'
			});
			//third column
			$('#home-dinning-column-desired').css({
				display: 'none'
			});
			//fourth column 
			$('#home-furniture-column-desired').css({
				display: 'none'
			}); 
 	});
 
</script>
		
		<div class="container-fluid div-button-Women-Men-desired">   
			 <div class="row row123"> 
					<div class="col-sm-13">
						<ul class = "w-lu-dsired1">
							<li>
								<a  id = "women-desired" class = "w-women wom1">
									WOMEN
								</a>
								<a  id = "women-desired" style = "display:none" class = "w-women wom2">
									WOMEN
								</a>
							</li>
							<li>
								<a  id = "men-desired" class = "w-women men1">
									MEN
								</a>
								<a  id = "men-desired" style = "display:none" class = "w-women men2">
									MEN
								</a>
							</li>
							<li>
								<a id = "home-desired" class = "w-women home1">
									HOME
								</a>
								<a id = "home-desired" style = "display:none" class = "w-women home2">
									HOME
								</a>
							</li> 
						</ul>
					</div>
					<!--this is for women-->
					<div class="col-sm-13 women-chic">
						<ul class = "w-lu-dsired2"  >
							<li>
								<a class = "casual-desired w-women">
									CASUAL
								</a>
							</li>
							<li>
								<a class = "chic-desired w-women">
									CHIC
								</a>
							</li>
							<li>
								<a class = "preppy-desired w-women">
									PREPPY
								</a>
							</li>
							<li>
								<a class = "streetwear-desired w-women">
									STREETWEAR
								</a>
							</li> 
						</ul>
					</div>  
					<!--this is for men-->
					<div class="col-sm-13 mens-wear">
						<ul class = "w-lu-dsired2"  >
							<li>
								<a class = "casual-desired2 w-women">
									CASUAL
								</a>
							</li>
							<li>
								<a class = "menswear-desired w-women">
									MENSWEAR
								</a>
							</li>
							<li>
								<a class = "preppy-desired2 w-women">
									PREPPY
								</a>
							</li>
							<li>
								<a class = "streetwear-desired2 w-women">
									STREETWEAR
								</a>
							</li> 
						</ul>
					</div>
					<!--this is for home-->
					<div class="col-sm-13 home-decor">
						<ul class = "w-lu-dsired2"  >
							<li>
								<a class = "bedding-desired w-women">
									BEDDING
								</a>
							</li>
							<li>
								<a class = "decor-desired w-women">
									DECOR
								</a>
							</li>
							<li>
								<a class = "denning-desired w-women">
									DINNING
								</a>
							</li>
							<li>
								<a class = "furniture-desired w-women">
									FURNITURE
								</a>
							</li> 
						</ul>
					</div>      
				</div>
		</div>   
 
<div class="row main-container">

<div class="row main-container">

			<div>
				<!--this is the first column for women-->
				<div id = "women-column-desired"> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/AlexanderWang.jpg" alt="...">
									<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3"  id = "more-desired">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail" style ="text-decoration:none">
						     	 
						     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
						    	<span class="text-content" >
									<span>
										MORE
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 


					<div class = "more-item-desired"> 
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>
						  

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/EmilioPucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>   
					</div>
				</div>

				<!--this is the 2nd column for women-->
				<div id = "women-chic-column-desired">

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
									<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3"  id = "more-chic-desired">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail" style ="text-decoration:none">
							     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
							    	<span class="text-content" >
										<span>
											MORE
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 


					<div class = "more-chic-item-desired"> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>
						  

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/EmilioPucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>   

					</div>
				</div>

				<!--this is the 3th column for women-->
				<div id = "women-preppy-column-desired">

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg" alt="...">
									<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3"  id = "more-preppy-desired">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail" style ="text-decoration:none">
							     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
							    	<span class="text-content" >
										<span>
											MORE
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 


					<div class = "more-preppy-item-desired"> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>
						  

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/EmilioPucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>   

					</div>
				</div>

				<!--this is the 4th column for women-->
				<div id = "women-streetwear-column-desired">

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
									<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>  

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div> 

					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3"  id = "more-streetwear-desired">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail" style ="text-decoration:none">
							     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
							    	<span class="text-content" >
										<span>
											MORE
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 


					<div class = "more-streetwear-item-desired"> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>
						  

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
						</div> 

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/EmilioPucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>   

					</div>
				</div> 
			</div> <!--first row--> 


			<div>
				<!--this is the first column for men-->
				<div id = "mens-column-desired">


				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/men-shoes.jpg" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>
				<div class="col-xs-6 col-md-3"  id = "men-more-desired">
				<ul class = "hoverDisplay">
				<li class = "li-desired">
				    <a class="thumbnail" style ="text-decoration:none">
				     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
				    	<span class="text-content" >
							<span>
								MORE
							</span>
						</span>
				 	</a>
				</li>
				</ul>
				</div> 
				<div class = "show-more-desired">

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				   <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/beddings-bed.png" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>
				 </div>
				</div>	 
				<!--this is the second column for men-->
				<div id = "mens-menswear-column-desired">


				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>
				<div class="col-xs-6 col-md-3"  id = "more-menswear">
					<ul class = "hoverDisplay">
					<li class = "li-desired">
					    <a class="thumbnail" style ="text-decoration:none">
					     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
					    	<span class="text-content" >
								<span>
									MORE
								</span>
							</span>
					 	</a>
					</li>
					</ul>
				</div> 
				<div class = "show-more-menswear-items">

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				   <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/beddings-bed.png" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--this is the third column for men-->
				<div id = "mens-preppy-column-desired">


				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>
				<div class="col-xs-6 col-md-3"  id = "more-preppy">
					<ul class = "hoverDisplay">
					<li class = "li-desired">
					    <a class="thumbnail" style ="text-decoration:none">
					     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
					    	<span class="text-content" >
								<span>
									MORE
								</span>
							</span>
					 	</a>
					</li>
					</ul>
				</div> 
				<div class = "show-more-preppy-desired">

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				   <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/beddings-bed.png" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--this is the fourth column for men-->
				<div id = "mens-streetwear-column-desired">


				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/ChristianDior.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%"  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Coach.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Dolce-Gabbana.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>
				<div class="col-xs-6 col-md-3"  id = "more-streetwear">
					<ul class = "hoverDisplay">
					<li class = "li-desired">
					    <a class="thumbnail" style ="text-decoration:none">
					     	<img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Untitled-1.jpg" alt="...">
					    	<span class="text-content" >
								<span>
									MORE
								</span>
							</span>
					 	</a>
					</li>
					</ul>
				</div> 
				<div class = "show-more-streetwear-desired">

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Fendi.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Goyard.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				   <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Gucci.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/beddings-bed.png" alt="...">
				   				<span class="text-content">
									<span>
										Place Image
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				    <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 

				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div>  
				  
				  <div class="col-xs-6 col-md-3">
				  	<ul class = "hoverDisplay">
						<li class = "li-desired">
						    <a class="thumbnail">
						      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
						    	<span class="text-content">
									<span>
										Place Name
									</span>
								</span>
						 	</a>
						</li>
					</ul>
				  </div> 
						<div class="col-xs-6 col-md-3">
							<ul class = "hoverDisplay">
								<li class = "li-desired">
								    <a class="thumbnail">
								      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
								    	<span class="text-content">
											<span>
												Place Name
											</span>
										</span>
								 	</a>
								</li>
							</ul>
						</div>
					</div>
				</div>   
			</div> <!--second row--> 


			<div>
				<!--this is the first column for home-->
				<div id = "home-column-desired">
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/beddings-bed.png" alt="...">
										<span class="text-content">
										<span>
											Place Image
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
					  	<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
				</div>
				<!--this is the second column for home-->
				<div id = "home-decor-column-desired">
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
										<span class="text-content">
										<span>
											Place Image
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
					  	<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
				</div>
				<!--this is the third column for home-->
				<div id = "home-dinning-column-desired">
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/NIK_0242.jpg" alt="...">
										<span class="text-content">
										<span>
											Place Image
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
					  	<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
				</div>
				<!--this is the fourth column for home-->
				<div id = "home-furniture-column-desired">
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/8ff2001d8c_3003.jpg" alt="...">
										<span class="text-content">
										<span>
											Place Image
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/BottegaVeneta.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Burberry.jpg"  alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Cartier.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Celine.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>  
					<div class="col-xs-6 col-md-3">
						<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chanel.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div> 
					<div class="col-xs-6 col-md-3">
					  	<ul class = "hoverDisplay">
							<li class = "li-desired">
							    <a class="thumbnail">
							      <img style="width:100%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Chloe.jpg" alt="...">
							    	<span class="text-content">
										<span>
											Place Name
										</span>
									</span>
							 	</a>
							</li>
						</ul>
					</div>
				</div>
			</div> <!--third row-->
 
			<div class="col-sm-4">
			<a> 
			</a>
			</div>
			<div class="col-sm-4">
			<a href="new-consign" class = "footer-cosign-des" >
				COSIGN NOW
			</a>
			</div>
			<div class="col-sm-4">
			<a> 
			</a>
			</div>  
		</div>
	</div> 	 
</div>  
<?php
	require_once('footer.php');
?>
