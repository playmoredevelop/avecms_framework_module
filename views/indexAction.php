<div class="fw-content clear-after">
	<div class="column sidebar">
		<?php foreach([
			['Профили пользователей', 'fa fa-users'],
			['Брошенные корзины', 'fa fa-shopping-cart'],
			['Рассылки', 'fa fa-scribd'],
			['Список заказов', 'fa fa-shopping-bag'],
			['Вопросы и ответы', 'fa fa-question'],
		] as $settings) : ?>
		<a href="#" class="sidebar-section aa ff-cuprum">
			<i class="<?=$settings[1]?> aa"></i>
			<span class="name"><?=$settings[0]?></span>
		</a>
		<?php endforeach; ?>
		
	</div>
	<div class="column content">2</div>
</div>