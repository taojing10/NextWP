<?php
	if(is_array(cs_get_option('friend_link') )){
		echo '<div class="links-of-author motion-element"><p class="" style="margin-bottom: 12px;"><strong>友情链接</strong></p>';
		foreach ( cs_get_option('friend_link') as $value ):
?>
	<span class="links-of-author-item">
		<a href="<?php echo $value['link'];?>" title="" target="_blank"><?php echo $value['name'];?></a>
	</span>
	<?php endforeach;
		echo '</div>';
	}else{
		echo '';
	}
?>
