<?php
/**
 * DMOF Information files
 * Included all the functions
 */

/**
 * Get Theme Options
 * @param $id = id of options
 * @param $param = parameter for output ( url,width,height etc )
 */
	dmof_theme_options( $id = '', $param = '' );


/**
 * Get MetaBoxed Data
 */
	1. @function first
	/**
	 * Get DMOF Post meta values
	 * @param $meta_id -> Enter the post meta id *required
	 * @param $post_id -> Enter the post id // optional
	 * @param $param -> Enter the post meta other parameter such as 'image','image_src','video','file'
	 * @param $size -> Enter the size of the image, size will work only for 'image' and 'image_src'
	 */
		dmof_meta_boxes( $meta_id , $post_id = null , $param = null , $size = null);

	2. @function second
	/**
	 * Get DMOF Post meta Attachment
	 * @param $meta_id -> Enter the post meta id *required
	 * @param $post_id -> Enter the post id // optional
	 * @param $output -> Enter the post meta other parameter such as 'image','image_src','video','file'
	 * @param $size -> Enter the post meta size it's work only for 'image'
	 */

		dmof_meta_box_attachment( $meta_id , $post_id = null , $output = 'id' , $size = 'full');

	3. @function Third
	/**
	 * Get DMB Post meta Multiple Images
	 * @param $meta_id -> Enter the post meta id *required
	 * @param $post_id -> Enter the post id // optional
	 * @param $size -> Enter the post meta size it's work only for 'image'
	 * @param $output -> Enter the post meta output value such as 'img','url','id'
	 */
		dmof_meta_box_multlple_images($meta_id , $post_id = null , $size = 'full' , $output = 'img');


// Below is All the fields which used in dmof

@1. file
@2. text
@3. textarea
@4. select
@5. swtich
@6. wp_editor
@7. checkbox
@8. radio
@9. color
@10. multitext
@11. range
@12. datepicker
@13. spacing
@14. dimensions
@15. section
@16. accordian
@17. button_set
@18. image_select


/**
* 1. @param file
*/
	array(
		'id'			=> 'opt_demo_type_image',
		'type'			=> 'file',
		'data_type'   	=> 'image', //-> image,video,multiple_image,''
		'title'			=> __('Demo Image','dmof'),
		'subtitle'		=> __('Upload your Image here','dmof'),
	),
	
/**
 * 2. @param text
 */
	array(
		'id'			=> 'opt_demo_type_text',
		'type'			=> 'text',
		'title'			=> __('Demo Text','dmof'),
		'subtitle'		=> __('Demo Sub Title','dmof'),
		'desc'			=> __('Demo Description','dmof'),
		'placeholder'	=> __('placeholder','dmof'),
		'default'		=> 'Demo default value',
		//'required' 		=> 'dmof_meta_switch_test'
	),

/**
 * 3. @param textarea
 */
	array(
		'id'			=> 'opt_demo_type_textarea',
		'type'			=> 'textarea',
		'title'			=> __('Demo Textarea','dmof'),
		'subtitle'		=> __('Demo Sub Title','dmof'),
		'desc'			=> __('Demo Description','dmof'),
		'placeholder'	=> __('placeholder','dmof'),
		'default'		=> 'Demo default value',
	),

/**
 * 4. @param select
 */
	array(
        'id'           => 'opt_demo_type_select',
        'type'         => 'select',
        'title'        => __( 'Select Options', 'dmof' ),
        'desc'         => __('This is demo description text','dmof'),
        // 'data_type'    => 'pages', //->post,pages,taxonomy,terms,sidebar,menu,menu_location,users,post_types
        or
        // 'options'       => array(
        // 	'select1'  => 'Select 1',
        // 	'select2'  => 'Select 2',
        // 	'select3'  => 'Select 3',
        // 	'select4'  => 'Select 4',
        // ), //-> wordpress options ( terms etc ) will work also
    ),
	
/**
 * 5. @param switch
 */
	array(
        'id'           	=> 'opt_demo_type_switch',
        'title'         => __( 'Switch', 'dmof' ),
        'type'         	=> 'switch',
        'desc'         	=> __('This is demo description text for Switch','dmof'),
        'default'      	=> 1,
        //'required' 	=> array( 'opt_demo_type_switch' ,'=', '1' ), for below field which controlled by switch
    ),

/**
 * 6. @param WP_EDITOR
 */

	array(
		'id'		=> 'opt_demo_type_wp_editor',
		'type'		=> 'wp_editor',
		'title'		=> __('Wp Editor','dmof'),
		'subtitle'	=> __('WP editor Section','dmof'),
		'desc'		=> __('WP editor Description','dmof'),
		'options'	=> array(
			// 'wpautop'       => true,
            // 'media_buttons' => false,
            // 'textarea_rows' => '10',
            // 'editor_height' => 'none',
            // 'quicktags'     => true,
            // 'drag_drop_upload'=> false,
			'row'		=> '8',
			'col'		=> '50', // work all wordpress options
		),
		'default'		=> 'default value for WP editor',
	),

/**
 * 7. @param checkbox
 */

	array(
        'id'           => 'opt_demo_type_checkbox',
        'title'         => __( 'Demo checkbox', 'dmof' ),
        'type'         => 'checkbox',
        'data_type'    => 'terms',//-> pages,post,taxonomies,terms
        'desc'         => __('This is demo description text','dmof'),
        'options'      => array(
            'taxonomy'      => 'category',
            'hide_empty'    => 'hide',
        ), // option will work with wordpress args
        //-> Can be use custom options array('select_id','select value')
        'default'      => array( 'taxonomy','hide_empty'),
    ),

/**
 * 8. @param radio
 */
    array(
        'id'           => 'opt_demo_type_radio',
        'title'        => __( 'Demo Radio', 'dmof' ),
        'type'         => 'radio',
        'desc'         => __('This is demo description text for radio','dmof'),
        'options'      => array(
            'male' 		=> 'Male',
            'female' 	=> 'Female',
        ),
        'default'       => 'female',
    ),

/**
 * 9. @param color
 */
	array(
        'id'           => 'opt_demo_type_color',
        'title'        => __( 'Demo Color Picker', 'dmof' ),
        'type'         => 'color',
        'desc'         => __('This is demo description text for the color','dmof'),
        'default'      => '#1de5d8',
    ),

/**
 * 10. @param multi_text
 */

    array(
        'id'           => 'opt_demo_type_multi_text',
        'title'         => __( 'Demo Multiple Text', 'dmof' ),
        'type'         => 'multi_text',
        'desc'         => __('This is demo description text','dmof'),
        'placeholder'  => __( 'Enter Multiple Text Place holder text', 'dmof' ),
    ),

/**
 * 11. @param range
 */
    array(
        'id'           => 'opt_demo_type_range',
        'title'        => __( 'Demo Range', 'dmof' ),
        'type'         => 'range',
        'desc'         => __('This is demo description text for range','dmof'),
        'options'      => array(
            'min'  => '10',
            'max'  => '250',
        ),
        'default'       => '100',
    ),

/**
 * 12. @param datepicker
 *
 */
    array(
        'id'           => 'opt_demo_type_datepicker',
        'title'        => __( 'Demo Datepicker', 'dmof' ),
        'type'         => 'datepicker',
        'desc'         => __('This is demo description text','dmof'),
        'options'	   => array(
        	'dateFormat'	=> 'DD, d MM, yy', //"mm/dd/yy","yy-mm-dd","d M, y","d MM, y","DD, d MM, yy"
		    'changeMonth' 	=> '',
		    'changeYear' 	=> '',
			'minDate' 		=> '',
		    'maxDate' 		=> '',
            'minDateByOpt'  => 'meta_box_date_picker1',// enter opt id which you want set min value
            //'maxDateByOpt'  => '',// enter opt id which you want set max value ( working on this point )
        ),
    ),

/**
 * 13. @param spacing
 */
    array(
        'id'           => 'opt_demo_type_spacing',
        'title'        => __( 'Demo spacing', 'dmof' ),
        'type'         => 'spacing',
        'desc'         => __('This is demo description for spacing','dmof'),
        'default'	   => array(
        	'top'		=> '10',
        	'right'		=> '10',
        	'bottom'	=> '10',
        	'left'		=> '10',
        ),
    ),

/**
 * 14. @param dimensions
 */
    array(
        'id'           => 'opt_demo_type_dimensions',
        'title'        => __( 'Dimensions', 'dmof' ),
        'type'         => 'dimensions',
        'desc'         => __('This is demo description for spacing','dmof'),
        'default'	   => array(
        	'top'		=> '10',
        	'right'		=> '10',
        	'bottom'	=> '10',
        	'left'		=> '10',
        ),
    ),


/**
 * 15. @param section
 */
    array(
		'id'			=> 'opt_demo_type_section_start',
		'type'			=> 'section',
		'title'			=> __('Demo Section','dmof'),
		'subtitle'		=> __('Enter your section subtitle here','dmof'),
		'position'		=> 'start', //-> start,end
	),


/**
 * 16. @param accordion
 */

	array(
		'id'			=> 'opt_demo_type_accordian_start',
		'type'			=> 'accordion',
		'title'			=> __('Demo Accordion','dmof'),
		'subtitle'		=> __('Enter your accordion subtitle here','dmof'),
		'position'		=> 'start', //-> start,end
	),


/**
 * 17. @param button_set
 */	
	array(
		'id'			=> 'demo_text_button_set',
		'type'			=> 'button_set',
		'title'			=> __('Demo Button Set','dmof'),
		'options'		=> array(
			'button_set1'	=> 'Button Set 1',
			'button_set2'	=> 'Button Set 2',
			'button_set3'	=> 'Button Set 3',
		),
	),

/**
 * 18. @param image_select
 */
	array(
		'id'			=> 'demo_text_image_select',
		'type'			=> 'image_select',
		'title'			=> __('Demo Image Select','dmof'),
		'options'		=> array(
			'button_set1'	=> DMOF_IMG_FOLDER_PATH . 'select_first.jpg',
			'button_set2'	=> DMOF_IMG_FOLDER_PATH . 'select_first.jpg',
			'button_set3'	=> DMOF_IMG_FOLDER_PATH . 'select_first.jpg',
		),
	),
	