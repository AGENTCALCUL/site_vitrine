<?php 
	$stacy_actions = $this->recommended_actions;
	$stacy_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="stacy-tab-pane panel-close">
	<div class="action-list">
		<?php if($stacy_actions): foreach ($stacy_actions as $key => $stacy_val): ?>
		<div class="col-md-6">
			<div class="action" id="<?php echo esc_attr($stacy_val['id']); ?>">
				<div class="action-box">
					<div class="action-watch">
					<?php if(!$stacy_val['is_done']): ?>
						<?php if(!isset($stacy_actions_todo[$stacy_val['id']]) || !$stacy_actions_todo[$stacy_val['id']]): ?>
							<span class="dashicons dashicons-visibility"></span>
						<?php else: ?>
							<span class="dashicons dashicons-hidden"></span>
						<?php endif; ?>
					<?php else: ?>
						<span class="dashicons dashicons-yes"></span>
					<?php endif; ?>
					</div>
					<div class="action-inner">
						<h3 class="action-title"><?php echo esc_html($stacy_val['title']); ?></h3>
						<div class="action-desc"><?php echo esc_html($stacy_val['desc']); ?></div>
						<?php echo wp_kses_post($stacy_val['link']); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>