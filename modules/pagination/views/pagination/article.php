<div class="page">

	<?php if ($first_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first">首页</a>
	<?php else: ?>
	  首页
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev">上一页</a>
	<?php else: ?>
		上一页
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>
	
		<?php if ($i == $current_page): ?>
			<strong><?php echo $i ?></strong>
		<?php else: ?>
			<a href="<?php  echo $page->url($i) ;?>"><?php echo $i ?></a>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next">下一页</a>
	<?php else: ?>
		下一页
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last">末页</a>
	<?php else: ?>
		末页
	<?php endif ?>

</div><!-- .pagination -->