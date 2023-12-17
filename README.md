# Composered WordPress Plugin Boilerplate

Welcome to the Composered WordPress Plugin Boilerplate! Composer based framework to help build WordPress plugins faster and easily. This boilerplate provides a foundation for creating WordPress plugins with Composer support.

## Quick Start

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/your-username/composered.git

   ```

2. **Install Dependencies:**

```
 cd composered
 composer install
 Activate the Plugin:
```

Move the composered directory to wp-content/plugins/.

3. **Activate the plugin in the WordPress admin**

- Customizing the Plugin
- Modify Core Functionality:

4. **Customize inc/ComposeredPlugin.php for your specific needs**
   Extend Admin and Public Functionality:

- Extend inc/admin/Admin.php for admin-related features.
- Extend inc/public/PublicClass.php for public-facing features.

4. **Update Autoloading:**

```
composer dump-autoload
```

5. **Documentation**
   For detailed instructions and customization options, check the documentation.

6. **Contributing**
   Feel free to contribute by forking the repository and submitting pull requests.

7. **License**
   This project is licensed under the MIT License.
