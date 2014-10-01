				<?php
				global $LIPI_SIDEBAR;
				if (is_array($LIPI_SIDEBAR) && (count($LIPI_SIDEBAR) > 0)) {
					foreach ($LIPI_SIDEBAR as $val) {
						?>
						<aside class="widget">
						<?php
						if ($val['title']) {
						?>
							<div class="widget-title"><?php echo $val['title']; ?></div>
						<?php
						}
						?>
						<?php echo do_shortcode($val['content']); ?>
						</aside>
						<?php
					}
				}			
				?>