const path               = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const CopyPlugin           = require( 'copy-webpack-plugin' );
const BrowserSyncPlugin    = require( 'browser-sync-webpack-plugin' );

module.exports = ( env, argv ) => {
	const isDev = argv.mode === 'development';

	const config = {
		entry: {
			main:                 './assets/src/js/main.js',
			'customizer-preview': './assets/src/js/customizer-preview.js',
			'skip-link-focus-fix': './assets/src/js/skip-link-focus-fix.js',
		},

		output: {
			path:     path.resolve( __dirname, 'assets/js' ),
			filename: '[name].js',
			clean:    false,
		},

		devtool: isDev ? 'source-map' : false,

		module: {
			rules: [
				{
					test:    /\.js$/,
					exclude: /node_modules/,
					use:     {
						loader:  'babel-loader',
						options: {
							presets: [ '@babel/preset-env' ],
						},
					},
				},
				{
					test: /\.(scss|css)$/,
					use:  [
						MiniCssExtractPlugin.loader,
						'css-loader',
						{
							loader:  'postcss-loader',
							options: {
								postcssOptions: {
									plugins: [ 'autoprefixer' ],
								},
							},
						},
						'sass-loader',
					],
				},
			],
		},

		plugins: [
			new MiniCssExtractPlugin( {
				filename: '../css/[name].css',
			} ),

			new CopyPlugin( {
				patterns: [
					{
						from: 'assets/src/images',
						to:   path.resolve( __dirname, 'assets/images' ),
						noErrorOnMissing: true,
					},
				],
			} ),
		],
	};

	if ( isDev ) {
		config.plugins.push(
			new BrowserSyncPlugin( {
				proxy:  'localhost',
				files:  [
					'**/*.php',
					'assets/css/**/*.css',
					'assets/js/**/*.js',
				],
				open:   false,
				notify: false,
			} )
		);
	}

	return config;
};
