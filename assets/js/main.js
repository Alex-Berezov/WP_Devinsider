if (document.URL === 'https://devinsider.ru/') {
  //Added class to logos

  const headerLogoWrappper = document.querySelector('.header .custom-logo-link')
  const headerLogoWrappperMob = document.querySelector('.mobileMenu .custom-logo-link')
  headerLogoWrappper.classList.add('logoWrapper')
  headerLogoWrappperMob.classList.add('logoWrapper')

  const footerLogoWrapper = document.querySelector('.footerContent .custom-logo-link')
  footerLogoWrapper.classList.add('footerLogo')

  //End added class to logos


  // Show more
  const text = document.querySelector('.about .container .aboutInfo .aboutText')
  const moreButton = document.querySelector('.about .container .aboutInfo .moreButton')
  const hideButton = document.querySelector('.about .container .aboutInfo .hideButton')

  const height = window.getComputedStyle(text, null).height

  moreButton.addEventListener('click', () => {
    text.style.height = 'auto'
    moreButton.style.display = 'none'
    hideButton.style.display = 'block'
  })

  hideButton.addEventListener('click', () => {
    text.style.height = height;
    moreButton.style.display = 'block'
    hideButton.style.display = 'none'
  })
  // And show more

  //Close mob menu
  const checkbox = document.querySelector('.header .container-full .mobileMenu #menu__toggle')
  const getInTouch = document.querySelector('.header .container-full .mobileMenu .menu__box .wrapperButton .headerGetInTouch')

  getInTouch.addEventListener('click', () => {
    checkbox.checked = false
  })
  //And close mob menu

  // Animated by Intersection
  const leftHand = document.querySelector('.contacts .imageLeft')
  const rightHand = document.querySelector('.contacts .imageRight')

  function handleIntersection(entries) {
    entries.map((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
      } else {
        entry.target.classList.remove('visible')
      }
    })
  }

  const observer = new IntersectionObserver(handleIntersection)

  observer.observe(leftHand)
  observer.observe(rightHand)

    //Form
    const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
    const clientName = document.querySelector('.contacts .contactForm .clientName')
    const messengers = document.querySelector('.contacts .contactForm .messengers')
    const email45 = document.querySelector('.contacts .contactForm .email45')
    const submit = document.querySelector('.contacts .contactForm .submit')

    document.addEventListener( 'wpcf7invalid', function( event ) {
      const inputs = event.detail.inputs
    
      const clientNameElem = inputs.filter(el => el.name === 'clientName')
      clientNameElem[0].value.length === 0
        ? clientName.classList.add('error')
        : clientName.classList.remove('error')

      const messengersElem = inputs.filter(el => el.name === 'messengers')
      messengersElem[0].value.length === 0
        ? messengers.classList.add('error')
        : messengers.classList.remove('error')

      const emailElem = inputs.filter(el => el.name === 'email-45')
      emailElem[0].value.length === 0 || !EMAIL_REGEXP.test(emailElem[0].value)
        ? email45.classList.add('error')
        : email45.classList.remove('error')
    } );

    const form = document.querySelector('.contacts .contactForm')

    document.addEventListener( 'wpcf7mailsent', function() {
      clientName.classList.remove('error')
      messengers.classList.remove('error')
      email45.classList.remove('error')

      form.classList.add('slideUp')
    })

    //End form
  // End Animated by Intersection

  // Splide Slider

  new Splide( '.splide', {
    type: 'loop',
    perPage: 1,
    autoplay: true,
    interval: 5000,
    arrows: false,
  } ).mount();

  new Splide( '.ourWorkCarousel', {
    type: 'loop',
    arrows: false,
    padding: '26%',
    pagination: false,
    arrows: true,
    breakpoints: {
      1366: {
        padding: '20%',
      },
      1024: {
        padding: '18%',
      },
      768: {
        padding: '0%',
        perPage: 1,
      },
    }
  } ).mount();

  // End Splide Slider
}
