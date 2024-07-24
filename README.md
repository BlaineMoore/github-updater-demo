# GitHub Updater Demo

WordPress plugin to demonstrate how `GitHubUpdater` can enable WordPress to check for and update a custom plugin that's hosted in either a public or private repository on GitHub.

## Getting Started

1. Copy `GitHubUpdater.php` into your plugin
2. Update namespace to match your plugin
3. Require `GitHubUpdater.php` in your plugin
4. Instantiate `GitHubUpdater` in your plugin

## Setup

How to add and configure `GitHubUpdater` for your plugin.

### Instantiate GitHubUpdater (Required)

Instantiate `GitHubUpdater` and pass in the absolute path to your root plugin file.

```php
$gitHubUpdater = new GitHubUpdater(__FILE__);
```

For example, `__FILE__` might resolve to:

```
/var/www/domains/example.org/wp-content/plugins/<pluginDir>/<pluginSlug>.php
```

### Configure: Production Branch (Optional)

If your production branch is not the default `main`, then specify it:

```php
$gitHubUpdater->setBranch('master');
```
Alternatively, you can add the following plugin header field instead:

```php
* Branch Name:    main
```

### Configure: Personal Access Token (Optional)

If your GitHub repository is private, then set your access token:

```php
$gitHubUpdater->setAccessToken('github_pat_XXXXXXXXX');
```

It's not recommended to hardcode a token like you see above.

Either define a constant in `wp-config.php`:

```php
define( 'GITHUB_ACCESS_TOKEN', 'github_pat_XXXXXXXXXX' );
```

And then pass in the constant:

```php
$gitHubUpdater->setAccessToken(GITHUB_ACCESS_TOKEN);
```

Or save your access token in `wp_options` and pass it via `get_option()`:

```php
$gitHubUpdater->setAccessToken(get_option('github_access_token'));
```

### Configure: Tested WordPress Version (Optional)

Specify the highest version of WordPress you've tested your plugin on:

```php
$gitHubUpdater->setTestedWpVersion('6.5.2');
```

Alternatively, you can add the following plugin header field instead:

```php
* Tested Up To:    6.5.2
```

This only impacts the compatibility message on Dashboard > Updates.

### Configure Minimum Requirements (Optional)

To specify the minimum version of WordPress and PHP required for this plugin, specify the following plugin header fields:

```php
* Requires at least:    6.5
* Requires PHP:         8.2
```

### Configure Plugin Icons and Banners (Optional)

To add the Icon and Banner image to your plugin, you can add the following plugin header fields:

```php
* Icon URI:         ../docs/icon-128x128.png
* Icon 2x URI:      ../docs/icon-256x256.png
* Banner URI:       ../docs/banner-772x250.png
* Banner 2x URI:    ../docs/banner-1544x500.png
```

The default sizes for the icons and banners are listed above in the example filenames above (though you can name them anything you want), and the value for those fields supports both relative and absolute URLs. 

If you use an absolute URL, then that image must be publicly accessible to the browser. 

If you use a relative URL, then that URL *must* be relative to the `GitHubUpdater.php` file; if it is in a subfolder of the plugin, and the images are located in a separate subfolder off of the root, then you must walk back the folder.

For example, if the update class is located at `includes/GitHubUpdater.php` and the images are located in `images/` then the relative url would be `../images/filename.png`. 

### Add GitHubUpdater (Required)

Add all necessary hooks to WordPress to keep your plugin updated moving forward:

```php
$gitHubUpdater->add();
```

This should be the last method call after `GitHubUpdater` has been configured.

If you want a deep dive into how `GitHubUpdater` works, check out this [blog post](https://ryansechrest.com/2024/04/how-to-enable-wordpress-to-update-your-custom-plugin-hosted-on-github/) by the original developer; note that some changes have been added in this fork..