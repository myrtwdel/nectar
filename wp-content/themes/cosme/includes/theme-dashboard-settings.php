<?php
/**
 * Theme activation.
 *
 * @package Cosme
 */

	/**
 * Theme Dashboard [Free VS Pro]
 */
function cosme_free_vs_pro_html() {
	ob_start();
	?>
	<div class="cosme-table-heading"><?php esc_html_e( 'Differences between Cosme and Cosme Pro', 'cosme' ); ?></div>
	<div class="cosme-table-description"><?php esc_html_e( 'Here are some of the differences between Cosme and Cosme Pro:', 'cosme' ); ?></div>

	<table class="cosme-table-compare">
		<thead>
			<tr>
				<th><?php esc_html_e( 'Feature', 'cosme' ); ?></th>
				<th><?php esc_html_e( 'Cosme', 'cosme' ); ?></th>
				<th><?php esc_html_e( 'Cosme Pro', 'cosme' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php esc_html_e( 'Access to all Google Fonts', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Responsive', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Colors', 'cosme' ); ?></td>
				<td><?php esc_html_e( 'Primary & Secondary', 'cosme' ); ?></td>
				<td><?php esc_html_e( 'Primary, Secondary, Accent & Tertiary', 'cosme' ); ?></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Typography Controls', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Scroll to top', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Single Layout Flexible Options', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Multiple header layouts', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Wishlist', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Page Header Options', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Cart Layout', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Cart Drawer', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Quick View', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Ajax Cart', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Footer Builder', 'cosme' ); ?></td>
				<td><span class="cosme-table-badge cosme-table-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="cosme-table-badge cosme-table-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
		</tbody>
	</table>

	<div class="cosme-table-separator"></div>

	<h4>
		<a href="<?php echo esc_url( 'https://www.codegearthemes.com/collections/wordpress-themes/products/cosme-premium' ); ?>" target="_blank">
			<?php esc_html_e( 'Full list of differences between Cosme and Cosme Pro', 'cosme' ); ?>
		</a>
	</h4>

	<div class="cosme-table-separator"></div>

	<p>
		<a href="<?php echo esc_url( 'https://www.codegearthemes.com/collections/wordpress-themes/products/cosme-premium' ); ?>" class="cosme-table-button button">
			<?php esc_html_e( 'Get Cosme Pro Today', 'cosme' ); ?>
		</a>
	</p>
	<?php
	return ob_get_clean();
}



/**
 * Theme Dashboard Settings
 *
 * @param array $settings The settings.
 */
function cosme_dashboard_settings( $settings ) {

	$settings['tabs'] = array(
		array(
			'name'    => esc_html__( 'Theme Features', 'cosme' ),
			'type'    => 'features',
			'visible' => array( 'free', 'pro' ),
			'data'    => array(
				array(
					'name'          => esc_html__( 'Typography', 'cosme' ),
					'description'		=> esc_html__( 'Unlimited Google Fonts', 'cosme' ),
					'type'          => 'free',
				),
				array(
					'name'          => esc_html__( 'Two Selective Container', 'cosme' ),
					'description'		=> esc_html__( 'Fixed & Full Width', 'cosme' ),
					'type'          => 'free',
					
				),	
				array(
					'name'          => esc_html__( 'Colors', 'cosme' ),
					'description'		=> esc_html__( 'Primary & Secondary', 'cosme' ),
					'type'          => 'free',
					
				),		
				array(
					'name'          => esc_html__( '5 Social Profiles', 'cosme' ),
					'description'		=> esc_html__( 'Facebook, Twitter, Linkedin, Instagram & Youtube', 'cosme' ),
					'type'          => 'free',
					
				),
				array(
					'name'          => esc_html__( 'Archive Layout Options', 'cosme' ),
					'description'		=> esc_html__( 'Simple & Grid', 'cosme' ),
					'type'          => 'free',
					
				),		
				array(
					'name'          => esc_html__( 'Post , Page , Single Layout', 'cosme' ),
					'description'		=> esc_html__('Left Sidebar, Right Sidebar and No Sidebar' , 'cosme' ),
					'type'          => 'free',
					
				),		
				array(
					'name'          => esc_html__( 'Footer Options', 'cosme' ),
					'description'		=> esc_html__('Footer Widgets Column Disabled and Enable' , 'cosme' ),
					'type'          => 'free',
					
				),
				array(
					'name'          => esc_html__( ' Scroll to Top ', 'cosme' ),
					'description'		=> esc_html__(' Multiple Scroll Icons with Text Options ' , 'cosme' ),
					'type'          => 'free',
					
				),
				array(
					'name'          => esc_html__( ' Sticky Header ', 'cosme' ),
					'description'		=> esc_html__(' Flexible Sticky Header to your choice ' , 'cosme' ),
					'type'          => 'free',
					
				),
				array(
					'name'          => esc_html__( ' Wishlist ', 'cosme' ),
					'description'		=> esc_html__('Add favourite products to wishlist to buy and save them for future' , 'cosme' ),
					'type'          => 'pro',
					
				),
				array(
					'name'          => esc_html__( ' Multiple Header Layouts ', 'cosme' ),
					'description'		=> esc_html__('Switch header layouts to your choice' , 'cosme' ),
					'type'          => 'pro',
					
				),
				array(
					'name'          => esc_html__( ' Checkout Layouts ', 'cosme' ),
					'description'		=> esc_html__('Switch checkout layouts to your choice' , 'cosme' ),
					'type'          => 'pro',
					
				),
				array(
					'name'          => esc_html__( ' Quick View ', 'cosme' ),
					'description'		=> esc_html__('Quick view to products without being directed to the detail page' , 'cosme' ),
					'type'          => 'pro',
					
				),
				array(
					'name'          => esc_html__( ' Cart Layout ', 'cosme' ),
					'description'		=> esc_html__('Switch cart layouts to your choice' , 'cosme' ),
					'type'          => 'pro',
					
				),
				array(
					'name'          => esc_html__( ' Cart Drawer ', 'cosme' ),
					'description'		=> esc_html__('Stunning sidebar cart drawer' , 'cosme' ),
					'type'          => 'pro',	
				),
				array(
					'name'          => esc_html__( ' Ajax Cart ', 'cosme' ),
					'description'		=> esc_html__('Boost user shopping experience' , 'cosme' ),
					'type'          => 'pro',	
				),

				array(
					'name'          => esc_html__( ' Flexible Container ', 'cosme' ),
					'description'		=> esc_html__('Make your site container to your choice' , 'cosme' ),
					'type'          => 'pro',
					
				),

				array(
					'name'          => esc_html__( ' Footer Builder ', 'cosme' ),
					'description'		=> esc_html__('Build footer to your choice' , 'cosme' ),
					'type'          => 'pro',
					
				),

					
												
			),
		),
		array(
			'name'    => esc_html__( 'Free vs PRO', 'cosme' ),
			'type'    => 'html',
			'visible' => array( 'free' ),
			'data'    => cosme_free_vs_pro_html(),
		),
	);
	
	//Has pro
	$settings['has_pro'] = false;

	return $settings;
}
add_filter( 'cosme_register_settings', 'cosme_dashboard_settings' );
