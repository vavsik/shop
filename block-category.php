<div id="block-category">
<p class="header-title">Категории товаров</p>
<ul>

<li>
	<a id="index1" href=""><img src="images/zapchasti.png" class="sad-silgosp" />Запчасти</a>
	<ul class="category-section">
        <li><a href="view_cat.php?type=zapchasti"><strong>Все</strong></a></li>
        <?php

  $result = mysql_query("SELECT * FROM category WHERE type='zapchasti'",$link);
  
 If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do
{
	if($row["kind"]=='avto')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Автомобилей</a></li>
			';};
			
	if($row["kind"]=='sadselxoz')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Сад-сильхоз-техники</a></li>
			';};
			
	
	if($row["kind"]=='stroy')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Строительной техники</a></li>
			';}
			
	if($row["kind"]=='energo')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Энерго-техники</a></li>
			';}
			
	
	

}

 while ($row = mysql_fetch_array($result));
} 
	
?>
				
				       
	</ul>
</li>


<li>
	<a href="#" id="index2"><img src="images/sad-silgosp.png" class="sad-silgosp" />Садовая и сельхоз техника</a>
	<ul class="category-section">
        <li><a href="view_cat.php?type=sadovaya"><strong>Все товары</strong></a></li>
        <?php

  $result = mysql_query("SELECT * FROM category WHERE type='sadovaya'",$link);
  
 If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do
{
	if($row["kind"]=='gazonokosilka')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Газонокосилки</a></li>
			';}
	
	if($row["kind"]=='kyltivator')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Культиваторы</a></li>
			';}
	
	if($row["kind"]=='motoblock')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Мотоблоки</a></li>
			';}
			
	if($row["kind"]=='benzopila')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Бензопилы</a></li>
			';}
			
	if($row["kind"]=='electropila')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Электропилы</a></li>
			';}
			
		

}
 while ($row = mysql_fetch_array($result));
} 
	
?>
	</ul>
</li>

<li><a href="#" id="index3"><img src="images/stroy.png" class="sad-silgosp" />Строительная техника</a>	
<ul class="category-section">
	<li><a href="view_cat.php?type=stroitelnaya"><strong>Все товары</strong></a></li>
	<?php

  $result = mysql_query("SELECT * FROM category WHERE type='stroitelnaya'",$link);
  
 If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do
{
	if($row["kind"]=='betonomishalka')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Бетономешалки</a></li>
			';}
	
	if($row["kind"]=='kompessor')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Компрессоры</a></li>
			';}
	
	if($row["kind"]=='pnevmoinstrument')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Пневмоинструменты</a></li>
			';}
			
	if($row["kind"]=='benzorez')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Бензорезы</a></li>
			';}
			
	if($row["kind"]=='stroymikser')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Строительные Миксеры </a></li>
			';}
			
	if($row["kind"]=='stroyfen')
  
		{echo '
   				<li><a href="view_cat.php?cat='.strtolower($row["kind"]).'&type='.$row["type"].'">Строительные Фены </a></li>
			';}
			

}
 while ($row = mysql_fetch_array($result));
} 
	
?>

</ul>
</li>
<li><a id="index4" href="#"><img src="images/energo.png" class="sad-silgosp" />Энерго-збережения</a>
	<ul class="category-section">
        <li><a href="#"><strong>Все модели</strong></a></li>
        <li><a href="#">Подраздел 1</a></li>
        <li><a href="#">Подраздел 2</a></li>
	</ul>
</li>

<li><a href="#" id="index5"><img src="images/butovaya.png" class="sad-silgosp" />Бытовая техника</a>
<ul class="category-section">
	<li><a href="#"><strong>Все модели</strong></a></li>
	<li><a href="#">Подраздел 1</a></li>
	<li><a href="#">Подраздел 2</a></li>
</ul>
</li>


<li><a id="index6" href="#"><img src="images/avtore.png" class="sad-silgosp" />Автотовары</a>
<ul class="category-section">
<li><a href=""><strong>Все модели</strong></a></li>
<li><a href="">Подраздел 1</a></li>
<li><a href="">Подраздел 2</a></li>
</ul>
</li>
<li><a id="index7" href="#"><img src="images/cifrovaya.png" class="sad-silgosp" />Цифровая техника</a>
	<ul class="category-section">
        <li><a href="#"><strong>Все модели</strong></a></li>
        <li><a href="#">Подраздел 1</a></li>
        <li><a href="#">Подраздел 2</a></li>
	</ul>
</li>

<li><a id="index8" href="#"><img src="images/forhome.png" class="sad-silgosp" />Товары для дому</a>
<ul class="category-section">
<li><a href=""><strong>Все модели</strong></a></li>
<li><a href="">Подраздел 1</a></li>
<li><a href="">Подраздел 2</a></li>

</ul>
</li>
</ul>
</div>