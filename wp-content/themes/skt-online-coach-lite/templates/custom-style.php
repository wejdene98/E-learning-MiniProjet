<?php 
/**
 * The Custom Style for SKT Online Coach Lite
 *
 * Loads the dynamically generated Css in the header of the template.
 *
 * @package SKT Online Coach Lite
 * 
 * @since SKT Online Coach Lite 1.0
 */
?>
<?php function complete_dynamic_css() { ?>
<?php global $complete; ?>
<style type="text/css">

/*Fixed Background*/
<?php if(!empty($complete['background_fixed'])){ echo 'html body.custom-background{background-attachment:fixed;}';} ?>

	/*BOXED LAYOUT*/
	.site_boxed .layer_wrapper, body.home.site_boxed #slidera {width: <?php echo $complete['center_width']; ?>%;float: left;margin: 0 <?php $centerwidth = $complete['center_width']; echo (100- $centerwidth)/2; ?>%;
	background: <?php echo $complete['content_bg_color']; ?>;}
	.site_boxed .stat_bg, .site_boxed .stat_bg_overlay{width: <?php echo $complete['center_width']; ?>%;}
	.site_boxed .social_buttons{background: <?php echo $complete['content_bg_color']; ?>;}
	.site_boxed .center {width: 95%!important;margin: 0 auto;}
	.site_boxed .head_top .center{ width:95%!important;}

/*Site Content Text Style*/
<?php $content_font = $complete['content_font_id']; ?>
body, button, input, select, textarea{ 
	<?php if(!empty($content_font['font-family'])){ ?>font-family:<?php echo $content_font['font-family']; ?>; <?php } ?>
	<?php if(!empty($content_font['font-size'])){ ?>font-size:<?php echo $content_font['font-size']; ?>; <?php } ?>
}

.footer-post-area ul li h4,
.footer-post-area ul li h4 a{font-family:<?php echo $content_font['font-family']; ?>;}

.single_post .single_post_content .tabs li a:link, .single_post .single_post_content .tabs li a:visited{ color:<?php echo $complete['primtxt_color_id']; ?>;}

<?php if ( is_page()) { ?>
.page_head{ background:<?php echo $complete['page_header_color']; ?>; color:<?php echo $complete['page_header_txtcolor']; ?>;}
.page_head .postitle{color:<?php echo $complete['page_header_txtcolor']; ?>;}	
.page_head .layerbread a:link, .page_head .layerbread a:visited{color:<?php echo $complete['page_header_txtcolor']; ?>;}	
.page_head_bg{background:url(<?php echo $complete['pageheader_bg_image'] ?>);}
<?php } ?>

<?php if ( is_single() || is_category() || is_archive() || is_tag() || is_author() || (get_post_type() == 'product') ) { ?>
.post_head, .author_div{ background:<?php echo $complete['post_header_color']; ?>;}
.post_head_bg, .author_div_bg{background:url(<?php echo $complete['postheader_bg_image'] ?>);}
<?php } ?>

/*Feattured Boxes Section*/
.featured_area_bg{background:url(<?php echo $complete['homeblock_bg_setting'] ?>);}
.featured_area{background-color:<?php echo $complete['homeblock_color_id'] ?>;}
.featured_block img{height:<?php echo $complete['featured_image_height'] ?>; width:<?php echo $complete['featured_image_width'] ?>} 
.featured_block{background-color:<?php echo $complete['featured_block_bg'] ?>;}

.sktmore,
.newsletter-form input[type="submit"]{background-color:<?php echo $complete['featured_block_button_bg'] ?>;}
.sktmore:hover,
.newsletter-form input[type="submit"]:hover{background-color:<?php echo $complete['featured_block_hover_button_bg'] ?>;}

.expanding-grid .spacer{background-color:<?php echo $complete['expand_bg_color'] ?>;}
.expand-left h2, .expand-left{color:<?php echo $complete['expand_text_color'] ?>;}

.headingseperator h3{color:<?php echo $complete['h_seprator_text_color'] ?>;}
.headingseperator h3::after{border-bottom-color:<?php echo $complete['h_seprator_color'] ?>;}

.expanding-grid .links > li a.active:after{border-bottom-color:<?php echo $complete['expand_bg_color'] ?>;}

.squarebox{background-color:<?php echo $complete['square_bg_color'] ?>;}
.squarebox:hover{background-color:<?php echo $complete['square_bg_hover_color'] ?>;}
.squaretitle{color:<?php echo $complete['square_title_color'] ?>;}

.perfectbox{background-color:<?php echo $complete['perfect_bg_color'] ?>; border-color:<?php echo $complete['perfect_border_color'] ?>;}
.perfectborder:hover, .perfectbox:hover{border-color:<?php echo $complete['perfect_hover_border_color'] ?> !important;}

.post_block_style3{background-color:<?php echo $complete['style3_bg_color'] ?>; border-color:<?php echo $complete['style3_border_color'] ?>;}
.post_block_style3:before{background:<?php echo $complete['style3_hover_bg_color'] ?>;}

.skt-home-posts-row .skt-home-posts-inner{background-color:<?php echo $complete['homepost_boxbg_color'] ?>;}
.skt-home-posts-row .skt-home-posts-title a{color: <?php echo $complete['homepost_box_title_color'] ?>;}
.skt-home-posts-row .skt-home-posts-title{background-image: linear-gradient(to right, <?php echo $complete['homepost_title_bgcolor'] ?> , <?php echo $complete['homepost_title_grdcolor'] ?>); background-color: <?php echo $complete['homepost_title_bgcolor'] ?>;}
.skt-home-posts-row .skt-home-posts-date{background-image: linear-gradient(to right, <?php echo $complete['homepost_title_bgcolor'] ?> , <?php echo $complete['homepost_title_grdcolor'] ?>); color: <?php echo $complete['homepost_box_title_color'] ?>;}
.skt-home-posts-admin {color: <?php echo $complete['homepost_box_meta_color'] ?>;}
.skt-home-posts-row .skt-home-posts-content p {color: <?php echo $complete['homepost_box_text_color'] ?>;}


/*-----------------------------COLORS------------------------------------*/
		/*Header Color*/
		.header{background-color: rgba(<?php echo complete_hex2rgb($complete['head_color_id']);?>, <?php if(empty($complete['head_transparent'])){ echo '1'; }else { echo $complete['head_bg_trans'];} ?>);}
				
		<?php if('noslider' == $complete['slider_type_id']){ ?>
		/*Header Color*/
		body .header{ position:relative!important; background-color:<?php echo $complete['head_color_id']; ?>;}
		.page #slidera, .single #slidera, .archive #slidera, .search #slidera, .error404 #slidera{ height:auto!important;}
		<?php } ?>
		
		/*Head Top Bar Color*/
		.head-info-area{background-color: rgba(<?php echo complete_hex2rgb($complete['head_info_color_id']);?>, <?php if(empty($complete['head_info_bg_trans'])){ echo '1'; }else { echo $complete['head_info_bg_trans'];} ?>);}
		
		<?php if(is_front_page()){ ?>
		<?php if(!empty($complete['head_transparent'])){ ?>
		.has_trans_header .header_wrap {float: left; position: absolute;z-index: 999; width: 100%;}

		/*Boxed Header should have boxed width*/
		body.home.site_boxed .header_wrap.layer_wrapper{width: <?php echo $complete['center_width']; ?>%;float: left;margin: 0 <?php $centerwidth = $complete['center_width']; echo (100- $centerwidth)/2; ?>%;}
		
		.home.has_trans_header .header, .home.has_trans_header.page.page-template-page-frontpage_template .header{background-image:none;}
		<?php } ?>
		<?php } else { ?>
		.header{background:<?php echo $complete['head_color_id']; ?>!important; border: none;}
		<?php } ?>
		
		
		@media screen and (max-width: 767px){
		.home.has_trans_header .header{background:<?php echo $complete['head_color_id']; ?>!important;}
		}
		/*LOGO*/
		.logo img{height:<?php echo $complete['logo_image_height'] ?>; width:<?php echo $complete['logo_image_width'] ?>; margin-top:<?php echo $complete['logo_margin_top'] ?>;} 

		<?php $logofont = $complete['logo_font_id']; ?>
		.logo h2, .logo h1, .logo h2 a:link, .logo h2 a:visited, .logo h1 a:link, .logo h1 a:visited, .logo h2 a:hover, .logo h1 a:hover{ 
			font-family:'<?php echo $logofont['font-family']; ?>';
			font-size:<?php echo $logofont['font-size']; ?>;
			color:<?php echo $complete['logo_color_id']; ?>;
		}
		/*HEADER TEXT BAR*/
		<?php $tpbtfont = $complete['tpbt_font_id']; ?>
		.head-info-area, .head-info-area a:link, .head-info-area a:visited{ 
			<?php if(!empty($tpbtfont['font-family'])){ ?>font-family:'<?php echo $tpbtfont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($tpbtfont['font-size'])){ ?>font-size:<?php echo $tpbtfont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['tpbt_color_id']; ?>;
		}	
		
		.head-info-area a:hover{ 
			color:<?php echo $complete['tpbt_hvcolor_id']; ?>;
		}		
		
		a{color:<?php echo $complete['global_link_color_id']; ?>;}
		a:hover{color:<?php echo $complete['global_link_hvcolor_id']; ?>;}
			
		/*Slider Title*/
		<?php $sldttlefont = $complete['sldtitle_font_id']; ?>
		.title{ 
			<?php if(!empty($sldttlefont['font-family'])){ ?>font-family:'<?php echo $sldttlefont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($sldttlefont['font-size'])){ ?>font-size:<?php echo $sldttlefont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['slidetitle_color_id']; ?>;
		}	
		
		<?php $slddescfont = $complete['slddesc_font_id']; ?>
		.slidedesc{ 
			<?php if(!empty($slddescfont['font-family'])){ ?>font-family:'<?php echo $slddescfont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($slddescfont['font-size'])){ ?>font-size:<?php echo $slddescfont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['slddesc_color_id']; ?>;
		}	
		
		<?php $sldbtn = $complete['sldbtn_font_id']; ?>
		.slidebtn{ 
			<?php if(!empty($sldbtn['font-family'])){ ?>font-family:'<?php echo $sldbtn['font-family']; ?>'; <?php } ?>
			<?php if(!empty($sldbtn['font-size'])){ ?>font-size:<?php echo $sldbtn['font-size']; ?>;<?php } ?>;
		}
		.slider-main .nivo-caption .slidebtn a{ 
			color:<?php echo $complete['sldbtntext_color_id']; ?>; background-color:<?php echo $complete['sldbtn_color_id']; ?>;
		}	
		.slider-main .nivo-caption .slidebtn a:hover{background-color:<?php echo $complete['sldbtn_hvcolor_id']; ?>; color:<?php echo $complete['sldbtn_hvtextcolor_id']; ?>;}
		
		.nivo-controlNav a{background-color:<?php echo $complete['slide_pager_color_id']; ?>}
		.nivo-controlNav a.active{background-color:<?php echo $complete['slide_active_pager_color_id']; ?>}				
		
		.skt-slider-wave .skt-builder-wave-color{fill: <?php echo $complete['slider_wave_color']; ?>;} 
		
		/* Global H1 */	
				<?php $global_h1_font = $complete['global_h1_font_id']; ?>
		h1{ 
			<?php if(!empty($global_h1_font['font-family'])){ ?>font-family:'<?php echo $global_h1_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h1_font['font-size'])){ ?>font-size:<?php echo $global_h1_font['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['global_h1_color_id']; ?>;
		}
		
		h1 a:hover{ 
			color:<?php echo $complete['global_h1_hvcolor_id']; ?>;
		}
		
		/* Global H2 */	
				<?php $global_h2_font = $complete['global_h2_font_id']; ?>
		h2{ 
			<?php if(!empty($global_h2_font['font-family'])){ ?>font-family:'<?php echo $global_h2_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h2_font['font-size'])){ ?>font-size:<?php echo $global_h2_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h2_color_id']; ?>;
		}
		
		h2 a:hover{ 
			color:<?php echo $complete['global_h2_hvcolor_id']; ?>;
		}
				
		/* Global H3 */	
				<?php $global_h3_font = $complete['global_h3_font_id']; ?>
		h3{ 
			<?php if(!empty($global_h3_font['font-family'])){ ?>font-family:'<?php echo $global_h3_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h3_font['font-size'])){ ?>font-size:<?php echo $global_h3_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h3_color_id']; ?>;
		}
		
		h3 a:hover{ 
			color:<?php echo $complete['global_h3_hvcolor_id']; ?>;
		}
		
		/* Global H4 */	
				<?php $global_h4_font = $complete['global_h4_font_id']; ?>
		h4{ 
			<?php if(!empty($global_h4_font['font-family'])){ ?>font-family:'<?php echo $global_h4_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h4_font['font-size'])){ ?>font-size:<?php echo $global_h4_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h4_color_id']; ?>;
		}
		
		h4 a:hover{ 
			color:<?php echo $complete['global_h4_hvcolor_id']; ?>;
		}	
		
		/* Global H5 */	
				<?php $global_h5_font = $complete['global_h5_font_id']; ?>
		h5{ 
			<?php if(!empty($global_h5_font['font-family'])){ ?>font-family:'<?php echo $global_h5_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h5_font['font-size'])){ ?>font-size:<?php echo $global_h5_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h5_color_id']; ?>;
		}
		
		h5 a:hover{ 
			color:<?php echo $complete['global_h5_hvcolor_id']; ?>;
		}	
		
		/* Global H6 */	
				<?php $global_h6_font = $complete['global_h6_font_id']; ?>
		h6{ 
			<?php if(!empty($global_h6_font['font-family'])){ ?>font-family:'<?php echo $global_h6_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h6_font['font-size'])){ ?>font-size:<?php echo $global_h6_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h6_color_id']; ?>;
		}
		
		h6 a:hover{ 
			color:<?php echo $complete['global_h6_hvcolor_id']; ?>;
		}
		
		/* Post Meta Color */
		.post_block_style1_meta, .post_block_style1_meta a:link, .post_block_style1_meta a:visited, .post_block_style2_meta, .post_block_style2_meta a:link, .post_block_style2_meta a:visited, .single_metainfo, .single_metainfo a:link, .single_metainfo a:visited{ 
			color:<?php echo $complete['post_meta_color_id']; ?>;
		}
		/* Pricing Box Background Color */
		.pricing-box{background-color: rgba(<?php echo complete_hex2rgb($complete['pricing_box_bgcolor_id']);?>, 0.7); color:<?php echo $complete['pricing_box_text_id']; ?>;}
		.pricing-box:hover{background-color: rgba(<?php echo complete_hex2rgb($complete['pricing_box_hover_bgcolor_id']);?>, 0.7);}
		.pricing-box, .pricing-box h3, .pricing-box span, .pricing-box span i {color:<?php echo $complete['pricing_box_text_id']; ?>;} 
		.pricing-box span:before, .pricing-box span:after {background-color:<?php echo $complete['pricing_box_text_id']; ?>;}
		
		/* Product Color Setting*/
		.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3{color:<?php echo $complete['product_box_title_color_id']; ?>;}
		.woocommerce ul.products li.product .price {color:<?php echo $complete['product_box_price_color_id']; ?>;}
		.woocommerce ul.products li.product .button {background-color:<?php echo $complete['product_box_cartbg_color_id']; ?>; color:<?php echo $complete['product_box_cart_color_id']; ?>;}
		.woocommerce ul.products li.product .woocommerce-thumbnail-wrap {background-color:<?php echo $complete['product_box_hover_bgcolor_id']; ?>;}
		.woocommerce ul.products li.product:hover h2.woocommerce-loop-product__title {color:<?php echo $complete['product_box_hover_bgcolor_id']; ?>;}
		
		/* Team Box Background Color */
		.team-infobox{ 
			background-color:<?php echo $complete['team_box_color_id']; ?>;
		}
		
		/* Social Icon Background Color */
		.social-icons a:link, .social-icons a:visited{ 
			background-color:<?php echo $complete['social_icon_color_id']; ?>;
			color:<?php echo $complete['social_text_color_id']; ?>;
		}	
		
		/* Social Icon Hover Background Color */
		.social-icons a:hover{ 
			background-color:<?php echo $complete['social_hover_icon_color_id']; ?>;
			color:<?php echo $complete['social_text_color_id']; ?>;
		}
		
		/* Teambox Background Color */
		.testimonial-box{ 
			background-color:<?php echo $complete['testimonialbox_color_id']; ?>;
		}	
		.testimonial-box:after{ 
			border-top-color:<?php echo $complete['testimonialbox_color_id']; ?>;
		}
		.testimonilacontent, .bxslider li h3, .bxslider li p{color:<?php echo $complete['testimonialbox_txt_color']; ?>;}
		
		.bxslider li{background-color:<?php echo $complete['testimonialbox_color_id']; ?>; border-color:<?php echo $complete['testimonialbox_border_color']; ?>;}	
		.testimonilacontent::after{border-bottom-color:<?php echo $complete['testimonialbox_border_color']; ?>;}
		
		/* Pager Color */
		.bx-wrapper .bx-pager.bx-default-pager a:link, .bx-wrapper .bx-pager.bx-default-pager a:visited{ 
			background:<?php echo $complete['testimonial_pager_color_id']; ?>;
		}	
		
		/* Pager Active Color */
		.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active{ 
			background:<?php echo $complete['testimonial_activepager_color_id']; ?>;
		}
		
		/* Gallery Filter Active Bgcolor */
		.portfolio-categ li a:link, .portfolio-categ li a:visited{ 
			color:<?php echo $complete['gallery_filtertxt_color_id']; ?>;
		}		
		
		/* Gallery Filter Active Bgcolor */
		.portfolio-categ li.active a:link, .portfolio-categ li.active a:visited{ 
			color:<?php echo $complete['gallery_activefiltertxt_color_id']; ?>;
		}	
		
			
		
		.portfolio-content .portfolio-area li .image-block-title{background-color: rgba(<?php echo complete_hex2rgb($complete['gallery_title_bg_color_id']);?>, 0.7); color:<?php echo $complete['gallery_title_color_id']; ?>;}
		
		/* Skills Bar Background Color */
		.skill-bg{ 
			background-color:<?php echo $complete['skillsbar_bgcolor_id']; ?>;
		}	
		
		/* Skills Bar Text Color */
		.skillbar-title{ 
			color:<?php echo $complete['skillsbar_text_color_id']; ?>;
		}			
															
		#simple-menu{color:<?php echo $complete['menutxt_color_id']; ?>;}
		body.home.has_trans_header #simple-menu{color:<?php echo $complete['trans_header_color']; ?>;}
		span.desc{color:<?php echo $complete['logo_color_id']; ?>;}
		
		.header-extras li a,
		.header-extras li .header-search-toggle{color:<?php echo $complete['menutxt_color_id'] ?>;}
		.header-extras li a:hover,
		.header-extras li .header-search-toggle:hover{color: <?php echo $complete['menutxt_color_hover']; ?>;}
		.header-extras li .custom-cart-count{background-color: <?php echo $complete['menutxt_color_hover']; ?>; color:<?php echo $complete['menutxt_color_id'] ?>;}
		
		/*MENU Text Color*/
		#topmenu ul li a{color:<?php echo $complete['menutxt_color_id'] ?>;}
		#topmenu ul li.menu_hover a:link, #topmenu ul li.menu_hover a:visited{border-color:<?php echo $complete['menutxt_color_hover']; ?>;}
		#topmenu ul li.menu_hover>a:link, #topmenu ul li.menu_hover>a:visited, body.has_trans_header.home #topmenu ul li.menu_hover>a:link, body.has_trans_header.home #topmenu ul li.menu_hover>a:visited{color:<?php echo $complete['menutxt_color_hover'] ?>;}
		#topmenu ul li.current-menu-item>a:link, #topmenu ul li.current-menu-item>a:visited, #topmenu ul li.current-menu-parent>a:link, #topmenu ul li.current_page_parent>a:visited, #topmenu ul li.current-menu-ancestor>a:link, #topmenu ul li.current-menu-ancestor>a:visited{color:<?php echo $complete['menutxt_color_active'] ?>;}
		#topmenu ul li ul{border-color:<?php echo $complete['menutxt_color_hover']; ?> transparent transparent transparent;}
		#topmenu ul.menu>li:hover:after{background-color:<?php echo $complete['menutxt_color_hover']; ?>;}
		#topmenu ul li ul li a:hover{color:<?php echo $complete['menutxt_color_active']; ?>;}
		
		#topmenu ul li.appointment-btn a{background-color: <?php echo $complete['menutxt_color_active'] ?>; color: #fff !important;}
		#topmenu ul li.appointment-btn a:hover{background-color: <?php echo $complete['menutxt_color_id'] ?>; color: #fff !important;}
		
#topmenu ul li.current-menu-item > a:link:after, #topmenu ul li.current-menu-item > a:visited:after, #topmenu ul li.current-menu-parent > a:link:after, #topmenu ul li.current_page_parent > a:visited:after, #topmenu ul li.current-menu-ancestor > a:link:after, #topmenu ul li.current-menu-ancestor > a:visited:after{content:''; border-bottom-color:<?php echo $complete['menutxt_color_active']; ?> !important;}		
		
		#topmenu ul.menu ul li{background-color:<?php echo $complete['submnbg_color_id']; ?>;}		
		
		#topmenu ul.sub-menu li a, #topmenu ul.children li a{color:<?php echo $complete['submnu_textcolor_id']; ?>;}	
		#topmenu ul.sub-menu li a:hover, #topmenu ul.children li a:hover, #topmenu li.menu_highlight_slim:hover, #topmenu ul.sub-menu li.current_page_item a, #topmenu ul.children li.current_page_item a, #topmenu ul.sub-menu li.current-menu-item a, #topmenu ul.children li.current-menu-item a{background-color:<?php echo $complete['mnshvr_color_id']; ?> !important;}
		
		#topmenu ul li.register-button a{background-color: <?php echo $complete['register_btn_bgcolor']; ?>; color: <?php echo $complete['register_btn_textcolor']; ?> !important;}
		#topmenu ul li.register-button a:hover {background-color: <?php echo $complete['register_btn_hover_bgcolor']; ?>; color: <?php echo $complete['register_btn_hover_textcolor']; ?> !important;}
		#topmenu ul li.login-button a{border-color:<?php echo $complete['register_btn_bgcolor']; ?>;}


		.sidr{ background-color:<?php echo $complete['mobbg_color_id']; ?>;}
		.pad_menutitle{ background-color:<?php echo $complete['mobbgtop_color_id']; ?>;}
		.sidr ul li a, .sidr ul li span, .sidr ul li ul li a, .sidr ul li ul li span{color:<?php echo $complete['mobmenutxt_color_id']; ?>;}
		.sidr ul li.sidr-class-current-menu-item > a{color:<?php echo $complete['mobmenutxt_active_color_id']; ?>;}
		
		#simple-menu .fa-bars{color:<?php echo $complete['mobtoggle_color_id']; ?> !important;}
		.pad_menutitle .fa-bars, .pad_menutitle .fa-times{color:<?php echo $complete['mobtoggleinner_color_id']; ?> !important;}				

		.head_soc .social_bookmarks a:link, .head_soc .social_bookmarks a:visited{color:<?php echo $complete['menutxt_color_id'] ?>;}
		.head_soc .social_bookmarks.bookmark_hexagon a:before {border-bottom-color: rgba(<?php echo complete_hex2rgb($complete['menutxt_color_id']);?>, 0.3)!important;}
		.head_soc .social_bookmarks.bookmark_hexagon a i {background:rgba(<?php echo complete_hex2rgb($complete['menutxt_color_id']);?>, 0.3)!important;}
		.head_soc .social_bookmarks.bookmark_hexagon a:after { border-top-color:rgba(<?php echo complete_hex2rgb($complete['menutxt_color_id']);?>, 0.3)!important;}
		

<?php if($complete['sec_color_id']){ ?>
		/*BASE Color*/
		.widget_border, .heading_border, #wp-calendar #today, .thn_post_wrap .more-link:hover, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, #searchsubmit, .complete_pagenav a:hover, .nav-box a:hover .left_arro, .nav-box a:hover .right_arro, .pace .pace-progress, .homeposts_title .menu_border, span.widget_border, .ast_login_widget #loginform #wp-submit, .prog_wrap, .lts_layout1 a.image, .lts_layout2 a.image, .lts_layout3 a.image, .rel_tab:hover .related_img, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .img_hover, p.form-submit #submit, .optimposts .type-product a.button.add_to_cart_button{background:<?php echo $complete['sec_color_id'] ?>;} 
		
		.share_active, .comm_auth a, .logged-in-as a, .citeping a, .lay3 h2 a:hover, .lay4 h2 a:hover, .lay5 .postitle a:hover, .nivo-caption p a, .acord_text p a, .org_comment a, .org_ping a, .contact_submit input:hover, .widget_calendar td a, .ast_biotxt a, .ast_bio .ast_biotxt h3, .lts_layout2 .listing-item h2 a:hover, .lts_layout3 .listing-item h2 a:hover, .lts_layout4 .listing-item h2 a:hover, .lts_layout5 .listing-item h2 a:hover, .rel_tab:hover .rel_hover, .post-password-form input[type~=submit], .bio_head h3, .blog_mo a:hover, .ast_navigation a:hover, .lts_layout4 .blog_mo a:hover{color:<?php echo $complete['sec_color_id'] ?>;}
		#home_widgets .widget .thn_wgt_tt, #sidebar .widget .thn_wgt_tt, #footer .widget .thn_wgt_tt, .astwt_iframe a, .ast_bio .ast_biotxt h3, .ast_bio .ast_biotxt a, .nav-box a span, .lay2 h2.postitle:hover a{color:<?php echo $complete['sec_color_id'] ?>;}
		.pace .pace-activity{border-top-color: <?php echo $complete['sec_color_id']; ?>!important;border-left-color: <?php echo $complete['sec_color_id']; ?>!important;}
		.pace .pace-progress-inner{box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;
		  -webkit-box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;
		  -moz-box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;}
		
		.fotorama__thumb-border, .ast_navigation a:hover{ border-color:<?php echo $complete['sec_color_id'] ?>!important;}
		
		
		/*Text Color on BASE COLOR Element*/
		.icon_round a, #wp-calendar #today, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, .complete_pagenav a:hover, .ast_login_widget #loginform #wp-submit, #searchsubmit, .prog_wrap, .rel_tab .related_img i, .lay1 h2.postitle a, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .lts_layout1 .icon_wrap a, .lts_layout2 .icon_wrap a, .lts_layout3 .icon_wrap a, .lts_layout1 .icon_wrap a:hover{color:<?php echo $complete['sectxt_color_id']; ?>;}
		.thn_post_wrap .listing-item .moretag:hover, body .lts_layout1 .listing-item .title, .lts_layout2 .img_wrap .complete_plus, .img_hover .icon_wrap a, body .thn_post_wrap .lts_layout1 .icon_wrap a, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, p.form-submit #submit, .optimposts .type-product a.button.add_to_cart_button{color:<?php echo $complete['sectxt_color_id']; ?>;}

<?php } ?>



/*Sidebar Widget Background Color */
#sidebar .widget{ background:<?php echo $complete['sidebar_color_id']; ?>;}
#sidebar .widget_wrap{border-color:<?php echo $complete['sidebarborder_color_id']; ?>;}
/*Widget Title Color */
#sidebar .widget-title, #sidebar .widget-title a{color:<?php echo $complete['sidebar_tt_color_id'] ?>;}

#sidebar #sidebar .widget, #sidebar .widget .widget_wrap{ color:<?php echo $complete['sidebartxt_color_id'] ?>;}
#sidebar .widget .widgettitle, #sidebar .widget .widgettitle a:link, #sidebar .widget .widgettitle a:visited{font-size:<?php echo $complete['wgttitle_size_id']; ?>;}

#sidebar .widget li a, #sidebar .widget a{ color:<?php echo $complete['sidebarlink_color_id'] ?>;}
#sidebar .widget li a:hover, #sidebar .widget a:hover{ color:<?php echo $complete['sidebarlink_hover_color_id'] ?>;}


.flipcard .front{background-color:<?php echo $complete['flipbg_front_color_id'] ?>; border-color:<?php echo $complete['flipborder_front_color_id'] ?>;}

.flipcard .back{background-color:<?php echo $complete['flipbg_back_color_id'] ?>; border-color:<?php echo $complete['flipborder_back_color_id'] ?>;}

.divider5 span, .divider6 span{background-color:<?php echo $complete['divider_color_id'] ?>;}
.divider1, .divider2, .divider3, .divider4, .divider5, .divider6, .fusion-title .title-sep, .fusion-title.sep-underline, .product .product-border, .fusion-title .title-sep{border-color:<?php echo $complete['divider_color_id'] ?>;}

.timeline-both-side li .timeline-description{background-color:<?php echo $complete['timebox_color_id'] ?>;}

.timeline-both-side:before, .timeline-both-side li .border-line, .timeline-both-side li .border-line:before{background-color:<?php echo $complete['timeboxborder_color_id'] ?>;}

.timeline-both-side:after, .timeline-both-side li .timeline-description{border-color:<?php echo $complete['timeboxborder_color_id'] ?>;}
.griditem{background-color:<?php echo $complete['gridbox_color_id'] ?>;}
.griditem{border-color:<?php echo $complete['gridboxborder_color_id'] ?>;}

.serviceboxbg{background:rgba(<?php echo complete_hex2rgb($complete['service_box_bg']);?>, 0.8); border-right-color:<?php echo $complete['box_right_border'] ?>;}
.serviceboxbg:hover{background-color:<?php echo $complete['service_box_bg_hover'] ?>;}
.servicebox h3, .serviceboxbg p{color:<?php echo $complete['box_color_text'] ?> !important;}
.sktgo, .sktgo:hover{background-color:<?php echo $complete['go_bg_color'] ?>;}

#footer .footercols1 h3, #footer .footercols2 h3, #footer .footercols3 h3, #footer .footercols4 h3{color:<?php echo $complete['footer_title_color']; ?>;}

#footer .footercols1 h3::after,
#footer .footercols2 h3::after,
#footer .footercols3 h3::after,
#footer .footercols4 h3::after{background-color: <?php echo $complete['footer_title_border_color']; ?>;}

.footer-infobox .center{border-color: <?php echo $complete['footer_infobox_border_color']; ?>;}

.footmenu li a,
.footer-blog-posts ul li a{color: <?php echo $complete['footer_menu_color']; ?>;}

.footmenu li a:hover,
.footer-blog-posts ul li a:hover,
.footmenu li.current-menu-item a,
.footmenu li.current_page_item a{color: <?php echo $complete['footer_menu_hover_color']; ?>;}

/*FOOTER WIDGET COLORS*/
#footer{background-color: <?php echo $complete['footer_color_id']; ?>; background-image: url(<?php echo $complete['footer_bg_image']; ?>);}
#footer .footercols1, #footer .footercols2, #footer .footercols3, #footer .footercols4, .footer-post-area ul li h4, .footer-post-area ul li h4 a:link, .footer-post-area ul li h4 a:visited{color:<?php echo $complete['footwdgtxt_color_id']; ?>;}


/*COPYRIGHT COLORS*/
#copyright{background-color: <?php echo $complete['copyright_bg_color']; ?>;}
.copytext, .copytext a:link, .copytext a:visited{color: <?php echo $complete['copyright_txt_color']; ?>;}

.foot_soc .social_bookmarks a:link, .foot_soc .social_bookmarks a:visited{color:<?php echo $complete['copyright_txt_color'] ?>;}
.foot_soc .social_bookmarks.bookmark_hexagon a:before {border-bottom-color: rgba(<?php echo complete_hex2rgb($complete['copyright_txt_color']);?>, 0.3);}
.foot_soc .social_bookmarks.bookmark_hexagon a i {background:rgba(<?php echo complete_hex2rgb($complete['copyright_txt_color']);?>, 0.3);}
.foot_soc .social_bookmarks.bookmark_hexagon a:after { border-top-color:rgba(<?php echo complete_hex2rgb($complete['copyright_txt_color']);?>, 0.3);}


<?php if(get_background_color() == ''){?>#frontsidebar, .fixed_wrap.fixindex.dummypost, #slidera{ background-color:#<?php echo get_background_color(); ?>;} <?php } ?>

/*-------------------------------------TYPOGRAPHY--------------------------------------*/

/*Post Titles and headings Font*/
.postitle, .product_title{ font-family:<?php echo $complete['ptitle_font_id']['font-family']; ?>;}

/*Menu Font*/
#topmenu ul li a{ font-family:<?php echo $complete['mnutitle_font_id']['font-family']; ?>;}

<?php if((!empty($complete['txt_upcase_id']))){ ?>
.midrow_block h3, .lay1 h2.postitle, .more-link, .moretag, .single_post .postitle, .related_h3, .comments_template #comments, #comments_ping, #reply-title, #submit, #sidebar .widget .widgettitle, #sidebar .widget .widgettitle a, .search_term h2, .search_term #searchsubmit, .error_msg #searchsubmit, #footer .widgets .widgettitle, .home_title, body .lts_layout1 .listing-item .title, .lay4 h2.postitle, .lay2 h2.postitle a, #home_widgets .widget .widgettitle, .product_title, .page_head h1, .featured_area h2, .featured_block h3, h1, h2, h3, h4, h5, h6{ text-transform:uppercase; letter-spacing:1px;}
<?php } ?>

<?php if((!empty($complete['mnutxt_upcase_id']))){ ?>
#topmenu ul li a{ text-transform:uppercase; letter-spacing:1px;}
<?php } ?>

#topmenu ul li a{font-size:<?php echo $complete['menu_size_id']; ?>;}
#topmenu ul li {line-height: <?php echo $complete['menu_size_id']; ?>;}

<?php if($complete['primtxt_color_id']){ ?>
/*Body Text Color*/
body, .home_cat a, .contact_submit input, .comment-form-comment textarea{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.single_post_content .tabs li a{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.thn_post_wrap .listing-item .moretag{ color:<?php echo $complete['primtxt_color_id']; ?>;}
<?php } ?>	
	

<?php if($complete['title_txt_color_id']){ ?>
/*Post Title */
.postitle, .postitle a, .nav-box a, h3#comments, h3#comments_ping, .comment-reply-title, .related_h3, .nocomments, .lts_layout2 .listing-item h2 a, .lts_layout3 .listing-item h2 a, .lts_layout4 .listing-item h2 a, .author_inner h5, .product_title, .woocommerce-tabs h2, .related.products h2, .optimposts .type-product h2.postitle a, .woocommerce ul.products li.product h3{ text-decoration:none; color:<?php echo $complete['title_txt_color_id'] ?>;}
<?php } ?>

/*Woocommerce*/
.optimposts .type-product a.button.add_to_cart_button:hover{background-color:<?php echo $complete['sectxt_color_id'] ?>;color:<?php echo $complete['sec_color_id']; ?>;} 
.optimposts .lay2_wrap .type-product span.price, .optimposts .lay3_wrap .type-product span.price, .optimposts .lay4_wrap  .type-product span.price, .optimposts .lay4_wrap  .type-product a.button.add_to_cart_button{color:<?php echo $complete['title_txt_color_id'] ?>;}
.optimposts .lay2_wrap .type-product a.button.add_to_cart_button:before, .optimposts .lay3_wrap .type-product a.button.add_to_cart_button:before{color:<?php echo $complete['title_txt_color_id'] ?>;}
.optimposts .lay2_wrap .type-product a.button.add_to_cart_button:hover:before, .optimposts .lay3_wrap .type-product a.button.add_to_cart_button:hover:before, .optimposts .lay4_wrap  .type-product h2.postitle a{color:<?php echo $complete['sec_color_id'] ?>;}


<?php if(!$complete['show_blog_thumb'] ) { ?>
.page-template-templatespage-blog_template-php .lay4 .post_content{width:100%;}
<?php } ?>

@media screen and (max-width: 480px){
body.home.has_trans_header .header .logo h1 a:link, body.home.has_trans_header .header .logo h1 a:visited{ color:<?php echo $complete['logo_color_id']; ?>!important;}
body.home.has_trans_header .header #simple-menu{color:<?php echo $complete['menutxt_color_id']; ?>!important;}
}

/*USER'S CUSTOM CSS---------------------------------------------------------*/
<?php if ( ! empty ( $complete['custom-css'] ) ) { ?><?php echo stripslashes($complete['custom-css']); ?><?php } ?>
/*---------------------------------------------------------*/
</style>

<!--[if IE]>
<style type="text/css">
.text_block_wrap, .home .lay1, .home .lay2, .home .lay3, .home .lay4, .home .lay5, .home_testi .looper, #footer .widgets{opacity:1!important;}
#topmenu ul li a{display: block;padding: 20px; background:url(#);}
</style>
<![endif]-->
<?php } ?>
<?php add_action( 'wp_head', 'complete_dynamic_css'); ?>