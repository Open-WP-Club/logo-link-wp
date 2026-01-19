# Logo Link for WP

A lightweight WordPress plugin that enhances your site logo's functionality by adding customizable click behaviors. Left-click directs to your homepage, while right-click opens a context menu with configurable options.

## Features

- Left-click on logo leads to homepage
- Right-click opens a custom context menu with two options:
  - **Assets Mode**: Link to your media/assets page (defaults to Media Library)
  - **Custom Mode**: Link to any custom URL with custom label text
- Conditional script loading for better performance
- Works with most WordPress themes
- Accessible (keyboard navigation, high contrast, reduced motion support)

## Installation

1. Clone this repository or download the ZIP file

```bash
git clone https://github.com/Open-WP-Club/wp-logo-link.git
```

2. Upload to your WordPress site:
   - Upload the `wp-logo-link` folder to `/wp-content/plugins/`
   - Or compress the folder and upload via WordPress Admin → Plugins → Add New → Upload Plugin

3. Activate the plugin through WordPress Admin → Plugins

4. Configure in Settings → General → Logo Link for WP Settings

## Configuration

1. Go to **Settings → General**
2. Scroll down to **Logo Link for WP Settings**
3. Choose right-click behavior:
   - **Assets Mode**: Enter your assets/media page URL (or leave empty for Media Library)
   - **Custom Mode**: Enter custom URL and optional link text
4. Save changes

## Requirements

- WordPress 6.0+
- PHP 8.2+
- Theme with standard WordPress logo classes (`.custom-logo-link`, `.site-logo`, etc.)

## License

GPL v2 - see [LICENSE](LICENSE) for details.

## Contributing

1. Fork the repository
2. Create feature branch: `git checkout -b feature/awesome-feature`
3. Commit changes: `git commit -m 'Add awesome feature'`
4. Push: `git push origin feature/awesome-feature`
5. Open a Pull Request
