<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_awards',
        'title' => 'Awards',
        'fields' => array (
            array (
                'key' => 'field_5130f9190dcc8',
                'label' => 'award_year',
                'name' => 'award_year',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'awards',
                    'order_no' => '0',
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'the_content',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_background-slider',
        'title' => 'Background Slider',
        'fields' => array (
            array (
                'key' => 'field_51dcb92b74998',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'uploadedTo',
            ),
            array (
                'key' => 'field_51dcb94d74999',
                'label' => 'Full Image',
                'name' => 'full_image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'uploadedTo',
            ),
            array (
                'key' => 'field_51dcb9657499a',
                'label' => 'Full Image Caption',
                'name' => 'full_image_caption',
                'type' => 'textarea',
                'default_value' => '',
                'formatting' => 'br',
                'maxlength' => '',
                'placeholder' => '',
                'rows' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'background',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'custom_fields',
                3 => 'discussion',
                4 => 'comments',
                5 => 'revisions',
                6 => 'slug',
                7 => 'author',
                8 => 'format',
                9 => 'featured_image',
                10 => 'categories',
                11 => 'tags',
                12 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_events',
        'title' => 'Events',
        'fields' => array (
            array (
                'key' => 'field_513ff7ab260ce',
                'label' => 'Date Start',
                'name' => 'date_start',
                'type' => 'date_picker',
                'required' => 1,
                'date_format' => 'yymmdd',
                'display_format' => 'dd/mm/yy',
                'first_day' => 1,
            ),
            array (
                'key' => 'field_50beb20edd37b',
                'label' => 'Date End',
                'name' => 'date',
                'type' => 'date_picker',
                'required' => 1,
                'date_format' => 'yymmdd',
                'display_format' => 'dd/mm/yy',
                'first_day' => 1,
            ),
            array (
                'key' => 'field_50beb2c8fee58',
                'label' => 'Display Date',
                'name' => 'display_date',
                'type' => 'text',
                'instructions' => 'Display field for date. Freeform',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_50beb231dd37c',
                'label' => 'Location',
                'name' => 'location',
                'type' => 'text',
                'instructions' => 'Free From field to enter location information',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_50beb24ddd37d',
                'label' => 'Time',
                'name' => 'time',
                'type' => 'text',
                'instructions' => 'Optional time field. Freeform',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'events',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_images',
        'title' => 'Images',
        'fields' => array (
            array (
                'key' => 'field_53359053f42a0',
                'label' => 'Images',
                'name' => 'cjhs_content_images',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_5335906df42a1',
                        'label' => 'Images',
                        'name' => 'cjhs_content_image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'site-news',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'events',
                    'order_no' => 0,
                    'group_no' => 1,
                ),
            ),
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'histories',
                    'order_no' => 0,
                    'group_no' => 2,
                ),
            ),
            array (
                array (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '648',
                    'order_no' => 0,
                    'group_no' => 3,
                ),
            ),
        ),
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_links',
        'title' => 'Links',
        'fields' => array (
            array (
                'key' => 'field_5335c1b93cf26',
                'label' => 'Link URL',
                'name' => 'cjhs_link_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5335c1e13cf27',
                'label' => 'Link Text',
                'name' => 'cjhs_link_text',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'custom_link',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'excerpt',
                1 => 'custom_fields',
                2 => 'discussion',
                3 => 'comments',
                4 => 'revisions',
                5 => 'slug',
                6 => 'author',
                7 => 'format',
                8 => 'featured_image',
                9 => 'categories',
                10 => 'tags',
                11 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_oral-histories',
        'title' => 'Oral Histories',
        'fields' => array (
            array (
                'key' => 'field_50b7416a40998',
                'label' => 'First Name',
                'name' => 'first_name',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_50b7417040999',
                'label' => 'Last Name',
                'name' => 'last_name',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_51dc48cf2908e',
                'label' => 'Featured History',
                'name' => 'featured_history',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_50c0493ed14b5',
                'label' => 'Photo',
                'name' => 'oh_photo',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_514dc8734c78b',
                'label' => 'Photo 2',
                'name' => 'oh_photo_2',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_514dc8814c78c',
                'label' => 'Photo 3',
                'name' => 'oh_photo_3',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_514dc88b4c78d',
                'label' => 'Photo 4',
                'name' => 'oh_photo_4',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_514dc8a24c78e',
                'label' => 'Photo 5',
                'name' => 'oh_photo_5',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'oral_histories',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'author',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_page-touts',
        'title' => 'Page Touts',
        'fields' => array (
            array (
                'key' => 'field_51426f7561a24',
                'label' => 'Add Side Touts',
                'name' => 'add_touts',
                'type' => 'post_object',
                'post_type' => array (
                    0 => 'tout',
                ),
                'taxonomy' => array (
                    0 => 'all',
                ),
                'allow_null' => 0,
                'multiple' => 1,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                    'order_no' => '0',
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_shop',
        'title' => 'Shop',
        'fields' => array (
            array (
                'key' => 'field_514d26fe90157',
                'label' => 'Created By',
                'name' => 'created_by',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_514d271d90159',
                'label' => 'Price',
                'name' => 'price',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_514d27319015a',
                'label' => 'Photo',
                'name' => 'shop_photo',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array (
                'key' => 'field_51d47e3cdc16f',
                'label' => 'Sold Out',
                'name' => 'sold_out',
                'type' => 'checkbox',
                'instructions' => 'Check this if the item is sold out',
                'choices' => array (
                    'Sold Out' => 'Sold Out',
                ),
                'default_value' => '',
                'layout' => 'horizontal',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'shop',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_side-touts',
        'title' => 'Side Touts',
        'fields' => array (
            array (
                'key' => 'field_5170db4049f1a',
                'label' => 'Bold Weight Text',
                'name' => 'bold_weight_text',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_5170daac57fef',
                'label' => 'Normal Weight Text',
                'name' => 'normal_weight_text',
                'type' => 'text',
                'default_value' => '',
                'formatting' => 'html',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array (
                'key' => 'field_5170dad457ff0',
                'label' => 'Tout Image',
                'name' => 'tout_image',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_5170daea57ff1',
                'label' => 'Reverse Bold',
                'name' => 'reverse_bold',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_5170ded974a26',
                'label' => 'tout_link',
                'name' => 'tout_link',
                'type' => 'page_link',
                'post_type' => array (
                    0 => 'all',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'tout',
                    'order_no' => '0',
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_theme-settings',
        'title' => 'Theme Settings',
        'fields' => array (
            array (
                'key' => 'field_533aef456edbe',
                'label' => 'Company Info',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_533aef556edbf',
                'label' => 'Street Address',
                'name' => 'cjhs_street_address',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533aef6a6edc0',
                'label' => 'City',
                'name' => 'cjhs_city',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533aef776edc1',
                'label' => 'State',
                'name' => 'cjhs_state',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533af0dd6edc2',
                'label' => 'Zip Code',
                'name' => 'cjhs_zip_code',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533af0e96edc3',
                'label' => 'Telephone Number',
                'name' => 'cjhs_telephone_number',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533835f8b60d9',
                'label' => 'Social Links',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_53383609b60da',
                'label' => 'Facebook',
                'name' => 'cjhs_facebook_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_53383628b60db',
                'label' => 'LinkedIn',
                'name' => 'cjhs_linkedin_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5338363db60dc',
                'label' => 'YouTube',
                'name' => 'cjhs_youtube_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533823d502613',
                'label' => 'Analytics',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_533823f502614',
                'label' => 'Google Analytics ID',
                'name' => 'cjhs_google_analytics_id',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5338243b02615',
                'label' => 'Alexa Verification ID',
                'name' => 'cjhs_alexa_verification_code',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5338245c02616',
                'label' => 'Bing Webmaster Verification ID',
                'name' => 'cjhs_bing_verification_code',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5338247302617',
                'label' => 'Google Verification ID',
                'name' => 'cjhs_google_verification_code',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-theme-settings',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_topy-photos',
        'title' => 'Topy Photos',
        'fields' => array (
            array (
                'key' => 'field_50be077f87050',
                'label' => 'Topy Photo',
                'name' => 'topy_photo',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'topy_photos',
                    'order_no' => '0',
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_video',
        'title' => 'Video',
        'fields' => array (
            array (
                'key' => 'field_5335ca6a4e81f',
                'label' => 'Video Embed URL',
                'name' => 'cjhs_video_embed_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_53371564e5052',
                'label' => 'Screenshot',
                'name' => 'cjhs_video_screenshot',
                'type' => 'select',
                'choices' => array (
                    0 => 1,
                    1 => 2,
                    2 => 3,
                ),
                'default_value' => 0,
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'videos',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'custom_fields',
                3 => 'revisions',
                4 => 'slug',
                5 => 'author',
                6 => 'format',
                7 => 'featured_image',
                8 => 'categories',
                9 => 'tags',
                10 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_web-sponsors',
        'title' => 'Web Sponsors',
        'fields' => array (
            array (
                'key' => 'field_51d4898f8274b',
                'label' => 'Sponsored By',
                'name' => 'sponsored_by',
                'type' => 'post_object',
                'post_type' => array (
                    0 => 'web_sponsor',
                ),
                'taxonomy' => array (
                    0 => 'all',
                ),
                'allow_null' => 1,
                'multiple' => 1,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'oral_histories',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
                3 => 'comments',
                4 => 'revisions',
                5 => 'slug',
                6 => 'author',
                7 => 'format',
                8 => 'featured_image',
                9 => 'categories',
                10 => 'tags',
                11 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}
