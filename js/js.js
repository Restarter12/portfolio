$(document).ready(function() {
    $('.service-heading').click(function() {
      $(this).next('.service-content').slideToggle();
    });
  });
  $(document).ready(function() {
    $('header a').click(function(e) {
      e.preventDefault(); // Предотвращаем переход по ссылке
  
      var target = $(this).attr('href'); // Получаем целевой раздел из атрибута href
      var offset = $(target).offset().top; // Получаем вертикальное смещение целевого раздела от верха страницы
  
      $('html, body').animate({
        scrollTop: offset
      }, 1000); // Плавно прокручиваем страницу до целевого раздела в течение 1 секунды
    });
  });


  function showFullScreenImage(image) {
    var overlay = document.createElement('div');
    overlay.className = 'fullscreen-overlay';
    
    var img = document.createElement('img');
    img.className = 'fullscreen-image';
    img.src = image.src;
    
    overlay.appendChild(img);
    document.body.appendChild(overlay);
    
    overlay.onclick = function() {
      document.body.removeChild(overlay);
    };
  }
