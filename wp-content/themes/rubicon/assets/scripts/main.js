import 'materialize-css/dist/js/materialize';

document.addEventListener('DOMContentLoaded', function() {
    var elems1 = document.querySelectorAll('.sidenav');
    window.M.Sidenav.init(elems1, {});
  
    var elems2 = document.querySelectorAll('.carousel');
    var instances2 = window.M.Carousel.init(elems2,  {fullWidth: true, indicators: true});
    setInterval(()=>{instances2[0].next()},3000);
  });
  