<?php get_header() ?>

  <section class="carousel splide" aria-label="Basic Structure Example">
    <div class="container-full">
      <div class="splide__track">
        <ul class="splide__list">

          <?php foreach(getCarousel1() as $slide): ?>
            <li class="splide__slide">
              <img src="<?php echo $slide['slide_image']; ?>" alt="Slide 1" class="slide">
              <div class="container">
                <h1 class="title H1"><?php echo $slide['title']; ?></h1>
                <a href="<?php echo $slide['button_url'] ?>" class="carouselGetInTouch H4">
                  <?php echo $slide['button_name']; ?>
                </a>
              </div>
            </li>
          <?php endforeach; ?>

        </ul>
      </div>
    </div>
  </section>

  <section class="services" id="services">
    <div class="container">
      <h2 class="servicesTitle H2"><?php echo getHeaders(7); ?></h2>
      <div class="servicesBlock">
        
        <?php foreach(getServices() as $service): ?>
          <div class="serviceItem">
            <h3 class="title H3"><?php echo $service->post_title; ?></h3>
            <?php echo $service->post_content; ?>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <section class="howWeWork" id="howWeWork">
    <div class="container-full">
      <h2 class="howWeWorkTitle H2"><?php echo getHeaders(8); ?></h2>
      <div class="howBlock">
        <div class="offsetLine"></div>
        <div class="item">
          <img class="image" src="<?php echo DI_DIR_IMG . 'howWeWork-1.png' ?>" alt="howWeWork-1">
          <div class="itemText text">
            <?php echo getConditions(38); ?>
          </div>
        </div>
        <div class="line"></div>
        <div class="item">
          <img class="image" src="<?php echo DI_DIR_IMG . 'howWeWork-2.png' ?>" alt="howWeWork-2">
          <div class="itemText text">
            <?php echo getConditions(39); ?>
          </div>
        </div>
        <div class="line"></div>
        <div class="item">
          <img class="image" src="<?php echo DI_DIR_IMG . 'howWeWork-3.png' ?>" alt="howWeWork-3">
          <div class="itemText text">
            <?php echo getConditions(40); ?>
          </div>
        </div>
        <div class="line"></div>
        <div class="item">
          <img class="image" src="<?php echo DI_DIR_IMG . 'howWeWork-4.png' ?>" alt="howWeWork-4">
          <div class="itemText text">
            <?php echo getConditions(41); ?>
          </div>
        </div>
        <div class="line"></div>
        <div class="item">
          <img class="image" src="<?php echo DI_DIR_IMG . 'howWeWork-5.png' ?>" alt="howWeWork-5">
          <div class="itemText text">
            <?php echo getConditions(42); ?>
          </div>
        </div>
        <div class="offsetLine"></div>
      </div>
    </div>
  </section>

  <section class="ourWork" id="ourWork">
    <div class="container-full">
      <h2 class="ourWorkTitle H2"><?php echo getHeaders(9); ?></h2>

      <div class="ourWorkCarousel splide">
        <div class="splide__track">
          <ul class="splide__list">

            <?php foreach(getOurWorksSlide() as $work): ?>
              <li class="splide__slide">
                <img src="<?php echo $work['img'] ?>" alt="work-1" class="slideImg" />
              </li>
            <?php endforeach; ?>

          </ul>
        </div>
      </div>
      
      <a href="<?php echo get_category_link(2); ?>" class="allWorks H5">Смотреть все</a>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container">
      <?php foreach(getAbout() as $about): ?>
        <div class="aboutImage">
          <img src="<?php echo $about['img'] ?>" alt="aboutImage" class="image">
        </div>
        <div class="aboutInfo">
          <h2 class="aboutTitle H2"><?php echo getHeaders(10); ?></h2>
          <div class="aboutText text">
            <?php echo $about['text'] ?>
          </div>
          <p class="moreButton">далее...</p>
          <p class="hideButton">...скрыть</p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="contacts" id="contacts">
    <div class="container-full">
      <div class="formBlock">
        <img src="<?php echo DI_DIR_IMG . 'leftHand.png' ?>" alt="leftHand" class="imageLeft" />

        <div class="contactForm">
          <h2 class="contactsTitle H2"><?php echo getHeaders(11); ?></h2>
          <?php echo do_shortcode('[contact-form-7 id="52" title="Контактная форма 1"]'); ?>
        </div>

        <img src="<?php echo DI_DIR_IMG . 'rightHand.png' ?>" alt="rightHand" class="imageRight" />
      </div>
    </div>
  </section>

<?php get_footer() ?>