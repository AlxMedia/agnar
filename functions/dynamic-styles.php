<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'agnar_hex2rgb' ) ) {

	function agnar_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'agnar_enqueue_google_fonts' ) ) {

	function agnar_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display' ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'agnar_enqueue_google_fonts' ); 


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'agnar_dynamic_css' ) ) {

	function agnar_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = agnar_hex2rgb($color_1);
			
			// start output
			$styles = '';	
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			if ( ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// container width
			if ( get_theme_mod('container-width','1920') != '1920' ) {			
				if ( get_theme_mod( 'boxed' ) ) { 
					$styles .= '.boxed #wrapper, .container-inner { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
				else {
					$styles .= '.container-inner { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
			}
			// primary color
			if ( get_theme_mod('color-1','#00b2d7') != '#00b2d7' ) {
				$styles .= '
::selection { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }
::-moz-selection { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }

a,
.themeform label .required,
.toggle-search:hover,
.toggle-search.active,
.post-hover:hover .post-title a,
.post-title a:hover,
.post-nav li a:hover span,
.post-nav li a:hover i,
.widget a:hover,
.widget > ul li a:hover:before,
.widget > h3:after,
.widget_rss ul li a,
.widget_calendar a,
.alx-tabs-nav li.active a,
.alx-tab .tab-item-category a,
.alx-posts .post-item-category a,
.alx-tab li:hover .tab-item-title a,
.alx-tab li:hover .tab-item-comment a,
.alx-posts li:hover .post-item-title a,
.comment-tabs li.active a,
.comment-awaiting-moderation,
.child-menu a:hover,
.child-menu .current_page_item > a,
.wp-pagenavi a { color: '.esc_attr( get_theme_mod('color-1') ).'; }

#wrap-nav-header .nav-menu:not(.mobile) a:hover { color: '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current_page_item > span > a:before, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-menu-item > span > a:before, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-menu-ancestor > span > a:before, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-post-parent > span > a:before { border-bottom: 8px solid '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current_page_item > span, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-menu-item > span, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-menu-ancestor > span, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-post-parent > span { border-bottom-color: '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current_page_item > span > a, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-menu-item > span > a, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-menu-ancestor > span > a, 
#wrap-nav-header .nav-menu:not(.mobile) > div > ul > li.current-post-parent > span > a { color: '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-header .nav-menu:not(.mobile) ul ul li.current_page_item > span > a, 
#wrap-nav-header .nav-menu:not(.mobile) ul ul li.current-menu-item > span > a, 
#wrap-nav-header .nav-menu:not(.mobile) ul ul li.current-menu-ancestor > span > a, 
#wrap-nav-header .nav-menu:not(.mobile) ul ul li.current-post-parent > span > a { color: '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-footer .nav-menu:not(.mobile) a:hover { color: '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-footer .nav-menu:not(.mobile) li.current_page_item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) li.current-menu-item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) li.current-menu-ancestor > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) li.current-post-parent > span > a { color: '.esc_attr( get_theme_mod('color-1') ).'; }
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current_page_item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current-menu-item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current-menu-ancestor > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current-post-parent > span > a { color: '.esc_attr( get_theme_mod('color-1') ).'; }

.themeform input[type="button"],
.themeform input[type="reset"],
.themeform input[type="submit"],
.themeform button[type="button"],
.themeform button[type="reset"],
.themeform button[type="submit"],
.featured-category-title,
.post-comments,
.post-tags a:hover,
.author-bio .bio-avatar:after,
.widget_calendar caption,
.commentlist li.bypostauthor > .comment-body:after,
.commentlist li.comment-author-admin > .comment-body:after { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }

.flex-item .avatar:hover { border-color: '.esc_attr( get_theme_mod('color-1') ).'; }

#header-content,
.featured-category-title span:before,
.alx-tabs-nav li.active a { border-top-color: '.esc_attr( get_theme_mod('color-1') ).';  }

.featured-category-title span:before,
.widget > h3 > span,
.comment-tabs li.active a,
.wp-pagenavi a:hover,
.wp-pagenavi a:active,
.wp-pagenavi span.current { border-bottom-color: '.esc_attr( get_theme_mod('color-1') ).';  }

.featured-category-title span:after,
.post-comments > span:before { border-right-color: '.esc_attr( get_theme_mod('color-1') ).';  }

.featured-category-title span:before { border-left-color: '.esc_attr( get_theme_mod('color-1') ).';  }				
				'."\n";
			}
			// mobile menu color
			if ( get_theme_mod('color-mobile-menu','#222222') != '#222222' ) {
				$styles .= '
#wrap-nav-mobile .nav-menu.mobile { background: '.esc_attr( get_theme_mod('color-mobile-menu') ).'; }
#wrap-nav-mobile .nav-menu.mobile ul ul { background: rgba(0,0,0,0.05); }
#wrap-nav-mobile .nav-menu.mobile ul li .menu-item-wrapper,
#wrap-nav-mobile .nav-menu.mobile ul ul li .menu-item-wrapper { border-bottom: 1px solid rgba(255,255,255,0.12); }
#wrap-nav-mobile .nav-menu.mobile ul button,
#wrap-nav-mobile .nav-menu.mobile ul ul button { border-left: 1px solid rgba(255,255,255,0.12); }
#wrap-nav-mobile .nav-menu.mobile > div > ul { border-top: 1px solid rgba(255,255,255,0.12); }
				'."\n";
			}
			// topbar menu color
			if ( get_theme_mod('color-topbar-menu','#222222') != '#222222' ) {
				$styles .= '
#wrap-nav-topbar { background: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; }
#wrap-nav-topbar .nav-menu:not(.mobile) .menu ul { background: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; }
#wrap-nav-topbar .nav-menu:not(.mobile) .menu ul:after { border-bottom-color: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; }
#wrap-nav-topbar .nav-menu:not(.mobile) .menu ul ul:after { border-right-color: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; border-bottom-color: transparent; }
#wrap-nav-topbar .nav-menu.mobile { background: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; }
#wrap-nav-topbar .nav-menu.mobile ul ul { background: rgba(0,0,0,0.05); }
#wrap-nav-topbar .nav-menu.mobile ul li .menu-item-wrapper,
#wrap-nav-topbar .nav-menu.mobile ul ul li .menu-item-wrapper { border-bottom: 1px solid rgba(255,255,255,0.12); }
#wrap-nav-topbar .nav-menu.mobile ul button,
#wrap-nav-topbar .nav-menu.mobile ul ul button { border-left: 1px solid rgba(255,255,255,0.12); }
#wrap-nav-topbar .nav-menu.mobile > div > ul { border-top: 1px solid rgba(255,255,255,0.12); }
				'."\n";
			}
			// header border color
			if ( get_theme_mod('color-border-line','#00b2d7') != '#00b2d7' ) {
				$styles .= '#header-content { border-top-color: '.esc_attr( get_theme_mod('color-border-line') ).'; }'."\n";
			}
			// header border color height
			if ( get_theme_mod('color-border-line-height','6') != '6' ) {
				$styles .= '#header-content { border-top-width: '.esc_attr( get_theme_mod('color-border-line-height') ).'px; }'."\n";
			}	
			// header color
			if ( get_theme_mod('color-header','#ffffff') != '#ffffff' ) {
				$styles .= '
#header-content { background: '.esc_attr( get_theme_mod('color-header') ).'; border-bottom: 1px solid rgba(0,0,0,0.2) }
.site-title a { color: #fff; }
.site-description { color: rgba(255,255,255,0.7); }
.toggle-search { color: #fff; border-color: rgba(255,255,255,0.2); }
@media only screen and (min-width: 720px) {
	.toggle-search .svg-icon { fill: #fff; }
	.toggle-search:hover .svg-icon,
	.toggle-search.active .svg-icon { fill: #fff; }
}
.search-expand { background: '.esc_attr( get_theme_mod('color-header') ).'; border-color: rgba(255,255,255,0.2); }
#header .social-links .social-tooltip { color: #fff; }
@media only screen and (max-width: 719px) {
	#header .social-links { border-top-color: rgba(255,255,255,0.2)!important; }
	.toggle-search { background: #fff; color: #555; border-right-color: #eee; }
	.toggle-search:hover,
	.toggle-search.active { color: #555; }
	.search-expand { background: transparent; }
}
				'."\n";
			}
			// footer menu color
			if ( get_theme_mod('color-footer-menu','#eeeeee') != '#eeeeee' ) {
				$styles .= '
#footer-bottom #back-to-top,
#footer-bottom #back-to-top:hover { background-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; color: #fff; }
#wrap-nav-footer { background-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; }

#wrap-nav-footer .nav-menu:not(.mobile) a { color: rgba(255,255,255,0.8); }
#wrap-nav-footer .nav-menu:not(.mobile) a:hover { color: #fff; }
#wrap-nav-footer .nav-menu:not(.mobile) ul ul a { color: rgba(0,0,0,0.65); }
#wrap-nav-footer .nav-menu:not(.mobile) ul ul a:hover { color: rgba(0,0,0,0.9); }

#wrap-nav-footer .nav-menu:not(.mobile) li.current_page_item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) li.current-menu-item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) li.current-menu-ancestor > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) li.current-post-parent > span > a { color: #fff; }
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current_page_item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current-menu-item > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current-menu-ancestor > span > a, 
#wrap-nav-footer .nav-menu:not(.mobile) ul ul li.current-post-parent > span > a { color: #333; }

#wrap-nav-footer .nav-menu:not(.mobile) button .svg-icon { fill: rgba(255,255,255,0.2); }
#wrap-nav-footer .nav-menu:not(.mobile) button.active { background: rgba(255,255,255,0.1); }
#wrap-nav-footer .nav-menu:not(.mobile) ul ul button .svg-icon { fill: rgba(0,0,0,0.2); }
#wrap-nav-footer .nav-menu:not(.mobile) ul ul button.active { background: rgba(0,0,0,0.05); }

#wrap-nav-footer .menu-toggle-icon span { background: #fff; }
#wrap-nav-footer .nav-menu.mobile { background: '.esc_attr( get_theme_mod('color-footer-menu') ).'; border-top: none; }
#wrap-nav-footer .nav-menu.mobile .svg-icon { fill: #fff; }
#wrap-nav-footer .nav-menu.mobile button.active .svg-icon { fill: #fff; }
#wrap-nav-footer .nav-menu.mobile ul ul { background: rgba(0,0,0,0.05); }
#wrap-nav-footer .nav-menu.mobile ul li .menu-item-wrapper,
#wrap-nav-footer .nav-menu.mobile ul ul li .menu-item-wrapper { border-bottom: 1px solid rgba(255,255,255,0.07); }
#wrap-nav-footer .nav-menu.mobile ul li a { color: rgba(255,255,255,0.7); }
#wrap-nav-footer .nav-menu.mobile ul button,
#wrap-nav-footer .nav-menu.mobile ul ul button { border-left: 1px solid rgba(255,255,255,0.07); }
#wrap-nav-footer .nav-menu.mobile > div > ul { border-top: 1px solid rgba(255,255,255,0.07); }
				'."\n";
			}				
			// footer color
			if ( get_theme_mod('color-footer','#eeeeee') != '#eeeeee' ) {
				$styles .= '
#footer-bottom { background-color: '.esc_attr( get_theme_mod('color-footer') ).'; border-top: none; }
#footer-bottom #copyright, 
#footer-bottom #credit { color: rgba(255,255,255,0.75); }
#footer-bottom a { color: #fff; }
#footer .social-links .social-tooltip { color: #fff; }
				'."\n";
			}
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// site description top margin
			if ( get_theme_mod('site-description-margin','28') != '28' ) {
				$styles .= '.site-description { margin-top: '.esc_attr( get_theme_mod('site-description-margin') ).'px; }'."\n";
			}
			// footer logo max-height
			if ( get_theme_mod('logo-max-height-footer','50') != '50' ) {
				$styles .= '#footer-bottom #footer-logo { max-height: '.esc_attr( get_theme_mod('logo-max-height-footer') ).'px; }'."\n";
			}
			// featured section height
			if ( get_theme_mod('featured-height','560') != '560' ) {
				$styles .= '.featured-posts { height: '.esc_attr( get_theme_mod('featured-height') ).'px; }'."\n";
			}
			// image border radius
			if ( get_theme_mod('image-border-radius','0') != '0' ) {
				$styles .= 'img { -webkit-border-radius: '.esc_attr( get_theme_mod('image-border-radius') ).'px; border-radius: '.esc_attr( get_theme_mod('image-border-radius') ).'px; }'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}	
			wp_add_inline_style( 'agnar-style', $styles );		
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'agnar_dynamic_css' );
