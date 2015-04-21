<?php load_view('editor/header'); ?>
		<script src="/js/angular.js"></script>
		<script src="/js/catsctrl.js"></script>
		<div class="col-sm-12" ng-app="catsapp" ng-controller="catsctrl">
			<table class="table table-striped">
				<thead>
					<tr>
						<th><?php echo lang('Name'); ?></th>
						<th><?php echo lang('Parent'); ?></th>
						<th><?php echo lang('Title'); ?></th>
						<th><?php echo lang('Descr'); ?></th>
						<th><?php echo lang('Shift'); ?></th>
						<th><?php echo lang('Image'); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="cat in cats">
						<td class="{{cat.clss}}"><input type="text" ng-model="cat.name"/></td>
						<td>
							<select 
								ng-if="cat.parent_id"
								ng-model="cat.parent_id" 
								ng-options="rootcat.value as rootcat.label for rootcat in rootcats">
							</select>
						</td>
						<td><input type="text" ng-model="cat.title" size="30"/></td>
						<td><input type="text" ng-model="cat.descr" size="40"/></td>
						<td><input type="text" ng-model="cat.img_position" size="5"/></td>
						<td><img src="{{cat.img}}" class="cat-thumb-small"></td>
					</tr>
				</tbody>
			</table>
			<div class="center">
				<!--<button class="btn-default btn-add"><?php echo lang('Add'); ?></button>-->
				<button class="btn-primary btn-save" ng-click="cats_save()"><?php echo lang('Save'); ?></button>
			</div>
		</div>
		<script >
<?php load_view('editor/footer'); ?>
