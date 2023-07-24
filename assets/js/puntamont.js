let pageSlides = document.getElementById('slides-punta');

if(pageSlides){
  pageSlides= new Splide( '#slides-punta', {
    perPage: 3,
    perMove:1,
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

function share(titulo, texto, url){
  if (navigator.share) {
  navigator.share({
      title: titulo,
      text: texto,
      url: url,
  })
      .then(() => console.log('Successful share'))
      .catch((error) => console.log('Error sharing', error));
  }
}

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))