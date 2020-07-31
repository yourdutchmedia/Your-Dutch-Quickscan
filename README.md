# ydm-boilerplate

This is the Your Dutch Media boilerplate for the Wordpress CMS.

## Changelog

- Get_field en get_subfield functie zie [functions.php](./functions.php)
```php 
// ----------------------------------------------------------------------------------------
//  Change get_field to field
// ----------------------------------------------------------------------------------------
    function field($value)
    {
        return get_field($value);
    }

// ----------------------------------------------------------------------------------------
//  Change the_sub_field to subfield
// ----------------------------------------------------------------------------------------
    function subfield($value)
    {
        return the_sub_field($value);
    }
```
- URL variabelen veranderd naar function voor syntax herkenning. Zie : [functions.php](./functions.php)
```php
// ----------------------------------------------------------------------------------------
//  Get template directory url and store it in a function
// ----------------------------------------------------------------------------------------
function url($path)
{
    return get_template_directory_uri() . $path;
}
```
- Afkorting gebruiken om variable te printen. %php echo% vervangen met een =.
```php
Van:
<?php echo 123; ?>

Naar:
<?= 123 ?>
```
- Betere manier gevonden om images via acf te printen met ingevulde ALT tag. Image return value van Image url naar Image ID zetten.  Zie : [functions.php](./functions.php)
```php
// ----------------------------------------------------------------------------------------
//  Wordpress image shortcut
// ----------------------------------------------------------------------------------------

function wp_img($field_name) {
    $image_id = get_field($field_name);
    return wp_get_attachment_image($image_id, 'normal');
}

function wps_img($field_name) {
    $image_id = get_sub_field($field_name);
    return wp_get_attachment_image($image_id, 'normal');
}

// ----------------------------------------------------------------------------------------
//  Gebruik:
// ----------------------------------------------------------------------------------------

<?= wp_img('fieldname'); ?>
<?= wps_img('subfieldname'); ?>

// ----------------------------------------------------------------------------------------
//  Niet als volgt gebruiken:
// ----------------------------------------------------------------------------------------

<img src="<?php wp_img('fieldname') ?>" alt="">
```


## Usage

- Download The zip file from Github
- put it in the theme folder of your Wordpress installation
- then follow the installation guide below

### Installation

#### locate your theme folder

``
cd path/to/theme/folder
``

#### To install dependencies use:

``
npm install
``

#### To compile assets use

``
npm run dev
``

#### To watch live compiled assets use

``
npm run watch
``

#### For production use

``
npm run production
``

### Applying wordpress settings

#### Limiting 3 revisions

In wp-config.php add: 

```php
/** Limit revisions by 3 */
define ('WP_POST_REVISIONS', 3);
```
Add the define function anywhere above:

```php
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
```

## Tips
Use the index of a row.

```php
 $i = $the_query->current_post  

$args = array('post_type' => 'diensten', 'posts_per_page' => 10);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
        $i = $the_query->current_post;
        if ($i == 0) { Show if row index is equal to 1 }
        wp_reset_postdata();
    endwhile;
endif;
```
