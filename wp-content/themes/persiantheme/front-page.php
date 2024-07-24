function wp_login_form( $args = array() ) {

    <?php

    $defaults = array(
		'echo'              => true,
		// Default 'redirect' value takes the user back to the request URI.
		'redirect'          => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
		'form_id'           => 'loginform',
		'label_username'    => __( 'Username or Email Address' ),
		'label_password'    => __( 'Password' ),
		'label_remember'    => __( 'Remember Me' ),
		'label_log_in'      => __( 'Log In' ),
		'id_username'       => 'user_login',
		'id_password'       => 'user_pass',
		'id_remember'       => 'rememberme',
		'id_submit'         => 'wp-submit',
		'remember'          => true,
		'value_username'    => '',
		// Set 'value_remember' to true to default the "Remember me" checkbox to checked.
		'value_remember'    => false,
		// Set 'required_username' to true to add the required attribute to username field.
		'required_username' => false,
		// Set 'required_password' to true to add the required attribute to password field.
		'required_password' => false,
	);

	/**
	 * Filters the default login form output arguments.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_login_form()
	 *
	 * @param array $defaults An array of default login form arguments.
	 */
	$args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );

	/**
	 * Filters content to display at the top of the login form.
	 *
	 * The filter evaluates just following the opening form tag element.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_top = apply_filters( 'login_form_top', '', $args );

	/**
	 * Filters content to display in the middle of the login form.
	 *
	 * The filter evaluates just following the location where the 'login-password'
	 * field is displayed.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_middle = apply_filters( 'login_form_middle', '', $args );

	/**
	 * Filters content to display at the bottom of the login form.
	 *
	 * The filter evaluates just preceding the closing form tag element.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_bottom = apply_filters( 'login_form_bottom', '', $args );

	$form =
		sprintf(
			'<form name="%1$s" id="%1$s" action="%2$s" method="post">',
			esc_attr( $args['form_id'] ),
			esc_url( site_url( 'wp-login.php', 'login_post' ) )
		) .
		$login_form_top .
		sprintf(
			'<p class="login-username">
				<label for="%1$s">%2$s</label>
				<input type="text" name="log" id="%1$s" autocomplete="username" class="input" value="%3$s" size="20"%4$s />
			</p>',
			esc_attr( $args['id_username'] ),
			esc_html( $args['label_username'] ),
			esc_attr( $args['value_username'] ),
			( $args['required_username'] ? ' required="required"' : '' )
		) .
		sprintf(
			'<p class="login-password">
				<label for="%1$s">%2$s</label>
				<input type="password" name="pwd" id="%1$s" autocomplete="current-password" spellcheck="false" class="input" value="" size="20"%3$s />
			</p>',
			esc_attr( $args['id_password'] ),
			esc_html( $args['label_password'] ),
			( $args['required_password'] ? ' required="required"' : '' )
		) .
		$login_form_middle .
		( $args['remember'] ?
			sprintf(
				'<p class="login-remember"><label><input name="rememberme" type="checkbox" id="%1$s" value="forever"%2$s /> %3$s</label></p>',
				esc_attr( $args['id_remember'] ),
				( $args['value_remember'] ? ' checked="checked"' : '' ),
				esc_html( $args['label_remember'] )
			) : ''
		) .
		sprintf(
			'<p class="login-submit">
				<input type="submit" name="wp-submit" id="%1$s" class="button button-primary" value="%2$s" />
				<input type="hidden" name="redirect_to" value="%3$s" />
			</p>',
			esc_attr( $args['id_submit'] ),
			esc_attr( $args['label_log_in'] ),
			esc_url( $args['redirect'] )
		) .
		$login_form_bottom .
		'</form>';

	if ( $args['echo'] ) {
		echo $form;
	} else {
		return $form;
	}
