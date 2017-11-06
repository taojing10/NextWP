<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
    'menu_title'      => '主题设置',
    'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
    'menu_slug'       => 'cs-framework',
    'ajax_save'       => false,
    'show_reset_all'  => false,
    'framework_title' => 'Next主题设置面板',
);

// ----------------------------------------
// 基本设置 - 20171025 wex写
// ----------------------------------------
$options[]      = array(
    'name'        => '站点设置',
    'title'       => '站点设置',
    'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => array(
        array(
            'id'      => 'admin-photo',
            'type'    => 'upload',
            'title'   => '站长照片',
            'desc'    => '显示在侧边栏处',
        ),
        array(
            'id'      => 'site_name',
            'type'    => 'text',
            'title'   => '站点名称',
            'desc'    => '此处名称会显示在网站头部的文字logo（如果启用的话）处、以及网站的底部版权处',
        ),
        array(
            'id'    	=> 'logo_switcher',
            'type'      => 'switcher',
            'title'     => '是否启用图片logo',
            'default'   => 'false',
        ),
        array(
            'id'      => 'img_logo',
            'type'    => 'upload',
            'title'   => '图片logo',
            'desc'    => '上传您的站点图片logo（推荐尺寸为:120px*40px）',
            'dependency' => array( 'logo_switcher', '==', 'true' ),
        ),
        array(
            'id'      => 'favicon',
            'type'    => 'upload',
            'title'   => 'favicon',
            'desc'    => 'favicon.ico一般用于作为缩略的网站标志,它显示位于浏览器的地址栏或者在标签上,用于显示网站的logo,',

        ),

    ),
);


// ----------------------------------------
//  seo设置  - 20171025 wex写
// ----------------------------------------


$options[]      = array(
    'name'        => 'seo设置',
    'title'       => 'seo设置',
    'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => array(
        array(
            'id'      => 'seo_switcher',
            'type'    => 'switcher',
            'title'   => '是否开启自带seo功能',
            'default' => 'true',
            'desc'    => '请保持开启',

        ),
        array(
            'id'      => 'keywords',
            'type'    => 'text',
            'title'   => '关键词',
            'desc'    => '请用“|”隔开',
            'dependency' => array( 'seo_switcher', '==', 'true' ),

        ),
        array(
            'id'      => 'description',
            'type'    => 'textarea',
            'title'   => '描述',
            'desc'    => '',
            'dependency' => array( 'seo_switcher', '==', 'true' ),

        ),


    ),
);

// ----------------------------------------
// 友情链接 -20170828 上午 wex写
// ----------------------------------------
$options[]      = array(
    'name'        => '友情链接',
    'title'       => '友情链接',
    'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => array(
        array(
            'id'    	=> 'friendslink_switcher',
            'type'      => 'switcher',
            'title'     => '是否启用友情链接',
        ),

        array(
            'id' => 'friendlink_radio',
            'type' => 'radio',
            'title' => '显示位置',
            'dependency' => array( 'friendslink_switcher', '==', 'true' ),

            'options'    => array(
                'index'           => '只在首页显示',
                'EveryPage'       => '在每个页面都显示',
            ),
        ),
        array(
            'id'              => 'friend_link',
            'type'            => 'group',
            'title'           => '添加一个友情链接',
            'button_title'    => '添加',
            'accordion_title' => '添加',
            'dependency' => array( 'friendslink_switcher', '==', 'true' ),
            'fields'          => array(
                array(
                    'id'      => 'name',
                    'type'    => 'text',
                    'title'   => '友情链接名称',
                ),

                array(
                    'id'      => 'link',
                    'type'    => 'text',
                    'title'   => '链接地址',
                ),


            )
        ),


    ),
);



CSFramework::instance( $settings, $options );
