<?php
	widget_css();
	if( $widget_config['forum1'] ) {
	
	$lower_list = g::posts(
		array(
			"bo_table"	=> $widget_config['forum1'],
			"limit"		=> $widget_config['no']
			 )
		);
	}
	$lower_list;
	if( $widget_config['title'] ) $post_title = $widget_config['title'];
	else $post_title = 'No Title';
?>
<div class='gallery_4_lower_posts'>
	<div class="title">				
		<a href='<?=G5_BBS_URL?>/board.php?bo_table=<?=$bo_table?>'><?=$post_title?></a>				
	</div>	
    <div class='item_wrapper'>
	
    <?
	if( $lower_list ){
		foreach( $lower_list as $li ){			
	?>                  
            <div class='subject'>
				<a href="<?=$li['url']?>"><?=cut_str($li['wr_subject'],10,"...")?></a>
			</div>        
    <? }   	
	}
	else { //게시물이 없을 때  ?>
		<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=5'>사이트 만들기 안내</a></div>
		<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=4'>블로그 만들기</a></div>
		<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=3' style='color: #cc4235; font-weight: bold;'>커뮤니타 사이트 만들기</a></div>
		<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=2'>여행사 사이트 만들기</a></div>
		<div class='subject'><a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=1'>(모바일)홈페이지, 스마트폰 앱</a></div>
    <?php }  ?>
    </div>
</div>	

<? if ( ! empty($widget_config['css']) ) { ?>
<style>
<?=$widget_config['css']?>
</style>
<? } ?>
