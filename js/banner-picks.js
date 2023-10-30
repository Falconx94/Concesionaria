document.addEventListener('DOMContentLoaded', function ()
{
  var images = [
    'images/PickUp.jpg',
    'images/PickUp(2).jpg',
    'images/PickUp(3).jpg'
  ];
  var currentIndex = 0;
  var bannerImage = document.getElementById('banner-image');
  function changeImage()
  {
    bannerImage.src = images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;
  }
  setInterval(changeImage, 2000); // Cambia la imagen cada 2 segundos (2000 milisegundos)
});