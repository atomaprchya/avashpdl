<?php
/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */

class AvashThemeOptions {
	private $avash_theme_options_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'avash_theme_options_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'avash_theme_options_page_init' ) );
		add_action('admin_enqueue_scripts', array($this,'wptuts_options_enqueue_scripts'));
		add_action( 'admin_init', array($this,'wptuts_options_setup' ));
	}

	public function wptuts_options_setup(){
		global $pagenow;
		if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {
			// Now we'll replace the 'Insert into Post Button' inside Thickbox
			add_filter( 'gettext', array($this,'replace_thickbox_text')  , 1, 3 );
		}
	}

	public function replace_thickbox_text($translated_text, $text, $domain) {
		if ('Insert into Post' == $text) {
		$referer = strpos( wp_get_referer(), 'avash-theme-options' );
			if ( $referer != '' ) {
			    return __('I want this to be my logo!', 'avash' );
			}
		}
		return $translated_text;
	}

	public function wptuts_options_enqueue_scripts(){
		wp_register_script( 'wptuts-upload', get_template_directory_uri() .'/assets/js/profilephoto.js', array('jquery','media-upload','thickbox') );

		if('toplevel_page_avash-theme-options' == get_current_screen() -> id){
			wp_enqueue_script('jquery');
			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('wptuts-upload');
		}
		
		
		
		
 
	}

	public function avash_theme_options_add_plugin_page() {
		add_menu_page(
			'Avash Theme Options', // page_title
			'Avash Theme Options', // menu_title
			'manage_options', // capability
			'avash-theme-options', // menu_slug
			array( $this, 'avash_theme_options_create_admin_page' ), // function
			'dashicons-admin-generic', // icon_url
			3 // position
		);
	}

	public function avash_theme_options_create_admin_page() {
		$this->avash_theme_options_options = get_option( 'avash_theme_options_option_name' ); ?>

		<div class="wrap">
			<h2>Avash Theme Options</h2>
			<p>Avash Theme Options</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php" enctype="multipart/form-data">
				<?php
					settings_fields( 'avash_theme_options_option_group' );
					do_settings_sections( 'avash-theme-options-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function avash_theme_options_page_init() {
		register_setting(
			'avash_theme_options_option_group', // option_group
			'avash_theme_options_option_name', // option_name
			array( $this, 'avash_theme_options_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'avash_theme_options_setting_section', // id
			'Settings', // title
			array( $this, 'avash_theme_options_section_info' ), // callback
			'avash-theme-options-admin' // page
		);

		add_settings_field(
			'author_name_0', // id
			'Author Name', // title
			array( $this, 'author_name_0_callback' ), // callback
			'avash-theme-options-admin', // page
			'avash_theme_options_setting_section' // section
		);

		add_settings_field(
			'designation_1', // id
			'Designation', // title
			array( $this, 'designation_1_callback' ), // callback
			'avash-theme-options-admin', // page
			'avash_theme_options_setting_section' // section
		);

		add_settings_field(
			'who_am_i_2', // id
			'Who am I?', // title
			array( $this, 'who_am_i_2_callback' ), // callback
			'avash-theme-options-admin', // page
			'avash_theme_options_setting_section' // section
		);

		add_settings_field(
			'email_3', // id
			'Email', // title
			array( $this, 'email_3_callback' ), // callback
			'avash-theme-options-admin', // page
			'avash_theme_options_setting_section' // section
		);

		 add_settings_field('profileimage',  __( 'Logo', 'avash' ), array($this,'wptuts_setting_logo'), 'avash-theme-options-admin', 'avash_theme_options_setting_section');

		 // Add Current Image Preview
		add_settings_field('wptuts_setting_logo_preview',  __( '', 'avash' ), array($this,'wptuts_setting_logo_preview'), 'avash-theme-options-admin', 'avash_theme_options_setting_section');

		add_settings_field('interests', 'Interests', array($this, 'interests_callback'), 'avash-theme-options-admin', 'avash_theme_options_setting_section');

		add_settings_field('address', 'Address', array($this, 'address_callback'), 'avash-theme-options-admin', 'avash_theme_options_setting_section');

	}

	public function wptuts_setting_logo_preview(){
		$wptuts_options = get_option( 'profileimage' );  ?>
		<div id="upload_logo_preview" style="min-height: 100px;">
		<img style="max-width:100%;" src="<?php echo esc_url( $this->avash_theme_options_options['profileimage']  ); ?>" />
		</div>
		<?php
	}

	public function avash_theme_options_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['author_name_0'] ) ) {
			$sanitary_values['author_name_0'] = sanitize_text_field( $input['author_name_0'] );
		}

		if ( isset( $input['designation_1'] ) ) {
			$sanitary_values['designation_1'] = sanitize_text_field( $input['designation_1'] );
		}

		if ( isset( $input['who_am_i_2'] ) ) {
			$sanitary_values['who_am_i_2'] = esc_textarea( $input['who_am_i_2'] );
		}

		if ( isset( $input['email_3'] ) ) {
			$sanitary_values['email_3'] = sanitize_text_field( $input['email_3'] );
		}

		if ( isset( $input['interests'] ) ) {
			$sanitary_values['interests'] = sanitize_text_field( $input['interests'] );
		}

		if ( isset( $input['profileimage'] ) ) {
			$sanitary_values['profileimage'] = sanitize_text_field( $input['profileimage'] );
		}

		if ( isset( $input['address'] ) ) {
			$sanitary_values['address'] = sanitize_text_field( $input['address'] );
		}

		return $sanitary_values;
	}

	public function avash_theme_options_section_info() {
		
	}

	public function author_name_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="avash_theme_options_option_name[author_name_0]" id="author_name_0" value="%s">',
			isset( $this->avash_theme_options_options['author_name_0'] ) ? esc_attr( $this->avash_theme_options_options['author_name_0']) : ''
		);
	}

	public function designation_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="avash_theme_options_option_name[designation_1]" id="designation_1" value="%s">',
			isset( $this->avash_theme_options_options['designation_1'] ) ? esc_attr( $this->avash_theme_options_options['designation_1']) : ''
		);
	}

	public function who_am_i_2_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="avash_theme_options_option_name[who_am_i_2]" id="who_am_i_2">%s</textarea>',
			isset( $this->avash_theme_options_options['who_am_i_2'] ) ? esc_attr( $this->avash_theme_options_options['who_am_i_2']) : ''
		);
	}

	public function email_3_callback() {
		printf(
			'<input class="regular-text" type="text" name="avash_theme_options_option_name[email_3]" id="email_3" value="%s">',
			isset( $this->avash_theme_options_options['email_3'] ) ? esc_attr( $this->avash_theme_options_options['email_3']) : ''
		);
	}

	public function interests_callback(){
		printf(
			'<input class="regular-text" type="text" name="avash_theme_options_option_name[interests]" id="interests" value="%s">',
			isset( $this->avash_theme_options_options['interests'] ) ? esc_attr( $this->avash_theme_options_options['interests']) : ''
		);
	}

	public function address_callback(){
		printf(
			'<textarea class="large-text" rows="5" name="avash_theme_options_option_name[address]" id="address">%s</textarea>',
			isset( $this->avash_theme_options_options['address'] ) ? esc_attr( $this->avash_theme_options_options['address']) : ''
		);
	}

	public function wptuts_setting_logo() {
    $wptuts_options = get_option( 'profileimage' );

    ?>
        <input type="hidden" id="profileimage_url" name="avash_theme_options_option_name[profileimage]" value="<?php echo esc_url( $this->avash_theme_options_options['profileimage'] ); ?>" />
        <input id="upload_profileimage_button" type="button" class="button" value="<?php _e( 'Upload Profile Image', 'avash' ); ?>" />
        <?php if ( '' != $this->avash_theme_options_options['profileimage'] ): ?>
            <input id="delete_logo_button" class="button" value="<?php _e( 'Delete Profile Image', 'avash' ); ?>" />
        <?php endif; ?>
        <span class="description"><?php _e('Upload an image for the profile image.', 'avash' ); ?></span>
    <?php
}

}


if ( is_admin() )
	$avash_theme_options = new AvashThemeOptions();

/* 
 * Retrieve this value with:
 * $avash_theme_options_options = get_option( 'avash_theme_options_option_name' ); // Array of All Options
 * $author_name_0 = $avash_theme_options_options['author_name_0']; // Author Name
 * $designation_1 = $avash_theme_options_options['designation_1']; // Designation
 * $who_am_i_2 = $avash_theme_options_options['who_am_i_2']; // Who am I?
 * $email_3 = $avash_theme_options_options['email_3']; // Email
 */
?>

