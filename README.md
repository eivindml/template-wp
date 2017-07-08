# Wordpress Development Template

**What?**

A clean setup to use as a starting point for wordpress based projects. See also [template-wp-theme](https://github.com/eivindml/template-wp-theme) for a wordpress theme starter.

**Why?**
- Version control all code
- Collaborate through version control
- Multistage deploy (staging and production)
- Quick deploy. A safe, easy and quick process so that changes can be made in a hurry, without worry about doing something wrong.

## Using

## Installing

- `cd wp`
- `wp core download`
- Config `wp-config.php` in root folder.
- `wp db create` if db is not setup.
- `wp core install --url=wp-template.dev --title="WP Template" --admin_user=admin --admin_password=admin --admin_email=dev@dev.dev`
- `wp theme activate wp-template-theme`


### Prerequisits

- [wp-cli](https://github.com/wp-cli/wp-cli) (recommended). `brew install wp-cli`

### Updating

## Contributing

## Credits
