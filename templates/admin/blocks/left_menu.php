<ul>
	<?foreach($arAdminMenu as $itemMenu):?>
		<li><a class = "btn btn-default <?if($itemMenu["LINK"] == $url):?>selected<?endif;?>" href = "<?=$itemMenu["LINK"]?>"><?=$itemMenu["NAME"]?></a></li>
	<?endforeach;?>
</ul>