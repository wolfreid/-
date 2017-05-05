<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Drive</title>
    <link rel="stylesheet" type="text/css" href="сss/coffe.css">
</head>
<body>
<div id="container">
  <header class = "main-header">
    <div class = "main-logo"><img src = "img/main-logo.jpg" width = "368"  heght = "264" alt = "Coffe Drive"></div>
  </header>
  <nav id="navigation">
    <ul>
     <li><a href = "#">Главная </a></li>
     <li><a href = "#">Напитки и цены</a></li>
     <li><a href = "#">О доставке</a></li>
     <li><a href = "#">Контакты</a></li>
    </ul>
  </nav>
   <main class = "content">
      <div class="description">
          <h2>О кофейне</h2>
              <article>В больших городах жизнь бурлит по черному. Напряг везде и повсюду
              Порой изнемогаешь в пробке, а вчера тебя задержали на работе до поздна.
              Ты понимаешь , енергии после такой нагрузки не хватит, к тому же недосып обеспечен.
              Наступило утро, будильник был проигнорен, а времени остается на то, чтобы собратся и выскочить на улицу, так и не выпив  <b>кофейца</b> 
              Не нужно по пути на работу вспешке искать кофейню или любой другой доступный вариант получения кофе - оставте этот опыт всяк сюда входящий.
              <i>Coffee Drive - кофейня нового поколения</i></article>
              <section class = "advantages">
                  <h4>Инновационный подход в продаже кофе</h4>
                  <p>Теперь не вы ищете кофе, а кофе ищет вас </p>
                      <div class = "advantages-item">     
                          <div class ="advantages-title"><span>Мобильность</span></div>
                          <div class = "advantages-introtext">Наши доставщики по совместительству и баристы доставят вам кофе без привязки к месту</div>
                      </div>
                      <div class = "advantages-item">
                          <div class = "advantages-title"> <span>Транспорт</span></div>
                          <div class = "advantages-introtext"> Только у нас транспорт на все случаи доставки</div>
                      </div>
                      <div class = "advantages-item">
                          <div class = "advantages-title"><span>Навигация</span></div>
                          <div class = "advantages-introtext">Навигация происходит в режиме онлайн с динамическим присваиванием координат условного места встречи</div>
                     </div>
              </section>
      </div>
      <?php include ("order.php"); ?>
   </main>
   <footer>
   </footer>
</div>
<script>
    var menuElem = document.getElementById('index-order-drink-coffee');//menu+div_id, мне надо меню +
    var titleElem = menuElem.querySelector('.title');
    
    titleElem.onclick = function() {
      menuElem.classList.toggle('open');
    };
    
    var menutextElem = document.getElementById('index-order-drink-coffee-text');
    var titleotherElem = menuElem.querySelector('.title-other');

    
    titleotherElem.onclick = function() {
      menutextElem.classList.toggle('opencase');
    };
</script>
</body>
</html>