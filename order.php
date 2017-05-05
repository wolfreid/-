<?php
include "events.php";
$sevendays = 60 * 60 * 24 * 7;
if (isset($_GET['reset'])) {
    unset($_COOKIE['purchases']);
    setcookie("purchases");
}

if (!isset($_COOKIE['purchases'])) {
    $purchases = [];
    foreach ($events as $item) {
        $purchases[] = false;
    }
    setcookie("purchases", serialize($purchases), time() + $sevendays);

} else {
    $purchases = unserialize($_COOKIE['purchases']);
}
print_r($purchases);
if (isset($_GET['id'])) {
    $purchases[$_GET['id']] = true;
    setcookie("purchases", serialize($purchases), time() + $sevendays);
}
print_r($purchases);
?>

<div class = "index-order">
          <div class = "index-order-person" ><h2>Бланк заказа кофе</h2> <!--Заглавие и короткие текстовые блоки в одну строку с родительным тегом-->
            <form action="php/input2.php" method="post" name = "form1">
                 <div class = "index-order-drink"> <h3>Здесь можно выбрать желаемый вами напиток и другие позиции</h3>
                     <fieldset><legend>Напиток и количество</legend>
                     <div id ="index-order-drink-coffee" class = "menu"><span class="title"  style="border: solid blue 1px">Выберите кофейный напиток!</span>
                         <select id =  "index-order-drink-coffe-itemcoffee" class = "turnintodropdown" size="5" multiple name="item-coffee" required> 
                     <!--это не тег а значение--><!--использовать псевдокласс hover-->
                            <optgroup label = "Напитки">
                            <option label = "1" value="1">Эспрессо</option>
                            <option label = "2" value="2">Американо</option>
                            <option label = "3" value="3">Лате</option>
                            <option label = "4" value="4">Капуччино</option>
                            <option label = "5" value = "5">Cпецзаказ</option>
                            </optgroup>
                         </select>
                         <div id = "index-order-drink-coffee-text" class ="menu-text"><span class = "title-other"><b>Поле для создания спецзаказа</b> </span>
                              <textarea rows="5" cols="15" name = "textchoosedrink" >Введите текст</textarea>
                         </div>
                         <div class = "index-order-drink-сount"><p>Задайте количество выбранного напитка</p>
                             <input type="range" min="0" max="10" step="1" name = "count1" value = "0"/><br/>
                             <input type="range" min="0" max="10" step="1" name = "count2" value = "0"/><br/>
                             <input type="range" min="0" max="10" step="1" name = "count3" value = "0"/><br/>
                             <input type="range" min="0" max="10" step="1" name = "count4" value = "0"/><br/>
                             <input type="range" min="0" max="10" step="1" name = "count5" value = "0"/><br/>
                         </div>
                     </div>
                     </fieldset>
                     <fieldset><legend>Укажите маршрут, и свое текущее рассположение</legend>
                         <label for="check1">Где вы сейчас:<input type "text" name "disslocation" id ="check1" /></label><br/>
                         <p> <em>Укажите маршрут</em>
                         <label for ="check1">Откуда:<input type "text" name "from_which" id = "check2"> </label>
                         <label for = "check3">Куда:<input type "text" name "destination" id = "check3"></label></p>
                     </fieldset>
                 </div>
                 <label>            
                 Имя:  <input type="text" name="username" placeholder = "Например: Олексей" /><br />
            Email:<input type="email" name="email1" id = "textfield" /><br /> <!-- id- уникальное имя элемента, которое используется для изменения его стиля и обращения к нему через скрипты. 
            Идентификатор в коде документа должен быть в единственном экземпляре, иными словами, встречаться только один раз.-->
Контактный телефон:<input type = "tel" name ="phonenumber"/><br/>
                  <input type="submit" name="button" id "submit" value="Отправить" />
                 </label>
            </form>
          </div>
      </div>

