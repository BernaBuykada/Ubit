<?php

$days = ["Pazartesi","Salı","Çarşamba","Perşembe","Cuma"];


$week=[
	["Mat","Mat","Fen","Fen"],
	["Boş","Resim","Beden","Beden"],
	["Türk","Türk","Mat","Mat"],
	["Coğ","Coğ","Boş","Boş"],
	["Tarih","Müzik","Türk","Türk"]
];
 

$lesson_max = 4;
?>


<table border="1">
	<tr>
		<?php foreach ($days as $day):?>
			<td><?php echo $day?></td>
		<?php endforeach;?>
	</tr>
	<?php for($lesson_index=0;$lesson_index<$lesson_max;$lesson_index++):?>
		<tr>
			<?php for($day_index=0;$day_index<count($week);$day_index++):?>
			<td><?php echo $week[$day_index][$lesson_index];?></td>
			<?php endfor;?>

		</tr>
	<?php endfor;?>
</table>
 