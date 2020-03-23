<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'agnar', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'agnar' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'agnar' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'agnar' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'agnar' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'agnar' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Post Comments
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_html__( 'Post Comments', 'agnar' ),
	'description'	=> esc_html__( 'Comments on posts', 'agnar' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_html__( 'Page Comments', 'agnar' ),
	'description'	=> esc_html__( 'Comments on pages', 'agnar' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'agnar' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'agnar' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'blog-grid',
	'choices'		=> array(
		'blog-grid'			=> esc_html__( 'Grid', 'agnar' ),
		'blog-list'			=> esc_html__( 'List', 'agnar' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'agnar' ),
	'description'	=> esc_html__( 'Your blog heading', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'agnar' ),
	'description'	=> esc_html__( 'Your blog subheading', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Featured Title
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'text',
	'settings'		=> 'featured-title',
	'label'			=> esc_html__( 'Featured Title', 'agnar' ),
	'description'	=> esc_html__( 'Your home header text', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Featured Post Count (Home)
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count (Home)', 'agnar' ),
	'description'	=> esc_html__( 'Max number of featured posts to display on the homepage. Set it to 0 to disable.', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '5',
		'step'	=> '1',
	),
) );
// Blog: Featured Post Count Category)
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count-category',
	'label'			=> esc_html__( 'Featured Post Count (Category)', 'agnar' ),
	'description'	=> esc_html__( 'Max number of featured posts to display on category pages. Set it to 0 to disable.', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '5',
		'step'	=> '1',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'agnar' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'agnar' ),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'agnar' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'agnar' ),
	'description'	=> esc_html__( '2 columns of widgets', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'agnar' ),
	'description'	=> esc_html__( '2 columns of widgets', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'agnar' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Excerpt Length
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'agnar' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '40',
		'step'	=> '1',
	),
) );
// Blog: Post Format Icon
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_html__( 'Post Format Icons', 'agnar' ),
	'description'	=> esc_html__( 'Shown on post hover', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Author Avatar
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-avatar',
	'label'			=> esc_html__( 'Author Avatars', 'agnar' ),
	'description'	=> esc_html__( 'Shown on post hover', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'agnar' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'agnar' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'agnar' ),
		'categories'=> esc_html__( 'Related by categories', 'agnar' ),
		'tags'		=> esc_html__( 'Related by tags', 'agnar' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'agnar' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'agnar' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'agnar' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'agnar' ),
		'content'	=> esc_html__( 'Below content', 'agnar' ),
	),
) );
// Header: Ads
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_html__( 'Header Ads', 'agnar' ),
	'description'	=> esc_html__( 'Header widget ads area', 'agnar' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Search
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'agnar' ),
	'description'	=> esc_html__( 'Header search button', 'agnar' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'agnar' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'agnar' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'agnar' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'agnar' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'agnar' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'agnar' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'agnar' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'agnar' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'agnar' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'agnar' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'agnar' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'agnar' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'agnar' ),
	'description'	=> esc_html__( 'Footer credit text', 'agnar' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'agnar' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'agnar' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'agnar' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'agnar' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'agnar' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'agnar' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'agnar' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'agnar' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'agnar' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function agnar_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'agnar' ),
		'description'	=> esc_html__( '(is_home) Primary', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'agnar' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'agnar' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'agnar' ),
		'description'	=> esc_html__( '(is_category) Primary', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'agnar' ),
		'description'	=> esc_html__( '(is_search) Primary', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'agnar' ),
		'description'	=> esc_html__( '(is_404) Primary', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	Kirki::add_field( 'agnar_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'agnar' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'agnar' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'agnar' ),
	) );
	
 } 
add_action( 'init', 'agnar_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'agnar' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'agnar' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'agnar' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'agnar' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'agnar' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'agnar' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'agnar' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'agnar' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'agnar' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'agnar' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'agnar' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'agnar' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'agnar' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'agnar' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'agnar' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'agnar' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'agnar' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'agnar' ),
	'description'	=> esc_html__( 'Select font for the theme', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'agnar' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'agnar' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'agnar' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'agnar' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'agnar' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'agnar' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'agnar' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'agnar' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'agnar' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'agnar' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'agnar' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'agnar' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'agnar' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'agnar' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'agnar' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'agnar' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'agnar' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'agnar' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'agnar' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'agnar' ),
		'arial'					=> esc_html__( 'Arial', 'agnar' ),
		'georgia'				=> esc_html__( 'Georgia', 'agnar' ),
		'verdana'				=> esc_html__( 'Verdana', 'agnar' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'agnar' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'agnar' ),
	'description'	=> esc_html__( 'Max-width of the container', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '1920',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Featured Section Height
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-height',
	'label'			=> esc_html__( 'Featured Section Height', 'agnar' ),
	'description'	=> esc_html__( 'Height of the featured posts section', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '560',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '700',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#00b2d7',
) );
// Styling: Mobile Menu Color
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-mobile-menu',
	'label'			=> esc_html__( 'Mobile Menu Color', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Topbar Menu Color
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-topbar-menu',
	'label'			=> esc_html__( 'Topbar Menu Color', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Header Border Line
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-border-line',
	'label'			=> esc_html__( 'Header Border Line', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#00b2d7',
) );
// Styling: Header Border Line Height
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'color-border-line-height',
	'label'			=> esc_html__( 'Header Border Line Height', 'agnar' ),
	'description'	=> esc_html__( 'Set to 0 to disable', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '6',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '20',
		'step'	=> '1',
	),
) );
// Styling: Header Color
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'agnar' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Site Description Margin
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'site-description-margin',
	'label'			=> esc_html__( 'Site Description Top Margin', 'agnar' ),
	'description'	=> esc_html__( 'The distance to the top for your site description', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '28',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Styling: Footer Menu Color
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_html__( 'Footer Menu Color', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Footer Color
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Color', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Footer Logo Max-height
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height-footer',
	'label'			=> esc_html__( 'Footer Logo Image Max-height', 'agnar' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '50',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'agnar_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'agnar' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'agnar' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );