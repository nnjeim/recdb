<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Class Namespace
	|--------------------------------------------------------------------------
	|
	| This value sets the root namespace for Livewire component classes in
	| your application. This value affects component auto-discovery and
	| any Livewire file helper commands, like `artisan make:livewire`.
	|
	| After changing this item, run: `php artisan livewire:discover`.
	|
	*/

	'class_namespace' => 'App\\Http\\Livewire',

	/*
	|--------------------------------------------------------------------------
	| View Path
	|--------------------------------------------------------------------------
	|
	| This value sets the path for Livewire component views. This affects
	| file manipulation helper commands like `artisan make:livewire`.
	|
	*/

	'view_path' => resource_path('views/livewire'),

	/*
	|--------------------------------------------------------------------------
	| Layout
	|--------------------------------------------------------------------------
	| The default layout view that will be used when rendering a component via
	| Route::get('/some-endpoint', SomeComponent::class);. In this case the
	| the view returned by SomeComponent will be wrapped in "layouts.app"
	|
	*/

	'layout' => 'components.layouts.app',

	/*
	|--------------------------------------------------------------------------
	| Livewire Assets URL
	|--------------------------------------------------------------------------
	|
	| This value sets the path to Livewire JavaScript assets, for cases where
	| your app's domain root is not the correct path. By default, Livewire
	| will load its JavaScript assets from the app's "relative root".
	|
	| Examples: "/assets", "myurl.com/app".
	|
	*/

	'asset_url' => null,

	/*
	|--------------------------------------------------------------------------
	| Livewire App URL
	|--------------------------------------------------------------------------
	|
	| This value should be used if livewire assets are served from CDN.
	| Livewire will communicate with an app through this url.
	|
	| Examples: "https://my-app.com", "myurl.com/app".
	|
	*/

	'app_url' => null,

	/*
	|--------------------------------------------------------------------------
	| Livewire Endpoint Middleware Group
	|--------------------------------------------------------------------------
	|
	| This value sets the middleware group that will be applied to the main
	| Livewire "message" endpoint (the endpoint that gets hit everytime
	| a Livewire component updates). It is set to "web" by default.
	|
	*/

	'middleware_group' => 'web',

	/*
	|--------------------------------------------------------------------------
	| Livewire Temporary File Uploads Endpoint Configuration
	|--------------------------------------------------------------------------
	|
	| Livewire handles file uploads by storing uploads in a temporary directory
	| before the file is validated and stored permanently. All file uploads
	| are directed to a global endpoint for temporary storage. The config
	| items below are used for customizing the way the endpoint works.
	|
	*/

	'temporary_file_upload' => [
		'disk' => 'public',        // Example: 'local', 's3'              Default: 'default'
		'rules' => ['required', 'file', 'max:6000288'],       // Example: ['file', 'mimes:png,jpg']  Default: ['required', 'file', 'max:12288'] (12MB)
		'directory' => 'tmp',   // Example: 'tmp'                      Default  'livewire-tmp'
		'middleware' => null,  // Example: 'throttle:5,1'             Default: 'throttle:60,1'
		'preview_mimes' => [   // Supported file types for temporary pre-signed file URLs.
			'png', 'gif', 'bmp', 'svg', 'wav', 'mp4',
			'mov', 'avi', 'wmv', 'mp3', 'm4a',
			'jpg', 'jpeg', 'mpga', 'webp', 'wma',
		],
		'max_upload_time' => 30, // Max duration (in minutes) before an upload gets invalidated.
		'cleanup' => true,
	],

	/*
	|---------------------------------------------------------------------------
	| Render On Redirect
	|---------------------------------------------------------------------------
	|
	| This value determines if Livewire will run a component's `render()` method
	| after a redirect has been triggered using something like `redirect(...)`
	| Setting this to true will render the view once more before redirecting
	|
	*/

	'render_on_redirect' => false,

	/*
	|---------------------------------------------------------------------------
	| Eloquent Model Binding
	|---------------------------------------------------------------------------
	|
	| Previous versions of Livewire supported binding directly to eloquent model
	| properties using wire:model by default. However, this behavior has been
	| deemed too "magical" and has therefore been put under a feature flag.
	|
	*/

	'legacy_model_binding' => false,

	/*
	|---------------------------------------------------------------------------
	| Auto-inject Frontend Assets
	|---------------------------------------------------------------------------
	|
	| By default, Livewire automatically injects its JavaScript and CSS into the
	| <head> and <body> of pages containing Livewire components. By disabling
	| this behavior, you need to use @livewireStyles and @livewireScripts.
	|
	*/

	'inject_assets' => false,

	/*
	|---------------------------------------------------------------------------
	| Navigate (SPA mode)
	|---------------------------------------------------------------------------
	|
	| By adding `wire:navigate` to links in your Livewire application, Livewire
	| will prevent the default link handling and instead request those pages
	| via AJAX, creating an SPA-like effect. Configure this behavior here.
	|
	*/

	'navigate' => [
		'show_progress_bar' => true,
		'progress_bar_color' => '#2299dd',
	],

	/*
	|---------------------------------------------------------------------------
	| HTML Morph Markers
	|---------------------------------------------------------------------------
	|
	| Livewire intelligently "morphs" existing HTML into the newly rendered HTML
	| after each update. To make this process more reliable, Livewire injects
	| "markers" into the rendered Blade surrounding @if, @class & @foreach.
	|
	*/

	'inject_morph_markers' => true,

	/*
	|---------------------------------------------------------------------------
	| Pagination Theme
	|---------------------------------------------------------------------------
	|
	| When enabling Livewire's pagination feature by using the `WithPagination`
	| trait, Livewire will use Tailwind templates to render pagination views
	| on the page. If you want Bootstrap CSS, you can specify: "bootstrap"
	|
	*/

	'pagination_theme' => 'tailwind',

	/*
	|--------------------------------------------------------------------------
	| Manifest File Path
	|--------------------------------------------------------------------------
	|
	| This value sets the path to the Livewire manifest file.
	| The default should work for most cases (which is
	| "<app_root>/bootstrap/cache/livewire-components.php"), but for specific
	| cases like when hosting on Laravel Vapor, it could be set to a different value.
	|
	| Example: for Laravel Vapor, it would be "/tmp/storage/bootstrap/cache/livewire-components.php".
	|
	*/

	'manifest_path' => null,

	/*
	|--------------------------------------------------------------------------
	| Back Button Cache
	|--------------------------------------------------------------------------
	|
	| This value determines whether the back button cache will be used on pages
	| that contain Livewire. By disabling back button cache, it ensures that
	| the back button shows the correct state of components, instead of
	| potentially stale, cached data.
	|
	| Setting it to "false" (default) will disable back button cache.
	|
	*/

	'back_button_cache' => false,

	/*
	|--------------------------------------------------------------------------
	| Render On Redirect
	|--------------------------------------------------------------------------
	|
	| This value determines whether Livewire will render before it's redirected
	| or not. Setting it to "false" (default) will mean the render method is
	| skipped when redirecting. And "true" will mean the render method is
	| run before redirecting. Browsers bfcache can store a potentially
	| stale view if render is skipped on redirect.
	|
	*/

	'render_on_redirect' => false,

];
