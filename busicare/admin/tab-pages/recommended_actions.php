<?php 
	$busicare_actions = $this->recommended_actions;
	$busicare_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="busicare-tab-pane panel-close">
	<div class="action-list">
		<?php if($busicare_actions): foreach ($busicare_actions as $key => $busicare_val): ?>
		<div class="action col-md-6" id="<?php echo esc_attr($busicare_val['id']); ?>">
			<div class="action-box">
				<div class="action-watch">
				<?php if(!$busicare_val['is_done']): ?>
					<?php if(!isset($busicare_actions_todo[$busicare_val['id']]) || !$busicare_actions_todo[$busicare_val['id']]): ?>
						<span class="dashicons dashicons-visibility"></span>
					<?php else: ?>
						<span class="dashicons dashicons-hidden"></span>
					<?php endif; ?>
				<?php else: ?>
					<span class="dashicons dashicons-yes"></span>
				<?php endif; ?>
				</div>
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($busicare_val['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($busicare_val['desc']); ?></div>
					<?php echo wp_kses_post($busicare_val['link']); ?>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>