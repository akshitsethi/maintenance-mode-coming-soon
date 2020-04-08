<?php
/**
 * Configuration file for the plugin.
 */

namespace AkshitSethi\Plugins\MaintenanceMode;

/**
 * Set configuration options.
 *
 * @package AkshitSethi\Plugins\MaintenanceMode
 */
class Config {

	public static $plugin_url;
	public static $plugin_path;
	public static $default_options;

	const PLUGIN_SLUG   = 'maintenance-mode-coming-soon';
	const SHORT_SLUG    = 'mmcs';
	const VERSION       = '1.5.0';
	const DB_OPTION     = 'as_' . self::SHORT_SLUG;
	const PREFIX        = self::SHORT_SLUG . '_';
	const DEFAULT_FONTS = array(
		'Arial',
		'Helvetica',
		'Georgia',
		'Times New Roman',
		'Tahoma',
		'Verdana',
		'Geneva',
	);
	const GOOGLE_FONTS  = array(
		'ABeeZee',
		'Abel',
		'Abril Fatface',
		'Aclonica',
		'Acme',
		'Actor',
		'Adamina',
		'Advent Pro',
		'Aguafina Script',
		'Akronim',
		'Aladin',
		'Aldrich',
		'Alef',
		'Alegreya',
		'Alegreya SC',
		'Alegreya Sans',
		'Alegreya Sans SC',
		'Alex Brush',
		'Alfa Slab One',
		'Alice',
		'Alike',
		'Alike Angular',
		'Allan',
		'Allerta',
		'Allerta Stencil',
		'Allura',
		'Almendra',
		'Almendra Display',
		'Almendra SC',
		'Amarante',
		'Amaranth',
		'Amatic SC',
		'Amethysta',
		'Anaheim',
		'Andada',
		'Andika',
		'Angkor',
		'Annie Use Your Telescope',
		'Anonymous Pro',
		'Antic',
		'Antic Didone',
		'Antic Slab',
		'Anton',
		'Arapey',
		'Arbutus',
		'Arbutus Slab',
		'Architects Daughter',
		'Archivo Black',
		'Archivo Narrow',
		'Arimo',
		'Arizonia',
		'Armata',
		'Artifika',
		'Arvo',
		'Asap',
		'Asset',
		'Astloch',
		'Asul',
		'Atomic Age',
		'Aubrey',
		'Audiowide',
		'Autour One',
		'Average',
		'Average Sans',
		'Averia Gruesa Libre',
		'Averia Libre',
		'Averia Sans Libre',
		'Averia Serif Libre',
		'Bad Script',
		'Balthazar',
		'Bangers',
		'Basic',
		'Battambang',
		'Baumans',
		'Bayon',
		'Belgrano',
		'Belleza',
		'BenchNine',
		'Bentham',
		'Berkshire Swash',
		'Bevan',
		'Bigelow Rules',
		'Bigshot One',
		'Bilbo',
		'Bilbo Swash Caps',
		'Bitter',
		'Black Ops One',
		'Bokor',
		'Bonbon',
		'Boogaloo',
		'Bowlby One',
		'Bowlby One SC',
		'Brawler',
		'Bree Serif',
		'Bubblegum Sans',
		'Bubbler One',
		'Buda',
		'Buenard',
		'Butcherman',
		'Butterfly Kids',
		'Cabin',
		'Cabin Condensed',
		'Cabin Sketch',
		'Caesar Dressing',
		'Cagliostro',
		'Calligraffitti',
		'Cambo',
		'Candal',
		'Cantarell',
		'Cantata One',
		'Cantora One',
		'Capriola',
		'Cardo',
		'Carme',
		'Carrois Gothic',
		'Carrois Gothic SC',
		'Carter One',
		'Caudex',
		'Cedarville Cursive',
		'Ceviche One',
		'Changa One',
		'Chango',
		'Chau Philomene One',
		'Chela One',
		'Chelsea Market',
		'Chenla',
		'Cherry Cream Soda',
		'Cherry Swash',
		'Chewy',
		'Chicle',
		'Chivo',
		'Cinzel',
		'Cinzel Decorative',
		'Clicker Script',
		'Coda',
		'Coda Caption',
		'Codystar',
		'Combo',
		'Comfortaa',
		'Coming Soon',
		'Concert One',
		'Condiment',
		'Content',
		'Contrail One',
		'Convergence',
		'Cookie',
		'Copse',
		'Corben',
		'Courgette',
		'Cousine',
		'Coustard',
		'Covered By Your Grace',
		'Crafty Girls',
		'Creepster',
		'Crete Round',
		'Crimson Text',
		'Croissant One',
		'Crushed',
		'Cuprum',
		'Cutive',
		'Cutive Mono',
		'Damion',
		'Dancing Script',
		'Dangrek',
		'Dawning of a New Day',
		'Days One',
		'Delius',
		'Delius Swash Caps',
		'Delius Unicase',
		'Della Respira',
		'Denk One',
		'Devonshire',
		'Didact Gothic',
		'Diplomata',
		'Diplomata SC',
		'Domine',
		'Donegal One',
		'Doppio One',
		'Dorsa',
		'Dosis',
		'Dr Sugiyama',
		'Droid Sans',
		'Droid Sans Mono',
		'Droid Serif',
		'Duru Sans',
		'Dynalight',
		'EB Garamond',
		'Eagle Lake',
		'Eater',
		'Economica',
		'Ek Mukta',
		'Electrolize',
		'Elsie',
		'Elsie Swash Caps',
		'Emblema One',
		'Emilys Candy',
		'Engagement',
		'Englebert',
		'Enriqueta',
		'Erica One',
		'Esteban',
		'Euphoria Script',
		'Ewert',
		'Exo',
		'Exo 2',
		'Expletus Sans',
		'Fanwood Text',
		'Fascinate',
		'Fascinate Inline',
		'Faster One',
		'Fasthand',
		'Fauna One',
		'Federant',
		'Federo',
		'Felipa',
		'Fenix',
		'Finger Paint',
		'Fira Mono',
		'Fira Sans',
		'Fjalla One',
		'Fjord One',
		'Flamenco',
		'Flavors',
		'Fondamento',
		'Fontdiner Swanky',
		'Forum',
		'Francois One',
		'Freckle Face',
		'Fredericka the Great',
		'Fredoka One',
		'Freehand',
		'Fresca',
		'Frijole',
		'Fruktur',
		'Fugaz One',
		'GFS Didot',
		'GFS Neohellenic',
		'Gabriela',
		'Gafata',
		'Galdeano',
		'Galindo',
		'Gentium Basic',
		'Gentium Book Basic',
		'Geo',
		'Geostar',
		'Geostar Fill',
		'Germania One',
		'Gilda Display',
		'Give You Glory',
		'Glass Antiqua',
		'Glegoo',
		'Gloria Hallelujah',
		'Goblin One',
		'Gochi Hand',
		'Gorditas',
		'Goudy Bookletter 1911',
		'Graduate',
		'Grand Hotel',
		'Gravitas One',
		'Great Vibes',
		'Griffy',
		'Gruppo',
		'Gudea',
		'Habibi',
		'Hammersmith One',
		'Hanalei',
		'Hanalei Fill',
		'Handlee',
		'Hanuman',
		'Happy Monkey',
		'Headland One',
		'Henny Penny',
		'Herr Von Muellerhoff',
		'Hind',
		'Holtwood One SC',
		'Homemade Apple',
		'Homenaje',
		'IM Fell DW Pica',
		'IM Fell DW Pica SC',
		'IM Fell Double Pica',
		'IM Fell Double Pica SC',
		'IM Fell English',
		'IM Fell English SC',
		'IM Fell French Canon',
		'IM Fell French Canon SC',
		'IM Fell Great Primer',
		'IM Fell Great Primer SC',
		'Iceberg',
		'Iceland',
		'Imprima',
		'Inconsolata',
		'Inder',
		'Indie Flower',
		'Inika',
		'Irish Grover',
		'Istok Web',
		'Italiana',
		'Italianno',
		'Jacques Francois',
		'Jacques Francois Shadow',
		'Jim Nightshade',
		'Jockey One',
		'Jolly Lodger',
		'Josefin Sans',
		'Josefin Slab',
		'Joti One',
		'Judson',
		'Julee',
		'Julius Sans One',
		'Junge',
		'Jura',
		'Just Another Hand',
		'Just Me Again Down Here',
		'Kalam',
		'Kameron',
		'Kantumruy',
		'Karla',
		'Karma',
		'Kaushan Script',
		'Kavoon',
		'Kdam Thmor',
		'Keania One',
		'Kelly Slab',
		'Kenia',
		'Khmer',
		'Kite One',
		'Knewave',
		'Kotta One',
		'Koulen',
		'Kranky',
		'Kreon',
		'Kristi',
		'Krona One',
		'La Belle Aurore',
		'Lancelot',
		'Lato',
		'League Script',
		'Leckerli One',
		'Ledger',
		'Lekton',
		'Lemon',
		'Libre Baskerville',
		'Life Savers',
		'Lilita One',
		'Lily Script One',
		'Limelight',
		'Linden Hill',
		'Lobster',
		'Lobster Two',
		'Londrina Outline',
		'Londrina Shadow',
		'Londrina Sketch',
		'Londrina Solid',
		'Lora',
		'Love Ya Like A Sister',
		'Loved by the King',
		'Lovers Quarrel',
		'Luckiest Guy',
		'Lusitana',
		'Lustria',
		'Macondo',
		'Macondo Swash Caps',
		'Magra',
		'Maiden Orange',
		'Mako',
		'Marcellus',
		'Marcellus SC',
		'Marck Script',
		'Margarine',
		'Marko One',
		'Marmelad',
		'Marvel',
		'Mate',
		'Mate SC',
		'Maven Pro',
		'McLaren',
		'Meddon',
		'MedievalSharp',
		'Medula One',
		'Megrim',
		'Meie Script',
		'Merienda',
		'Merienda One',
		'Merriweather',
		'Merriweather Sans',
		'Metal',
		'Metal Mania',
		'Metamorphous',
		'Metrophobic',
		'Michroma',
		'Milonga',
		'Miltonian',
		'Miltonian Tattoo',
		'Miniver',
		'Miss Fajardose',
		'Modern Antiqua',
		'Molengo',
		'Molle',
		'Monda',
		'Monofett',
		'Monoton',
		'Monsieur La Doulaise',
		'Montaga',
		'Montez',
		'Montserrat',
		'Montserrat Alternates',
		'Montserrat Subrayada',
		'Moul',
		'Moulpali',
		'Mountains of Christmas',
		'Mouse Memoirs',
		'Mr Bedfort',
		'Mr Dafoe',
		'Mr De Haviland',
		'Mrs Saint Delafield',
		'Mrs Sheppards',
		'Muli',
		'Mystery Quest',
		'Neucha',
		'Neuton',
		'New Rocker',
		'News Cycle',
		'Niconne',
		'Nixie One',
		'Nobile',
		'Nokora',
		'Norican',
		'Nosifer',
		'Nothing You Could Do',
		'Noticia Text',
		'Noto Sans',
		'Noto Serif',
		'Nova Cut',
		'Nova Flat',
		'Nova Mono',
		'Nova Oval',
		'Nova Round',
		'Nova Script',
		'Nova Slim',
		'Nova Square',
		'Numans',
		'Nunito',
		'Odor Mean Chey',
		'Offside',
		'Old Standard TT',
		'Oldenburg',
		'Oleo Script',
		'Oleo Script Swash Caps',
		'Open Sans',
		'Open Sans Condensed',
		'Oranienbaum',
		'Orbitron',
		'Oregano',
		'Orienta',
		'Original Surfer',
		'Oswald',
		'Over the Rainbow',
		'Overlock',
		'Overlock SC',
		'Ovo',
		'Oxygen',
		'Oxygen Mono',
		'PT Mono',
		'PT Sans',
		'PT Sans Caption',
		'PT Sans Narrow',
		'PT Serif',
		'PT Serif Caption',
		'Pacifico',
		'Paprika',
		'Parisienne',
		'Passero One',
		'Passion One',
		'Pathway Gothic One',
		'Patrick Hand',
		'Patrick Hand SC',
		'Patua One',
		'Paytone One',
		'Peralta',
		'Permanent Marker',
		'Petit Formal Script',
		'Petrona',
		'Philosopher',
		'Piedra',
		'Pinyon Script',
		'Pirata One',
		'Plaster',
		'Play',
		'Playball',
		'Playfair Display',
		'Playfair Display SC',
		'Podkova',
		'Poiret One',
		'Poller One',
		'Poly',
		'Pompiere',
		'Pontano Sans',
		'Port Lligat Sans',
		'Port Lligat Slab',
		'Prata',
		'Preahvihear',
		'Press Start 2P',
		'Princess Sofia',
		'Prociono',
		'Prosto One',
		'Puritan',
		'Purple Purse',
		'Quando',
		'Quantico',
		'Quattrocento',
		'Quattrocento Sans',
		'Questrial',
		'Quicksand',
		'Quintessential',
		'Qwigley',
		'Racing Sans One',
		'Radley',
		'Rajdhani',
		'Raleway',
		'Raleway Dots',
		'Rambla',
		'Rammetto One',
		'Ranchers',
		'Rancho',
		'Rationale',
		'Redressed',
		'Reenie Beanie',
		'Revalia',
		'Ribeye',
		'Ribeye Marrow',
		'Righteous',
		'Risque',
		'Roboto',
		'Roboto Condensed',
		'Roboto Slab',
		'Rochester',
		'Rock Salt',
		'Rokkitt',
		'Romanesco',
		'Ropa Sans',
		'Rosario',
		'Rosarivo',
		'Rouge Script',
		'Rubik Mono One',
		'Rubik One',
		'Ruda',
		'Rufina',
		'Ruge Boogie',
		'Ruluko',
		'Rum Raisin',
		'Ruslan Display',
		'Russo One',
		'Ruthie',
		'Rye',
		'Sacramento',
		'Sail',
		'Salsa',
		'Sanchez',
		'Sancreek',
		'Sansita One',
		'Sarina',
		'Satisfy',
		'Scada',
		'Schoolbell',
		'Seaweed Script',
		'Sevillana',
		'Seymour One',
		'Shadows Into Light',
		'Shadows Into Light Two',
		'Shanti',
		'Share',
		'Share Tech',
		'Share Tech Mono',
		'Shojumaru',
		'Short Stack',
		'Siemreap',
		'Sigmar One',
		'Signika',
		'Signika Negative',
		'Simonetta',
		'Sintony',
		'Sirin Stencil',
		'Six Caps',
		'Skranji',
		'Slabo 13px',
		'Slabo 27px',
		'Slackey',
		'Smokum',
		'Smythe',
		'Sniglet',
		'Snippet',
		'Snowburst One',
		'Sofadi One',
		'Sofia',
		'Sonsie One',
		'Sorts Mill Goudy',
		'Source Code Pro',
		'Source Sans Pro',
		'Source Serif Pro',
		'Special Elite',
		'Spicy Rice',
		'Spinnaker',
		'Spirax',
		'Squada One',
		'Stalemate',
		'Stalinist One',
		'Stardos Stencil',
		'Stint Ultra Condensed',
		'Stint Ultra Expanded',
		'Stoke',
		'Strait',
		'Sue Ellen Francisco',
		'Sunshiney',
		'Supermercado One',
		'Suwannaphum',
		'Swanky and Moo Moo',
		'Syncopate',
		'Tangerine',
		'Taprom',
		'Tauri',
		'Teko',
		'Telex',
		'Tenor Sans',
		'Text Me One',
		'The Girl Next Door',
		'Tienne',
		'Tinos',
		'Titan One',
		'Titillium Web',
		'Trade Winds',
		'Trocchi',
		'Trochut',
		'Trykker',
		'Tulpen One',
		'Ubuntu',
		'Ubuntu Condensed',
		'Ubuntu Mono',
		'Ultra',
		'Uncial Antiqua',
		'Underdog',
		'Unica One',
		'UnifrakturCook',
		'UnifrakturMaguntia',
		'Unkempt',
		'Unlock',
		'Unna',
		'VT323',
		'Vampiro One',
		'Varela',
		'Varela Round',
		'Vast Shadow',
		'Vibur',
		'Vidaloka',
		'Viga',
		'Voces',
		'Volkhov',
		'Vollkorn',
		'Voltaire',
		'Waiting for the Sunrise',
		'Wallpoet',
		'Walter Turncoat',
		'Warnes',
		'Wellfleet',
		'Wendy One',
		'Wire One',
		'Yanone Kaffeesatz',
		'Yellowtail',
		'Yeseva One',
		'Yesteryear',
		'Zeyada',
	);
	const SOCIAL        = array(
		'500px'          => '500px',
		'amazon'         => 'Amazon',
		'android'        => 'Android',
		'angellist'      => 'AngelList',
		'apple'          => 'Apple',
		'behance'        => 'Behance',
		'bitbucket'      => 'BitBucket',
		'bitcoin'        => 'Bitcoin',
		'buysellads'     => 'BuySellAds',
		'delicious'      => 'Delicious',
		'deviantart'     => 'DeviantArt',
		'digg'           => 'Digg',
		'dribbble'       => 'Dribbble',
		'dropbox'        => 'Dropbox',
		'etsy'           => 'Etsy',
		'facebook'       => 'Facebook',
		'flickr'         => 'Flickr',
		'foursquare'     => 'FourSquare',
		'github-alt'     => 'GitHub',
		'google'         => 'Google',
		'google-plus'    => 'Google+',
		'imdb'           => 'IMDB',
		'instagram'      => 'Instagram',
		'lastfm'         => 'Last.fm',
		'linkedin'       => 'LinkedIn',
		'medium'         => 'Medium',
		'meetup'         => 'Meetup',
		'mixcloud'       => 'MixCloud',
		'paypal'         => 'PayPal',
		'pinterest'      => 'Pinterest',
		'product-hunt'   => 'ProductHunt',
		'quora'          => 'Quora',
		'reddit'         => 'Reddit',
		'scribd'         => 'Scribd',
		'skype'          => 'Skype',
		'slack'          => 'Slack',
		'slideshare'     => 'SlideShare',
		'snapchat'       => 'SnapChat',
		'soundcloud'     => 'SoundCloud',
		'spotify'        => 'Spotify',
		'stack-overflow' => 'StackOverflow',
		'stumbleupon'    => 'StumbleUpon',
		'telegram'       => 'Telegram',
		'trello'         => 'Trello',
		'tripadvisor'    => 'TripAdvisor',
		'tumblr'         => 'Tumblr',
		'twitch'         => 'Twitch',
		'twitter'        => 'Twitter',
		'vimeo'          => 'Vimeo',
		'vine'           => 'Vine',
		'vk'             => 'VK',
		'wechat'         => 'WeChat',
		'weibo'          => 'Weibo',
		'whatsapp'       => 'WhatsApp',
		'wikipedia-w'    => 'Wikipedia',
		'wordpress'      => 'WordPress',
		'xing'           => 'Xing',
		'yahoo'          => 'Yahoo',
		'youtube-play'   => 'YouTube',
	);


	/**
	 * Class constructor.
	 */
	public function __construct() {
		self::$plugin_url  = plugin_dir_url( dirname( __FILE__ ) );
		self::$plugin_path = plugin_dir_path( dirname( __FILE__ ) );

		// Default options
		$this->default_options();
	}


	/**
	 * Get plugin name.
	 *
	 * @since 1.0.0
	 */
	public static function get_plugin_name() {
		return esc_html__( 'Maintenance Mode & Coming Soon', 'maintenance-mode-coming-soon' );
	}


	/**
	 * Add default options.
	 *
	 * @since 1.0.0
	 */
	public function default_options() {
		self::$default_options = array(
			'basic'    => array(
				'status'           => false,
				'title'            => esc_html__( 'Maintenance Mode', 'maintenance-mode-coming-soon' ),
				'header_text'      => esc_html__( 'Maintenance Mode', 'maintenance-mode-coming-soon' ),
				'secondary_text'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra eu felis quis lobortis. Proin vitae rutrum nisl, ut ullamcorper quam. Praesent faucibus ligula ac nisl varius dictum. Maecenas iaculis posuere orci, sed consectetur augue.', 'maintenance-mode-coming-soon' ),
				'antispam_text'    => esc_html__( 'And yes, we hate spam too!', 'maintenance-mode-coming-soon' ),
				'custom_login_url' => '',
				'show_logged_in'   => false,
				'exclude_se'       => true,
				'arrange'          => 'logo,header,secondary,social,form,html',
				'analytics'        => '',
			),
			'email'    => array(
				'mailchimp_api'   => '',
				'mailchimp_list'  => '',
				'message_noemail' => esc_html__( 'Please provide your email address.', 'maintenance-mode-coming-soon' ),
				'message_error'   => esc_html__( 'This looks like an invalid request. Please try again.', 'maintenance-mode-coming-soon' ),
				'message_wrong'   => esc_html__( 'Please provide a valid email address.', 'maintenance-mode-coming-soon' ),
				'message_done'    => esc_html__( 'Thank you! We\'ll be in touch!', 'maintenance-mode-coming-soon' ),
			),
			'design'   => array(
				'logo'                  => '',
				'favicon'               => '',
				'bg_cover'              => '',
				'content_overlay'       => false,
				'content_bg_opacity'    => '0.85',
				'content_bg'            => '',
				'content_border'        => 'bbbbbb',
				'content_border_width'  => '2',
				'content_border_radius' => '2',
				'content_width'         => '440',
				'bg_color'              => 'ffffff',
				'content_position'      => 'center',
				'content_alignment'     => 'left',
				'header_font'           => 'Karla',
				'secondary_font'        => 'Karla',
				'header_font_size'      => '28',
				'secondary_font_size'   => '14',
				'header_font_color'     => '090909',
				'secondary_font_color'  => '090909',
				'antispam_font_size'    => '13',
				'antispam_font_color'   => 'bbbbbb',
			),
			'form'     => array(
				'input_text'          => esc_html__( 'Enter your email address..', 'maintenance-mode-coming-soon' ),
				'button_text'         => esc_html__( 'Subscribe', 'maintenance-mode-coming-soon' ),
				'ignore_form_styles'  => false,
				'input_font_size'     => '13',
				'button_font_size'    => '12',
				'input_font_color'    => '090909',
				'button_font_color'   => 'ffffff',
				'input_bg'            => '',
				'button_bg'           => '0f0f0f',
				'input_bg_hover'      => '',
				'button_bg_hover'     => '0a0a0a',
				'input_border_width'  => '2',
				'button_border_width' => '2',
				'input_border'        => 'eeeeee',
				'button_border'       => '0f0f0f',
				'input_border_hover'  => 'bbbbbb',
				'button_border_hover' => '0a0a0a',
				'success_background'  => '90c695',
				'success_color'       => 'ffffff',
				'error_background'    => 'e08283',
				'error_color'         => 'ffffff',
			),
			'social'   => array(
				'arrange'        => '',
				'link_color'     => '0b0b0b',
				'link_hover'     => '0b0b0b',
				'icon_size'      => '16',
				'link_target'    => '_blank',
				'500px'          => '',
				'amazon'         => '',
				'android'        => '',
				'angellist'      => '',
				'apple'          => '',
				'behance'        => '',
				'bitbucket'      => '',
				'bitcoin'        => '',
				'buysellads'     => '',
				'delicious'      => '',
				'deviantart'     => '',
				'digg'           => '',
				'dribbble'       => '',
				'dropbox'        => '',
				'etsy'           => '',
				'facebook'       => '',
				'flickr'         => '',
				'foursquare'     => '',
				'github-alt'     => '',
				'google'         => '',
				'google-plus'    => '',
				'imdb'           => '',
				'instagram'      => '',
				'lastfm'         => '',
				'linkedin'       => '',
				'medium'         => '',
				'meetup'         => '',
				'mixcloud'       => '',
				'paypal'         => '',
				'pinterest'      => '',
				'product-hunt'   => '',
				'quora'          => '',
				'reddit'         => '',
				'scribd'         => '',
				'skype'          => '',
				'slack'          => '',
				'slideshare'     => '',
				'snapchat'       => '',
				'soundcloud'     => '',
				'spotify'        => '',
				'stack-overflow' => '',
				'stumbleupon'    => '',
				'telegram'       => '',
				'trello'         => '',
				'tripadvisor'    => '',
				'tumblr'         => '',
				'twitch'         => '',
				'twitter'        => '',
				'vimeo'          => '',
				'vine'           => '',
				'vk'             => '',
				'wechat'         => '',
				'weibo'          => '',
				'whatsapp'       => '',
				'wikipedia-w'    => '',
				'wordpress'      => '',
				'xing'           => '',
				'yahoo'          => '',
				'youtube-play'   => '',
			),
			'advanced' => array(
				'disable_settings' => false,
				'custom_html'      => '',
				'custom_css'       => '',
			),
		);
	}

}

new Config();
