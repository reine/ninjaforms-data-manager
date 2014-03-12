<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Ninja_Forms_Data_Manager
 * @author    Reine Sison <reine@mydevstudio.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins
 * @copyright 2014 Reine Sison
 */
?>

<div class="wrap">

	<h2>
		<?php echo esc_html( get_admin_page_title() ); ?>
		<a href="admin.php?page=<?php echo NINJAFORMS_DATAMANAGER_SLUG ?>-new" class="add-new-h2"><?php _e( 'Add New Data Container', 'ninjaforms-data-manager' ); ?></a>
	</h2>

	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">

			<div id="post-body-content">
				<ul class="subsubsub">
					<li class="all"><a href="" class="current"><?php _e( 'All', 'ninjaforms-data-manager' ); ?> <span class="count">(<?php echo $form_count;?>)</span></a>
				</ul>

				<div id="" class="tablenav top">
					<div class="alignleft actions">
						<select id="" class="" name="bulk_action">
							<option value=""><?php _e( 'Bulk Actions', 'ninjaforms-data-manager' );?></option>
							<option value="delete"><?php _e( 'Delete', 'ninjaforms-data-manager' );?></option>
							<option value="export"><?php _e( 'Export Data', 'ninjaforms-data-manager' );?></option>
						</select>
						<input type="submit" name="submit" value="<?php _e( 'Apply', 'ninjaforms-data-manager' ); ?>" class="button-secondary">
					</div>
					<div id="" class="alignright navtable-pages">
						&nbsp;
					</div>
				</div>

				<table class="wp-list-table widefat fixed posts">
					<thead>
						<tr>
							<th class="check-column"><input type="checkbox" id="" class="ninjaforms-data-manager-select-all" title="ninjaforms-data-manager-bulk-action"></th>
							<th><?php _e( 'Data Container Title', 'ninjaforms-data-manager' );?></th>
							<th><?php _e( 'No. of Records', 'ninjaforms-data-manager' );?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th class="check-column"><input type="checkbox" id="" class="ninjaforms-data-manager-select-all" title="ninjaforms-data-manager-bulk-action"></th>
							<th><?php _e( 'Data Container Title', 'ninjaforms-data-manager' );?></th>
							<th><?php _e( 'No. of Records', 'ninjaforms-data-manager' );?></th>
						</tr>
					</tfoot>
				</table>
			</div><!-- /post-body-content -->

			<div id="postbox-container-1" class="postbox-container">
				<div id="submitdiv" class="postbox">
					<h3 class="hndle"><span><?php _e( 'System Settings', 'ninjaforms-data-manager' ); ?></span></h3>
					<div class="inside">
						<div class="submitbox" id="submitpost">
							<div id="minor-publishing">
								<div id="misc-publishing-actions">

									<div class="misc-pub-section">
										<div class="dashicons dashicons-list-view"></div>
										<label><?php _e( 'No. of Ninja Forms', 'ninjaforms-data-manager' ); ?>:</label>
										<span id="post-status-display"><?php echo '0' ?></span>
									</div><!-- .misc-pub-section -->

									<div class="misc-pub-section">
										<div class="dashicons dashicons-welcome-widgets-menus"></div>
										<label><?php _e( 'No. of Data Containers', 'ninjaforms-data-manager' ); ?>:</label>
										<span id="post-status-display"><?php echo '0' ?></span>
									</div><!-- .misc-pub-section -->

									<div class="misc-pub-section">
										<div class="dashicons dashicons-admin-generic"></div>
										<label><?php _e( 'PHP Version', 'ninjaforms-data-manager' ); ?>:</label>
										<span id="post-status-display"><?php if ( function_exists( 'phpversion' ) ) echo esc_html( phpversion() ); ?></span>
									</div><!-- .misc-pub-section -->

									<div class="misc-pub-section">
										<div class="dashicons dashicons-admin-generic"></div>
										<label><?php _e( 'MySQL Version', 'ninjaforms-data-manager' ); ?>:</label>
										<span id="post-status-display"><?php if ( function_exists( 'mysql_get_server_info' ) ) echo esc_html( mysql_get_server_info() ); ?></span>
									</div><!-- .misc-pub-section -->

								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div><!-- /poststuff -->

</div><!-- .wrap -->
