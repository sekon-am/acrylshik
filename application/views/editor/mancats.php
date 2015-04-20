<?php load_view('editor/header'); ?>
		<script src="/js/angular.js"></script>
		<script src="/js/catsctrl.js"></script>
		<div ng-app="catsapp"><div class="col-sm-12" ng-controller="catsctrl">
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
						<td class="{{cat.clss}}">{{cat.name}}</td>
						<td>{{cat.parent}}</td>
						<td>{{cat.title}}</td>
						<td>{{cat.descr}}</td>
						<td>{{cat.img_position}}</td>
						<td><img src="{{cat.img}}" class="cat-thumb-small"></td>
					</tr>
				</tbody>
			</table>
			<h1>{{catsctrl.hi}}</h2>
		</div></div>
		<script >
<?php load_view('editor/footer'); ?>
