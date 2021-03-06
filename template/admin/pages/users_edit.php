<? if (isset($info)): ?>
	<div class="portlet box green">
		<div class="portlet-title">
			<div class="caption">Редактирование пользователя "<?=$info['username'] ?>"</div>
		</div>
		<div class="portlet-body form">
			<form action="/admin/mode/users/action/edit/id/<?=$info['id'] ?>/" method="post" class="form-horizontal form-row-seperated">
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Имя</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="username" value="<?=$info['username'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Группа</label>
						<div class="col-md-9">
							<select class="form-control" name="group_id">
								<option value="0">Без группы</option>
								<? foreach ($groups AS $group): ?>
									<option value="<?=$group['id'] ?>" <?=($group['id'] == $info['group_id'] ? 'selected' : '') ?>><?=$group['name'] ?></option>
								<? endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="save" class="btn green" value="Y">Сохранить</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<? endif; ?>