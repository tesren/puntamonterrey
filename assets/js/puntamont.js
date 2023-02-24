let pageSlides = document.getElementById('slides-punta');

if(pageSlides){
  pageSlides= new Splide( '#slides-punta', {
    perPage: 3,
    loop: true,
    padding: '4rem',
    breakpoints: {
      640: {
        perPage: 2,
        padding: '2rem',
      },
      480: {
        perPage: 1,
        padding: '0.5rem',
      },
    },
  } );
  
  pageSlides.mount();
}