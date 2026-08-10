<?php

/**
 * Front page template file.
 *
 * @package TailPress
 */

get_header();
?>

<!-- Reuseble Section -->
<?php
get_template_part('template-parts/homepage/hero');
?>

<?php
get_template_part('template-parts/homepage/client');
?>

<?php
get_template_part('template-parts/homepage/features');
?>

<?php
get_template_part('template-parts/homepage/cetak');
?>

<?php
get_template_part('template-parts/homepage/portfolio');
?>

<?php
get_template_part('template-parts/homepage/gallery');
?>

<?php
get_template_part('template-parts/homepage/koleksi');
?>

<?php
get_template_part('template-parts/homepage/jasa-cetak');
?>

<?php
get_template_part('template-parts/homepage/faq');
?>


<?php
get_footer();
