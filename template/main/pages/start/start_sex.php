<div class="block start">
	<div class="title">Основная информация</div>
	<div class="content">
		<? if ($error != ''): ?>
			<div class="errormessage"><?=$error ?></div>
		<? endif; ?>
		<form action="" method="POST">
			<table class="table table-noborder">
				<tbody>
				<tr>
					<th>Введите ваш игровой ник</th>
					<th><input name="character" size="20" maxlength="20" type="text" value="<?=(isset($_POST['character']) ? $_POST['character'] : $name) ?>"></th>
				</tr>
				<tr>
					<td class="c padding5" colspan="2">Выберите ваш игровой образ</td>
				</tr>
				<tr>
					<th colspan="2">
						<div id="tabs">
							<div class="head">
								<ul>
									<li><a href="#tabs-0">Мужской</a></li>
									<li><a href="#tabs-1">Женский</a></li>
								</ul>
							</div>
							<div id="tabs-0">
								<? for ($i = 1; $i <= 8; $i++): ?>
									<input type="radio" name="face" value="1_<?=$i ?>" id="f1_<?=$i ?>" <?=(is($_POST, 'face') == '1_'.$i ? 'checked' : '') ?>>
									<label data-id="f1_<?=$i ?>" class="avatar">
										<img src="<?=RPATH ?>images/faces/1/<?=$i ?>s.png" alt="">
									</label>
								<? endfor; ?>
							</div>
							<div id="tabs-1">
								<? for ($i = 1; $i <= 8; $i++): ?>
									<input type="radio" name="face" value="2_<?=$i ?>" id="f2_<?=$i ?>" <?=(is($_POST, 'face') == '2_'.$i ? 'checked' : '') ?>>
									<label data-id="f2_<?=$i ?>" class="avatar">
										<img src="<?=RPATH ?>images/faces/2/<?=$i ?>s.png" alt="">
									</label>
								<? endfor; ?>
							</div>
						</div>
					</th>
				</tr>
				<tr>
					<th colspan="2">
						<input type="submit" name="save" value="Продолжить">
					</th>
				</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function()
	{
		$( "#tabs" ).tabs();

		$('.avatar').on('click', function(e)
		{
			e.preventDefault();

			$('#'+$(this).data('id')).click();
		});
	});
</script>