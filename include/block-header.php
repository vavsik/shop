<div id="header-top">
 <div id="header-top-up">
<ul id="header-top-menu">
    <li><a href="about.php">О нас</a></li>
    <li><a href="help.php">Помощь</a></li>
    <li><a href="Contacts.php">Контакты</a></li>
</ul>
<?php

if ($_SESSION['auth'] == 'yes_auth')
{
 
 echo '<p id="auth-user-info" align="right"><img src="images/user.png" />Здравствуйте, '.$_SESSION['auth_name'].'!</p>';   
    
}else{
 
  echo '<p id="reg-auth-title" align="right"><a class="top-auth">Вход</a><a href="registration.php">Регистрация</a></p>';   
    
}
	
?>
<div id="block-top-auth">

<div class="corner"></div>

<form method="post">


<ul id="input-email-pass">

<h3>Вход</h3>

<p id="message-auth">Неверный Логин и(или) Пароль</p>

<li><center><input type="text" id="auth_login" placeholder="Логин или E-mail" /></center></li>
<li><center><input type="password" id="auth_pass" placeholder="Пароль" /><span id="button-pass-show-hide" class="pass-show"></span></center></li>

<ul id="list-auth">
<li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">Запомнить меня</label></li>
<li><a id="remindpass" href="#">Забыли пароль?</a></li>
</ul>


<p align="right" id="button-auth"><a>Вход</a></p>

<p align="right" class="auth-loading"><img src="images/loading.gif" /></p>

</ul>
</form>


<div id="block-remind">
<h3>Восстановление<br /> пароля</h3>
<p id="message-remind" class="message-remind-success" ></p>
<center><input type="text" id="remind-email" placeholder="Ваш E-mail" /></center>
<p align="right" id="button-remind" ><a>Готово</a></p>
<p align="right" class="auth-loading" ><img src="images/loading.gif" /></p>
<p id="prev-auth">Назад</p>
</div>
</div>

</p>
<p class="buttond"  style="text-align:right;"><a href="#" target="_blank" style="cursor: pointer; text-decoration: none; padding:12px 29px; color:#ffffff; background-color:#76e615; border-radius:24px; border: 1px solid #ffffff;">Заказ товара</a></p>
<p class="buttond"  style="text-align:center;"><a href="#" target="_self" style="cursor: pointer; text-decoration: none; padding:12px 36px; color:#ffffff; background-color:#F70202; border-radius:46px; border: 0px solid #1a1ad9;">+38(096)000-70-01</a></p>
</div>
</div>
<a class="icon" href="http://online-letters.ru/" target="_blank">
<img src="http://x-lines.ru/letters/i/cyrillicscript/0138/5484ed/60/0/4nkpb8souuemtwf4.png" border="0" /></a>

<div id="block-user" >
<div class="corner2"></div>
<ul>
<li><img src="images/user_info.png" /><a href="profile.php">Профиль</a></li>
<li><img src="images/logout.png" /><a id="logout" >Выход</a></li>
</ul>

</div>
<div id="block-header">

<div id="personal-info">
    <p align="right">Звонок:</p>
    <h3 align="right">(096)000-70-01</h3>
    <img src="images/phone-icon.png"/>
    <p align="right"><br>Прием заказов:</p>
    <p align="right">Все дни!<br></p>
    <p align="right">с 8:00 до 23:00!</p>
    <img src="images/time-icon.png"/>
    
    </div>

<form method="get" action="search.php?q=">
    <div id="block-search">
<input type="text" id="input-search" name="q" placeholder="Что-то ищете?" value="<?php echo $search; ?>"/>
        <input type="submit" id="button-search" value="Поиск" />
    </div>
</form>
<ul id="result-search">


</ul>

<div id="top-menu">
<ul>
<li><img src="images/shop.png"><a href="index.php">Главная страница</a></li>
<li><img src="images/bestprice-32.png"/><a href="">Лидеры продаж</a></li>
<li><img src="images/new-32.png"><a href="">Новые товары</a></li>
<li><img src="images/sale-32.png"><a href="">Распродажа</a></li>
 </ul>
</div>
</div>


