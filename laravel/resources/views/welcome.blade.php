<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Document</title>
  <style>
  button{margin-left:-20px;}
  </style>
</head>
<body>
<div class="bg-white border-bottom shadow-sm" style="margin:30px 0px -50px">
<div class="d-flex flex-column align-items-right p-3 px-md-4">
<h6>Телефон:(499)340-94-71</h6>
</div>
<div class="d-flex flex-column align-items-right p-3 px-md-4" style="margin: -30px 0px 0px">
<h6>Email:<u>info@future-group.ru</u></h6>
</div>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3" style="margin:-10px -20px 10px 0px">
<h1 class="mr-md-auto font-weight-normal" style="margin:50px 0px 0px 0px">Комментарии</h1>
<div class="block">
<img src="https://sun9-54.userapi.com/zxPAbmINzCAaElwAXlDkYvwg0HySHHkpj8J09A/HSs5Xe6fzck.jpg" style="margin:-150px 50px -30px"/>
</div>
</div>
</div>
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px">
  <div class="d-flex flex-column   p-3 px-md-4 mb-3" style="margin:0px 0px 0px">

@foreach($data as $el)
<br>
<div>
  <br>
   <h6>{{$el->name}}.{{$el->created_at}}.</h6>
   <br>
   <h6>{{$el->message}}</h6>
   <br>
</div>
@endforeach

</div>
</div>
  <div class="block">
  <div class="d-flex flex-column align-items-right p-3 px-md-4">
    <h5>Оставить комментарий</h5>
  <form action="/" method="post">
    @csrf
  <p>Ваше имя:<br><input type="text" name="name" id="name" ></p>
     <p>Ваш комментарий:<br>
     <textarea name="message" id="message" cols="60" rows="5" border="2"></textarea></p>
     <p align="left">
     <div class="glow">
     <input type="submit"  value="Отправить" name="done" align="right" style="margin:0px 350px 0px"></p>
   </div>
  <div class="d-flex">
 <img src="https://sun9-54.userapi.com/zxPAbmINzCAaElwAXlDkYvwg0HySHHkpj8J09A/HSs5Xe6fzck.jpg" width="175" height="175"/>
</div>
 <footer style="margin:-140px 100px 0px 200px">
 <div class="d-flex">
 <h5>Телефон:(499)340-94-71</h5>
 </div>
 <div class="d-flex">
 <h5>Email:<u>info@future-group.ru</u></h5>
 </div>
 <div class="d-flex">
 <h5>Адрес:<u>115088 Москва, ул.2-я Машинностроения,д.7 стр.1</u></h5>
 </div>
 <div class="d-flex  p-1 px-md-1">
 <h10>&copy 2010-2014 Future.Все права защищены</h10>
 </div>
</form>
</div>
</div>
</footer>
</body>
</html>