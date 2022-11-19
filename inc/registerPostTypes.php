<?php

  add_action( 'init', function() {

    register_post_type( 'landingBlocksHeaders', [
      'label'  => 'Landing Blocks Headers',
      'labels' => [
        'name'               => 'Заголовки главной страницы',
        'singular_name'      => 'Заголовки главной страницы',
        'add_new'            => 'Добавить заголовок',
        'add_new_item'       => 'Добавление заголвка',
        'edit_item'          => 'Редактирование заголовка',
        'new_item'           => 'Новый заголовок',
        'view_item'          => 'Смотреть заголовок',
        'search_items'       => 'Искать заголовок',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'Не найдено даже в помойке',
        'parent_item_colon'  => '',
        'menu_name'          => 'Заголовки главной страницы',
      ],
      'public'              => false,
      'show_ui'             => true,
      'menu_position'       => 24.1,
      'menu_icon'           => 'dashicons-editor-spellcheck',
      'supports'            => ['title'],
      'capability_type'     => 'post',
      'capabilities'        => [ 'create_posts' => false ],
      'map_meta_cap'        => true,
    ]);

    register_post_type( 'firstScreenCarousel', [
      'label'  => 'Carousel',
      'labels' => [
        'name'               => 'Карусель #1',
        'singular_name'      => 'Карусель #1',
        'add_new'            => 'Добавить слайд',
        'add_new_item'       => 'Добавление слайда',
        'edit_item'          => 'Редактирование слайда',
        'new_item'           => 'Новый слайд',
        'view_item'          => 'Смотреть слайд',
        'search_items'       => 'Искать слайд',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'Не найдено даже в помойке',
        'parent_item_colon'  => '',
        'menu_name'          => 'Карусель #1',
      ],
      'public'              => false,
      'show_ui'             => true,
      'menu_position'       => 24.2,
      'menu_icon'           => 'dashicons-slides',
      'supports'            => ['title'],
    ]);

    register_post_type( 'services', [
      'label'  => 'Services',
      'labels' => [
        'name'               => 'Услуги',
        'singular_name'      => 'Услуги',
        'add_new'            => 'Добавить услугу',
        'add_new_item'       => 'Добавление услуги',
        'edit_item'          => 'Редактирование услуги',
        'new_item'           => 'Новая услуга',
        'view_item'          => 'Смотреть услугу',
        'search_items'       => 'Искать услугу',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'Не найдено даже в помойке',
        'parent_item_colon'  => '',
        'menu_name'          => 'Услуги',
      ],
      'public'              => false,
      'show_ui'             => true,
      'menu_position'       => 24.3,
      'menu_icon'           => 'dashicons-admin-generic',
      'supports'            => ['title', 'editor'],
      'capability_type'     => 'post',
      'capabilities'        => [ 'create_posts' => false ],
      'map_meta_cap'        => true,
    ]);

    register_post_type( 'howWeWork', [
      'label'  => 'How we work',
      'labels' => [
        'name'               => 'Как мы работаем',
        'singular_name'      => 'Как мы работаем',
        'add_new'            => 'Добавить условие',
        'add_new_item'       => 'Добавление условия',
        'edit_item'          => 'Редактировать условие',
        'new_item'           => 'Новое условие',
        'view_item'          => 'Смотреть условие',
        'search_items'       => 'Искать условие',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'Не найдено даже в помойке',
        'parent_item_colon'  => '',
        'menu_name'          => 'Как мы работаем',
      ],
      'public'              => false,
      'show_ui'             => true,
      'menu_position'       => 24.4,
      'menu_icon'           => 'dashicons-format-status',
      'supports'            => ['title', 'editor'],
      'capability_type'     => 'post',
      'capabilities'        => [ 'create_posts' => false ],
      'map_meta_cap'        => true,
    ]);

    register_post_type( 'ourWorksCarousel', [
      'label'  => 'Carousel our works',
      'labels' => [
        'name'               => 'Карусель наши работы',
        'singular_name'      => 'Карусель наши работы',
        'add_new'            => 'Добавить слайд',
        'add_new_item'       => 'Добавление слайда',
        'edit_item'          => 'Редактирование слайда',
        'new_item'           => 'Новый слайд',
        'view_item'          => 'Смотреть слайд',
        'search_items'       => 'Искать слайд',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'Не найдено даже в помойке',
        'parent_item_colon'  => '',
        'menu_name'          => 'Карусель наши работы',
      ],
      'public'              => false,
      'show_ui'             => true,
      'menu_position'       => 24.5,
      'menu_icon'           => 'dashicons-slides',
      'supports'            => ['title', 'thumbnail'],
    ]);

    register_post_type( 'about', [
      'label'  => 'About',
      'labels' => [
        'name'               => 'About',
        'singular_name'      => 'About',
        'menu_name'          => 'About',
      ],
      'public'              => false,
      'show_ui'             => true,
      'menu_position'       => 24.6,
      'menu_icon'           => 'dashicons-info',
      'supports'            => ['thumbnail', 'editor'],
    ]);

  });

  function getHeaders($ID = 0) {
    $args = [
      'orderby' => 'date',
      'order'   => 'ASC',
      'post_type' => 'landingBlocksHeaders'
    ];

    $title = '';

    foreach(get_posts($args) as $post) {
      if ($post->ID === $ID) {
        $title = $post->post_title;
      }
    }

    return $title;
  }

  function getCarousel1() {
    $args = [
      'orderby' => 'date',
      'order'   => 'ASC',
      'post_type' => 'firstScreenCarousel'
    ];

    $slides = [];

    foreach(get_posts($args) as $post) {
      $slide = get_fields($post->ID);
      $slides[] = $slide;
    }

    return $slides;
  }

  function getServices() {
    $args = [
      'orderby' => 'date',
      'order'   => 'ASC',
      'post_type' => 'services'
    ];

    return get_posts($args);
  }

  function getConditions($ID = 0) {
    $args = [
      'orderby' => 'date',
      'order'   => 'ASC',
      'post_type' => 'howWeWork'
    ];

    $condition = '';

    foreach(get_posts($args) as $post) {
      if ($post->ID === $ID) {
        $condition = $post->post_content;
      }
    }

    return $condition;
  }

  function getOurWorksSlide() {
    $args = [
      'orderby' => 'date',
      'order'   => 'ASC',
      'post_type' => 'ourWorksCarousel'
    ];

    $works = [];

    foreach(get_posts($args) as $post) {
      $work['img'] = get_the_post_thumbnail_url( $post->ID, 'full' );
      $works[] = $work;
    }

    return $works;
  }

  function getAbout() {
    $args = [
      'orderby' => 'date',
      'order'   => 'ASC',
      'post_type' => 'about'
    ];

    $aboutInfo = [];

    foreach(get_posts($args) as $post) {
      $info['img'] = get_the_post_thumbnail_url( $post->ID, 'full' );
      $info['text'] = $post->post_content;
      $aboutInfo[] = $info;
    }

    return $aboutInfo;
  }