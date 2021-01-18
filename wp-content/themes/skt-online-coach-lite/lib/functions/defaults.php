<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'woo_shop_page_layout_id' => 'wooshop_layout3',
		'woo_single_product_layout_id' => 'woosingle_layout3',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout2',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '0',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('&copy; Copyright 2020 <a href="#" style="color:#fff;">Online Coach</a>. All Rights Reserved Designed by <span style="color:#fff;">SKT Themes</span>', 'complete'),
		'phntp_text_id' => __('<i class="fa fa-phone" aria-hidden="true"></i> 12 8888 6666', 'complete'),
		'emltp_text' => __('<i class="fa fa-envelope" aria-hidden="true"></i> info@sitename.com', 'complete'),
		'sintp_text' => __('', 'complete'),
		'suptp_text' => __('[social_area]
			[social icon="facebook" link="#"]
			[social icon="twitter" link="#"]
			[social icon="google-plus" link="#"]
			[social icon="linkedin" link="#"]
			[social icon="pinterest" link="#"]
		[/social_area]', 'complete'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '700',
		'slidepause' => '4000',
		'slidenav' => 'false',
		'slidepage' => 'true',
		
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',
		
		'slide_image1' => ''.get_template_directory_uri().'/images/slides/slider1.jpg',
        'slide_title1' => '<small style="color:#fff;">Inspired to succeed</small> Online Coach',
        'slide_desc1' => 'Pellentesque fermentum eros varius domatti <br> posuereting lectus dignissim.',
        'slide_link1' => '#',
        'slide_btn1' => 'READ MORE',
        
        'slide_image2' => ''.get_template_directory_uri().'/images/slides/slider2.jpg',
        'slide_title2' => '<small style="color:#fff;">Inspired to succeed</small> Online Coach',
        'slide_desc2' => 'Pellentesque fermentum eros varius domatti <br> posuereting lectus dignissim.',
        'slide_link2' => '#',
        'slide_btn2' => 'READ MORE',
        
        'slide_image3' => ''.get_template_directory_uri().'/images/slides/slider3.jpg',
        'slide_title3' => '<small style="color:#fff;">Inspired to succeed</small> Online Coach',
        'slide_desc3' => 'Pellentesque fermentum eros varius domatti <br> posuereting lectus dignissim.',
        'slide_link3' => '#',
        'slide_btn3' => 'READ MORE',
		
		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#027ef3',
		'submnu_textcolor_id' => '#282828',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#f8f8f8',
		'mobbg_color_id' => '#282828',
		'mobbgtop_color_id' => '#027ef3',
		'mobmenutxt_color_id' => '#ffffff',
		'mobmenutxt_active_color_id' => '#027ef3',
		
		'register_btn_bgcolor' => '#027ef3',
		'register_btn_textcolor' => '#ffffff',
		'register_btn_hover_bgcolor' => '#282828',
		'register_btn_hover_textcolor' => '#ffffff',
		
		'mobtoggle_color_id' => '#027ef3',
		'mobtoggleinner_color_id' => '#ffffff',
			
		'sectxt_color_id' => '#ffffff',
		'content_font_id' =>  array('font-family' => 'Assistant', 'font-size' => '16px'),
		'primtxt_color_id' => '#2b2b2b',
		'logo_image_id' => array('url'=>''.get_template_directory_uri().'/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Assistant', 'font-size' => '40px'),
		'logo_color_id' => '#282828',
		
		'logo_image_height' => '45px;',
		'logo_image_width' => '103px;',
		'logo_margin_top' => '20px;',
		
		'tpbt_font_id' => array('font-family' => 'Assistant', 'font-size' => '16px'),
		'tpbt_color_id' => '#ffffff',
		'tpbt_hvcolor_id' => '#edecec',	
		
		'sldtitle_font_id' => array('font-family' => 'Playfair Display', 'font-size' => '74px'),
		'slddesc_font_id' => array('font-family' => 'Assistant', 'font-size' => '19px'),
		'sldbtn_font_id' => array('font-family' => 'Assistant', 'font-size' => '18px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#fff',
		'sldbtn_color_id' => '#027ef3',
		'sldbtn_hvtextcolor_id' => '#ffffff',
		'sldbtn_hvcolor_id' => '#282828',
		
		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#027ef3',
		'slider_wave_color' => '#ffffff',
			
		'global_link_color_id' => '#027ef3',
		'global_link_hvcolor_id' => '#685031',		
		
		'global_h1_color_id' => '#282828',
		'global_h1_hvcolor_id' => '#027ef3',	
		'global_h2_color_id' => '#282828',
		'global_h2_hvcolor_id' => '#027ef3',
		'global_h3_color_id' => '#282828',
		'global_h3_hvcolor_id' => '#027ef3',
		'global_h4_color_id' => '#282828',
		'global_h4_hvcolor_id' => '#027ef3',
		'global_h5_color_id' => '#282828',
		'global_h5_hvcolor_id' => '#027ef3',
		'global_h6_color_id' => '#282828',
		'global_h6_hvcolor_id' => '#027ef3',	
		
		'post_meta_color_id' => '#282828',
		'team_box_color_id' => '#f7f7f7',
		
		'pricing_box_bgcolor_id' => '#000000',
		'pricing_box_hover_bgcolor_id' => '#027ef3',
		'pricing_box_text_id' => '#ffffff',
		
		'product_box_title_color_id' => '#181818',
		'product_box_price_color_id' => '#a2a1a1',
		'product_box_cartbg_color_id' => '#ffffff',
		'product_box_cart_color_id' => '#181818',
		'product_box_hover_bgcolor_id' => '#027ef3',
		
		'social_text_color_id' => '#ffffff',
		'social_icon_color_id' => '#1c1c1c',
		'social_hover_icon_color_id' => '#027ef3',
		'testimonialbox_color_id' => '#ffffff',		
		'testimonialbox_txt_color' => '#4d4d4d',
		'testimonial_pager_color_id' => '#000000',
		'testimonialbox_border_color' => '#e8e7e7',
		'testimonial_activepager_color_id' => '#027ef3',
		'gallery_filtertxt_color_id' => '#909090',
		'gallery_activefiltertxt_color_id' => '#027ef3',
		'gallery_title_color_id' => '#fff',
		'gallery_title_bg_color_id' => '#027ef3',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Assistant', 'font-size' => '32px'),
		'global_h2_font_id' => array('font-family' => 'Playfair Display', 'font-size' => '28px'),
		'global_h3_font_id' => array('font-family' => 'Assistant', 'font-size' => '24px'),
		'global_h4_font_id' => array('font-family' => 'Assistant', 'font-size' => '13px'),
		'global_h5_font_id' => array('font-family' => 'Assistant', 'font-size' => '11px'),
		'global_h6_font_id' => array('font-family' => 'Assistant', 'font-size' => '9px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',
		'contact_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336003.6066860609!2d2.349634820486094!3d48.8576730786213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x040b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1433482358672',
		
		'head_bg_trans' => '0',
		'head_color_id' => '#ffffff',
		'head_info_color_id' => '#282828',
		'head_info_bg_trans' => '1',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#282828',
		'menutxt_color_hover' => '#027ef3',
		'menutxt_color_active' => '#027ef3',
		'menu_size_id' => '17px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#027ef3',
		'sidebarlink_hover_color_id' => '#999999',
		'flipbg_front_color_id' => '#ffffff',
		'flipbg_back_color_id' => '#f7f7f7',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		
		'service_box_bg' => '#027ef3',
		'service_box_bg_hover' => '#685031',
		'box_color_text' => '#ffffff',
		'go_bg_color' => '#ffffff',
		'box_right_border' => '#30a0fd',
		
		'expand_bg_color' => '#027ef3',
		'expand_text_color' => '#000000',
		
		'h_seprator_color' => '#027ef3',
		'h_seprator_text_color' => '#000000',
		
		'square_bg_color' => '#ffffff',
		'square_bg_hover_color' => '#79ab9f',
		'square_title_color' => '#000000',
		
		'style3_bg_color' => '#ffffff',
		'style3_hover_bg_color' => '#9f9f9f',
		'style3_border_color' => '#eaeaea',
		
		'homepost_boxbg_color' => '#ffffff',
		'homepost_box_title_color' => '#ffffff',
		'homepost_title_bgcolor' => '#0363c4',
		'homepost_title_grdcolor' => '#01a9e8',
		'homepost_box_meta_color' => '#a3a3a3',
		'homepost_box_text_color' => '#3b3b3b',
		
		'perfect_bg_color' => '#ffffff',
		'perfect_border_color' => '#eaeaea',
		'perfect_hover_border_color' => '#027ef3',
 
		'foot_layout_id' => '4',
		'footer_color_id' => '#1c1c1c',
		'footer_bg_image' => '',
		'footwdgtxt_color_id' => '#bcbbbb',
		'footer_title_color' => '#ffffff',
		'footer_title_border_color' => '#fff',
		'ptitle_font_id' =>  array('font-family' => 'Assistant', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Assistant', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '0',
		'copyright_bg_color' => '#1c1c1c',
		'copyright_txt_color' => '#bcbbbb',
		
		//Footer Info Box
		'footer_infobox_border_color' => '#435f8e',
		
		'footer_menu_color' => '#a6a6a6',
		'footer_menu_hover_color' => '#ffffff',
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'complete'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'complete'),
		'recentpost_block_button' => __('Read More', 'complete'),
		
		'featured_block_button_bg' => '#027ef3',
		'featured_block_hover_button_bg' => '#393939',
		
		//Footer Column 1
		'foot_cols1_title' => __('ONLINE COACH', 'complete'),
		'foot_cols1_content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus condimentum mauris a quam sodales rutrum. Donec non placerat urna. [social_area][social icon="facebook" link="#"][social icon="twitter" link="#"][social icon="google-plus" link="#"][social icon="instagram" link="#"][social icon="linkedin" link="#"][social icon="pinterest" link="#"][/social_area]',
		//Footer Column 1
		
		//Footer Column 2
		'foot_cols2_title' => __('LATEST NEWS', 'complete'),
		'foot_cols2_content' => '[footermenu menu="news"]',
		//Footer Column 2
		
		//Footer Column 3
		'foot_cols3_title' => __('QUICK LINKS', 'complete'),
		'foot_cols3_content' => '[footermenu menu="footer"]',
		//Footer Column 3
		
		//Footer Column 4
		'foot_cols4_title' => __('CONTACT INFO', 'complete'),
		'foot_cols4_content' => 'Street 238,52 tempor <br> Donec ultricies mattis nulla, suscipit risus tristique utmattis nulla.[space height="30"]<p style="margin-bottom: 10px;"><span style="color: ##a6a6a6; margin-right: 30px;">Phone:</span> 1.800.555.6789</p><p style="margin-bottom: 5px;"><span style="color: ##a6a6a6; margin-right: 34px;">E-mail:</span>info@sktthemes.org</a></p><p style="margin-bottom: 5px;"><span style="color: ##a6a6a6; margin-right: 23px;">Website:</span>https://sktthemes.org</a></p>',
		//Footer Column 4
		
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'hide_foot_infobox' => '0',
		'footer_logo_id' =>array( 'url'=> ''.get_template_directory_uri().'/images/footer-logo.png' ),
		'footer_social_icon' => __('[social_area][social icon="facebook" link="#"][social icon="twitter" link="#"][social icon="google-plus" link="#"][social icon="instagram" link="#"][social icon="linkedin" link="#"][social icon="pinterest" link="#"][/social_area]','complete'),
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => 'span.desc{display: none;}',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>