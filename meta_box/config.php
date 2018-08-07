<?php
/**
 * Config
 */

add_filter('dmof_add_meta_box','dev_meta_boxes1');

function dev_meta_boxes1( $meta_boxes ){

	$meta_boxes = array();

	$meta_boxes[] = array(
        'id'         	=> 'job_meta_city',
        'title'      	=> __( 'Title Section', 'dmof' ),
        'post_types' 	=> 'page',
        //'post_id'	 	=> '',
        'priority'	 	=> 'side',
        'meta_fields'     => array(
            
            array(
                'id'        => 'dev_disable_title_on_page',
                'name'      => __( 'Disable Title on Page', 'dmof' ),
                'type'      => 'switch',
                'default'   => 1,
            ),

            // array(
            //     'id'        => 'dev_enable_comment_on_page',
            //     'name'      => __( 'Enable Comment on Page', 'dmof' ),
            //     'type'      => 'switch',
            //     //'options'   => array( '1'=>'title', ),
            // ),

        ),
    );

    $meta_boxes[] = array(
        'id'         	=> 'job_meta_city2',
        'title'      	=> __( 'Additional Data2', 'dmof' ),
        'post_types' 	=> array('post','page'),
        //'post_id'	 	=> '156',
        'priority'	 	=> 'side',
        'meta_fields'     => array(



            array( // completed
                'id'           => 'dmof_text_text1',
                'name'         => __( 'TextBox', 'dmof' ),
                'type'         => 'text',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
                'default'      => 'Default value',
            ),
            array( // completed
                'id'           => 'dmof_text_text1',
                'name'         => __( 'TextBox', 'dmof' ),
                'type'         => 'text',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
                'default'      => 'Default value',
            ),








            

            array( // completed
                'id'           => 'dmof_text_box',
                'name'         => __( 'TextBox', 'dmof' ),
                'type'         => 'text',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
                'default'      => 'Default value',
            ),

            array( // completed
                'id'           => 'dmof_wp_editor',
                'name'         => __( 'text Editor', 'dmof' ),
                'type'         => 'wp_editor',
                'desc'         => __('This is demo description text','dmof'),
                'options'      => array(
                    // 'wpautop'       => true,
                    // 'media_buttons' => false,
                    // 'textarea_rows' => '10',
                    // 'editor_height' => 'none',
                    // 'quicktags'     => true,
                    // 'drag_drop_upload'=> false,

                ),
                'default'      => 'Editor Default value',
            ),

            array(
                'id'           => 'dmof_meta_switch',
                'name'         => __( 'Switch', 'dmof' ),
                'type'         => 'switch',
                'desc'         => __('This is demo description text','dmof'),
                'default'      => 1,
            ),

            
            array(
                'id'           => 'meta_box_data_checkbox',
                'name'         => __( 'Data checkbox', 'dmof' ),
                'type'         => 'checkbox',
                //'data_type'    => 'post', // (Completed(pages,post,taxonomies,terms))
                'desc'         => __('This is demo description text','dmof'),
                'options'      => array(
                    'taxonomy'      => 'category',
                    'hide_empty'    => 'hide',
                ), // option will work with wordpress args
                'default'      => array( 'taxonomy','hide_empty'),
            ),

            array(
                'id'           => 'meta_box_data_checkbox',
                'name'         => __( 'Data checkbox', 'dmof' ),
                'type'         => 'checkbox',
                'data_type'    => 'post', // (Completed(pages,post,taxonomies,terms))
                'desc'         => __('This is demo description text','dmof'),
                // 'options'      => array(
                //     'taxonomy'      => 'category',
                //     'hide_empty'    => false,
                // ), // option will work with wordpress args
            ),

            array(
                'id'           => 'meta_box_menu_select1',
                'name'         => __( 'Post Types', 'dmof' ),
                'type'         => 'select',
                'desc'         => __('This is demo description text','dmof'),
                'data_type'    => 'post_types', // Completed(post,pages,taxonomy,terms,sidebar,menu,menu_location,users,post_types)
                // 'options'       => array(
                //  'taxonomy'  => 'dev_dev_taxonomy',
                // ), // wordpress options will work also
            ),

            array(
                'id'           => 'meta_box_menu_select2356',
                'name'         => __( 'Select values', 'dmof' ),
                'type'         => 'select',
                'desc'         => __('This is demo description text','dmof'),
                //'data_type'    => 'post_types', // Completed(post,pages,taxonomy,terms,sidebar,menu,menu_location,users,post_types)
                'options'           => array(
                 'select1'  => 'select1',
                 'select2'  => 'select2',
                 'select3'  => 'select3',
                 'select4'  => 'select4',
                 'select5'  => 'select5',
                ), // wordpress options will work also
                'default'       => 'select3',
            ),




            array(
                'id'           => 'meta_box_menu_select2',
                'name'         => __( 'Menus', 'dmof' ),
                'type'         => 'select',
                'desc'         => __('This is demo description text','dmof'),
                'data_type'    => 'pages', // Completed(post,pages,taxonomy,terms,sidebar,menu,menu_location)
                // 'options'       => array(
                //  'taxonomy'  => 'dev_dev_taxonomy',
                // ), // wordpress options will work also
            ),
            array(
                'id'           => 'meta_box_menu_select3',
                'name'         => __( 'Post', 'dmof' ),
                'type'         => 'select',
                'multiple'     => true,
                'desc'         => __('This is demo description text','dmof'),
                //'data_type'    => 'post', // Completed(post,pages,taxonomy,terms,sidebar,menu,menu_location)
                'options'       => array(
                    'select_first' => 'select_first',
                    'select_first1' => 'select_first1',
                    'select_first2' => 'select_first2',
                    'select_first3' => 'select_first3',
                ), // wordpress options will work also
                'default'   => array( 'select_first','select_first1','select_first2' ),
            ),

            array(
                'id'           => 'meta_box_233',
                'name'         => __( 'Radio', 'dmof' ),
                'type'         => 'radio',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
                'options'       => array(
                    'options1'  => 'Options 1',
                    'options2'  => 'Options 2',
                    'options3'  => 'Options 3',
                ),
            ),

            array(
                'id'           => 'meta_box_sadsadbsadsadsuiai',
                'name'         => __( 'Radio', 'dmof' ),
                'type'         => 'radio',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
                'options'      => array(
                    'male'      => 'Male 1',
                    'female'    => 'Female',
                ),
                'default'       => 'female',
            ),

            array(
                'id'           => 'meta_box_textarea',
                'name'         => __( 'Textarea', 'dmof' ),
                'type'         => 'textarea',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
                'options'       => array(
                 'rows'  => '4',
                 'cols'  => '50',
                ),
            ),

            array(
                'id'           => 'meta_box_email',
                'name'         => __( 'Email', 'dmof' ),
                'type'         => 'email',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
            ),

            array(
                'id'           => 'meta_box_password',
                'name'         => __( 'Password', 'dmof' ),
                'type'         => 'password',
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
                'desc'         => __('This is demo description text','dmof'),
            ),

             array(
                'id'           => 'meta_box_hidden',
                'type'         => 'hidden',
            ),

            array(
                'id'           => 'meta_box_color_picker',
                'name'         => __( 'Color Picker', 'dmof' ),
                'type'         => 'color',
                'desc'         => __('This is demo description text','dmof'),
                'default'      => '#1de5d8',
            ),

            array(
                'id'           => 'meta_box_multi_image',
                'name'         => __( 'Multi Image', 'dmof' ),
                'type'         => 'file',
                'data_type'   => 'multiple_image',
                'desc'         => __('This is demo description text','dmof'),
            ),

            array(
                'id'           => 'meta_box_multitext',
                'name'         => __( 'multi_text', 'dmof' ),
                'type'         => 'multi_text',
                'desc'         => __('This is demo description text','dmof'),
                'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
            ),

            array(
                'id'           => 'meta_box_range',
                'name'         => __( 'Range', 'dmof' ),
                'type'         => 'range',
                'desc'         => __('This is demo description text','dmof'),
                'options'      => array(
                    'min'  => '10',
                    'max'  => '250',
                ),
                'default'       => '100',
            ),



     //        array(
     //            'id'           => 'meta_box_23',
     //            'name'         => __( 'City 2', 'dmof' ),
     //            'type'         => 'select',
     //            'desc'         => __('This is demo description text','dmof'),
     //            'data_type'    => 'sidebar', // Completed(post,pages,taxonomy,terms,sidebar)
     //            // 'options'	   => array(
     //            // 	'taxonomy'	=> 'dev_dev_taxonomy',
     //            // ), // wordpress options will work also
     //        ),



     //        array(
     //            'id'           => 'meta_box_image',
     //            'name'         => __( 'Image', 'dmof' ),
     //            'type'         => 'file',
     //            'field_type'   => 'image',
     //            'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
     //            'desc'         => __('This is demo description text','dmof'),
     //        ),

     //        array(
     //            'id'           => 'meta_box_video',
     //            'name'         => __( 'Video', 'dmof' ),
     //            'type'         => 'file',
     //            'field_type'   => 'video',
     //            'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
     //            'desc'         => __('This is demo description text','dmof'),
     //        ),

     //        array(
     //            'id'           => 'meta_box_file',
     //            'name'         => __( 'File', 'dmof' ),
     //            'type'         => 'file',
     //            'field_type'   => 'file',
     //            'placeholder'  => esc_html__( 'Enter City', 'dmof' ),
     //            'desc'         => __('This is demo description text','dmof'),
     //        ),

            array(
                'id'           => 'meta_box_date_picker1',
                'name'         => __( 'Datepicker', 'dmof' ),
                'type'         => 'datepicker',
                'desc'         => __('This is demo description text','dmof'),
                'options'	   => array(
                	'dateFormat'	=> 'mm/dd/yy', //"mm/dd/yy","yy-mm-dd","d M, y","d MM, y","DD, d MM, yy"
				    'changeMonth' 	=> true,
				    'changeYear' 	=> true,
					'minDate' 		=> -20,
				    'maxDate' 		=> "+1M +10D",
                    //'minDateByOpt'  => 'meta_box_date_picker1',// enter opt id which you want set min value
                ),
            ),

            array(
                'id'           => 'meta_box_date_picker2',
                'name'         => __( 'Datepicker 2', 'dmof' ),
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

     //        //  array(
     //        //     'id'           => 'meta_box_sidebar',
     //        //     'name'         => __( 'SIdebar', 'dmof' ),
     //        //     'type'         => 'sidebar',
     //        //     'desc'         => __('This is demo description text','dmof'),
     //        //     'options'      => array(
     //        //         'dateFormat'    => 'mm/dd/yy', //"mm/dd/yy","yy-mm-dd","d M, y","d MM, y","DD, d MM, yy"
     //        //         'changeMonth'   => true,
     //        //         'changeYear'    => true,
     //        //         'minDate'       => -20,
     //        //         'maxDate'       => "+1M +10D"

     //        //     ),
     //        // ),


            array(
                'id'           => 'meta_box_data_checkbox_spacing',
                'name'         => __( 'Spacing', 'dmof' ),
                'type'         => 'spacing',
                'desc'         => __('This is demo description text','dmof'),
                'placeholder'  => array( 'Top','Right','Bottom','Left' ),
            ),

            array(
                'id'           => 'meta_box_data_checkbox_dimensions',
                'name'         => __( 'Dimensions', 'dmof' ),
                'type'         => 'dimensions',
                'desc'         => __('This is demo description text','dmof'),
                'placeholder'  => array( 'Width','Height' ),
            ),


        ),
    );

	return $meta_boxes;
}