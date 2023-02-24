let featuredListings = document.getElementById('featured-listings');

if(featuredListings){
  featuredListings= new Splide( '#featured-listings', {
    perPage: 3,
    loop: true,
    padding: '15px',
    pagination: false,
    breakpoints: {
      640: {
        perPage: 2,
      },
      480: {
        perPage: 1,
      },
    },
  } );
  
  featuredListings.mount();
}