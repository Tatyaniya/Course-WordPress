<?php

//About Company Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_About_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'О компании', 'wayup' ),
        'base'                    => 'wayup_about_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные о компании', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-olins',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Почему мы –", "wayup" ),
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС", "wayup" ),
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "desc",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Картинка модуля", "wayup" ),
                "param_name"  => "featured_image",
                "description" => esc_html__( "Загрузите картинку", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Фото автора", "wayup" ),
                "param_name"  => "author",
                "description" => esc_html__( "Загрузите фото", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Картинка модуля", "wayup" ),
                "param_name"  => "signature",
                "description" => esc_html__( "Select or Upload a background image.", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Цитата", "wayup" ),
                "param_name"  => "quote",
                "value"       => esc_html__( "Мы здесь, чтобы помочь вам построить и поддержать свою мечту.", "wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Имя автора", "wayup" ),
                "param_name"  => "author_name",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите имя", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Должность автора", "wayup" ),
                "param_name"  => "author_status",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}

// Progress Company Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Progress_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Прогресс Модуль', 'wayup' ),
        'base'                    => 'wayup_progress_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-olins',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 3", "wayup" ),
                "param_name"  => "title3",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите заголовок 3", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 4", "wayup" ),
                "param_name"  => "title4",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите заголовок 4", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 1", "wayup" ),
                "param_name"  => "value1",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите значение 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 2", "wayup" ),
                "param_name"  => "value2",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите значение 2", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 3", "wayup" ),
                "param_name"  => "value3",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите значение 3", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Value 4", "wayup" ),
                "param_name"  => "value4",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите значение 4", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Photo for background", "wayup" ),
                "param_name"  => "bg",
                "description" => esc_html__( "Загрузите картинку", "wayup" )
            ),
        )
    ) );
}

// Contact Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Contact_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Свяжитесь', 'wayup' ),
        'base'                    => 'wayup_contact_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-olins',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wayup" ),
                "param_name"  => "title",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите заголовок", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Link", "wayup" ),
                "param_name"  => "link",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
        )
    ) );
}

// Contact Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Offices_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Offices', 'wayup' ),
        'base'                    => 'wayup_offices_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-olins',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => "Наши офисы расположены по",
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => "всей России", "wayup",
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Главный офис (адрес)", "wayup" ),
                "param_name"  => "office1",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Главный офис (фото)", "wayup" ),
                "param_name"  => "office1photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Калининграде (адрес)", "wayup" ),
                "param_name"  => "office2",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Калининграде (фото)", "wayup" ),
                "param_name"  => "office2photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Казани (адрес)", "wayup" ),
                "param_name"  => "office3",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Казани (фото)", "wayup" ),
                "param_name"  => "office3photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Тюмени (адрес)", "wayup" ),
                "param_name"  => "office4",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Тюмени (фото)", "wayup" ),
                "param_name"  => "office4photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Благовещенске (адрес)", "wayup" ),
                "param_name"  => "office5",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Благовещенске (фото)", "wayup" ),
                "param_name"  => "office5photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Норильске (адрес)", "wayup" ),
                "param_name"  => "office6",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Норильске (фото)", "wayup" ),
                "param_name"  => "office6photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Владивостоке (адрес)", "wayup" ),
                "param_name"  => "office7",
                "value"       => "г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж",
                "description" => esc_html__( "Введите адрес", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Владивостоке (фото)", "wayup" ),
                "param_name"  => "office7photo",
                "value"       => esc_html__( "", "wayup" ),
                "description" => esc_html__( "Добавьте фото", "wayup" )
            ),
        )
    ) );
}

// Team Slider Extension
if(class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Wayup_Team_Slider extends WPBakeryShortCodesContainer {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        "name"                    => 'Наша команда',
        "base"                    => "wayup_team_slider",
        "as_parent"               => array( 'only' => 'wayup_team_slider_item' ),
        'description'             => 'Описание для модуля',
        "content_element"         => true,
        "category"                => 'Wayup',
        "icon"                    => '',
        "show_settings_on_create" => false,
        "params"                  => array(),
        "js_view"                 => 'VcColumnView'
    ) );
}
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Team_Slider_Item extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => 'Член команды',
        'base'                    => 'wayup_team_slider_item',
        'category'                => 'Wayup',
        'description'             => 'Добавьте данные о человеке',
        'show_settings_on_create' => true,
        "as_child"                => array('only' => 'wayup_team_slider'),
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => 'Фото Человека',
                "param_name"  => "photo",
                "description" => 'Добавьте фото',
            ),
            array(
                "type"        => "textfield",
                "heading"     => 'Имя',
                "param_name"  => "name",
                "value"       => '',
                "description" => 'Введите имя'
            ),
            array(
                "type"        => "textfield",
                "heading"     => 'Должность',
                "param_name"  => "status",
                "value"       => '',
                "description" => 'Введите должность'
            ),
            array(
                "type"        => "textarea",
                "heading"     => 'Описание',
                "param_name"  => "desc",
                "value"       => '',
                "description" => 'Введите описание'
            ),
            array(
                "type"        => "textfield",
                "heading"     => 'Ссылка на VK',
                "param_name"  => "vklink",
                "value"       => '',
                "description" => 'Введите ссылку'
            ),
            array(
                "type"        => "textfield",
                "heading"     => 'Ссылка на FB',
                "param_name"  => "fblink",
                "value"       => '',
                "description" => 'Введите ссылку'
            ),
            array(
                "type"        => "textfield",
                "heading"     => 'Ссылка на TW',
                "param_name"  => "twlink",
                "value"       => '',
                "description" => 'Введите ссылку'
            ),
            array(
                "type"        => "textfield",
                "heading"     => 'Ссылка на IG',
                "param_name"  => "iglink",
                "value"       => '',
                "description" => 'Введите ссылку'
            ),
        )
    ) );
}

// Help Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Help_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок помощи', 'wayup' ),
        'base'                    => 'wayup_help_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Кому мы", "wayup" ),
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПОМОГАЕМ", "wayup" ),
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "desc",
                "value"       => esc_html__( "Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса", "wayup" ),
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Ссылка", "wayup" ),
                "param_name"  => "link",
                "value"       => '#',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Блок 1 Заголовок", "wayup" ),
                "param_name"  => "block1title",
                "value"       => 'Стартапам',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Блок 1 Описание", "wayup" ),
                "param_name"  => "block1desc",
                "value"       => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы помочь вам расти',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Блок 2 Заголовок", "wayup" ),
                "param_name"  => "block2title",
                "value"       => 'Фрилансеру',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Блок 2 Описание", "wayup" ),
                "param_name"  => "block2desc",
                "value"       => 'Начать независимый бизнес проще, чем когда-либо. Неважно подрабатываете вы или работаете самостоятельно, мы можем помочь вам сделать все правильно',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Блок 2 Заголовок", "wayup" ),
                "param_name"  => "block3title",
                "value"       => 'Малому бизнесу',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Блок 3 Описание", "wayup" ),
                "param_name"  => "block3desc",
                "value"       => 'Мы поможем направить ваш бизнес в правильном направлении. Окажем услуги в области договорного, трудового права, недвижимости и многое другое',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
        )
    ) );
}

// Why we Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Why_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Почему Мы?', 'wayup' ),
        'base'                    => 'wayup_why_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Почему мы –", "wayup" ),
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС", "wayup" ),
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "content",
                "value"       => '',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Ссылка", "wayup" ),
                "param_name"  => "link",
                "value"       => '#',
                "description" => esc_html__( "Введите ссылку", "wayup" )
            ),
        )
    ) );
}

// Features Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Features_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Кейсы', 'wayup' ),
        'base'                    => 'wayup_features_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Наши", "wayup" ),
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "КЕЙСЫ", "wayup" ),
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Description", "wayup" ),
                "param_name"  => "desc",
                "value"       => 'Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC',
                "description" => esc_html__( "Введите описание", "wayup" )
            ),  
        )
    ) );
}

// Testimonials Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Testimonials_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Отзывы', 'wayup' ),
        'base'                    => 'wayup_testimonials_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "За нас говорят", "wayup" ),
                "description" => esc_html__( "Введите заголовок 1", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "НАШИ КЛИЕНТЫ", "wayup" ),
                "description" => esc_html__( "Введите заголовок 2", "wayup" )
            ), 
        )
    ) );
}

// Services Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Services_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Услуги', 'wayup' ),
        'base'                    => 'wayup_services_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array()
    ) );
}

// News Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_News_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Новости', 'wayup' ),
        'base'                    => 'wayup_news_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array()
    ) );
}