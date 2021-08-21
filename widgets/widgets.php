<?php
/**
 * Widgets
 *
 * @package kale
 */
?>
<?php

function kale_widgets_init() {

    /* Sidebar Widgets */
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar - Default', 'kale' ),
		'id'            => 'sidebar-default',
		'before_widget' => '<div id="%1$s" class="default-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar - Default - Bordered', 'kale' ),
		'id'            => 'sidebar-default-bordered',
		'before_widget' => '<div id="%1$s" class="default-widget widget widget-bordered %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

    // /* Header Widgets */

	register_sidebar( array(
		'name'          => esc_html__( 'Header - Left', 'kale' ),
		'id'            => 'header-row-1-left',
		'description'   => esc_html__( 'Add widgets here to appear in the top left area.', 'kale' ),
		'before_widget' => '<div id="%1$s" class="header-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="screen-reader-text">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Header - Right', 'kale' ),
		'id'            => 'header-row-1-right',
		'description'   => esc_html__( 'Add widgets here to appear in the top right area.', 'kale' ),
		'before_widget' => '<div id="%1$s" class="header-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="screen-reader-text">',
		'after_title'   => '</h3>',
	) );

    /* Footer Widgets */

    register_sidebar( array(
		'name'          => esc_html__( 'Footer Secondary - Col 1', 'kale' ),
		'id'            => 'footer-row-2-col-1',
		'before_widget' => '<div id="%1$s" class="footer-row-2-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Secondary - Col 2', 'kale' ),
		'id'            => 'footer-row-2-col-2',
		'before_widget' => '<div id="%1$s" class="footer-row-2-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Secondary - Col 3', 'kale' ),
		'id'            => 'footer-row-2-col-3',
		'before_widget' => '<div id="%1$s" class="footer-row-2-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Secondary - Col 4', 'kale' ),
		'id'            => 'footer-row-2-col-4',
		'before_widget' => '<div id="%1$s" class="footer-row-2-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Secondary - Col 5', 'kale' ),
		'id'            => 'footer-row-2-col-5',
		'before_widget' => '<div id="%1$s" class="footer-row-2-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer - Last', 'kale' ),
		'id'            => 'footer-row-3-center',
		'before_widget' => '<div id="%1$s" class="footer-row-3-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Blog', 'final_site' ),
		'id'            => 'sidebar-Blog',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) 
	);
	register_sidebar( array(
			'name'          => esc_html__( 'Sidebar About', 'final_site' ),
			'id'            => 'sidebar-about',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			) 
		);
	 
			register_sidebar( 
			array(
				'name'          => esc_html__( 'Sidebar Designs', 'final_site' ),
				'id'            => 'sidebar-designs',
				// 'description'   => esc_html__( 'Designs Widget.', 'final_site' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
				) 
			);
	
			register_sidebar( 
				array(
					'name'          => esc_html__( 'Sidebar Sites', 'final_site' ),
					'id'            => 'sidebar-sites',
					// 'description'   => esc_html__( 'Sites Widget.', 'final_site' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
					) 
				);
	
				register_sidebar( 
					array(
						'name'          => esc_html__( 'Sidebar Reach Me', 'final_site' ),
						'id'            => 'sidebar-reach-me',
						// 'description'   => esc_html__( 'Reach Me Widget.', 'final_site' ),
						'before_widget' => '<section id="%1$s" class="widget %2$s">',
						'after_widget'  => '</section>',
						'before_title'  => '<h3 class="widget-title">',
						'after_title'   => '</h3>',
						) 
					);
					register_sidebar( 
						array(
							'name'          => esc_html__( 'Sidebar Project #1', 'final_site' ),
							'id'            => 'sidebar-project-1',
							// 'description'   => esc_html__( 'Sites p1.', 'final_site' ),
							'before_widget' => '<section id="%1$s" class="widget %2$s">',
							'after_widget'  => '</section>',
							'before_title'  => '<h3 class="widget-title">',
							'after_title'   => '</h3>',
							) 
						);

						register_sidebar( 
							array(
								'name'          => esc_html__( 'Sidebar Project #2', 'final_site' ),
								'id'            => 'sidebar-project-2',
								// 'description'   => esc_html__( 'Sites p1.', 'final_site' ),
								'before_widget' => '<section id="%1$s" class="widget %2$s">',
								'after_widget'  => '</section>',
								'before_title'  => '<h3 class="widget-title">',
								'after_title'   => '</h3>',
								) 
							);

							register_sidebar( 
								array(
									'name'          => esc_html__( 'Sidebar Project #3', 'final_site' ),
									'id'            => 'sidebar-project-3',
									// 'description'   => esc_html__( 'Sites p1.', 'final_site' ),
									'before_widget' => '<section id="%1$s" class="widget %2$s">',
									'after_widget'  => '</section>',
									'before_title'  => '<h3 class="widget-title">',
									'after_title'   => '</h3>',
									) 
								);
	

}
add_action( 'widgets_init', 'kale_widgets_init' );

?>