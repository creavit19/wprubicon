document.addEventListener('DOMContentLoaded', function() {
  var elems1 = document.querySelectorAll('.sidenav');
  var instances1 = M.Sidenav.init(elems1, {});

  var elems2 = document.querySelectorAll('.carousel');
  var instances2 = M.Carousel.init(elems2,  {fullWidth: true, indicators: true});
  setInterval(()=>{instances2[0].next()},3000);
});

