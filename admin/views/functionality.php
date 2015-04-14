<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>

<?php
function code_ex( $function, $args ) {
    $html = htmlspecialchars('<?php ');
    $html .= $function;
    $html .= '<span class="ecs-code">( </span>';
    $html .= $args;
    $html .= '<span class="esc-code"> )</span>';
    $html .= htmlspecialchars(' ?>');
    echo $html;
}
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<table class="wp-list-table widefat functionality">
        <thead>
            <th scope="col" id="name" class="manage-column column-name">
                <?php _e('Function', 'cjhs-functionality'); ?>
            </th>
            <th scope="col" id="description" class="manage-column column-description">
                <?php _e('Description', 'cjhs-functionality'); ?>
            </th>
        </thead>
        <tbody id="the_list">
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_auto_copyright()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('Creates a copywrite based on the base date given through the current year', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_auto_copyright', '$year' ); ?></p>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$year</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The first year of the copyright', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: the current year', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_featured_image()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('Display featured image based on the set parameters', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_featured_image', '$args' ); ?></p>
<pre class="code-block">&lt;?php
    $defaults = array(
        'link'            => true,
        'size'            => 'full',
        'img_classes'     => '',
        'link_classes'    => ''
    )
    df_featured_image( $defaults );
?&gt;</pre>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$link</tt></dt>
                            <dd><?php _e('(<i>boolean</i>) (<i>optional</i>) Make the post thumbnail a link to the post', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: true', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$size</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) Choose the sixe of the post thumbnail', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: full', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$img_classes</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) Additional classes to add the the post thumbnail', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: None', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$link_classes</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) Additional classes to add the the post thumbnail link tag', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: None', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_header_logo()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('Display header logo based on the set parameters', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_header_logo', '$args' ); ?></p>
<pre class="code-block">&lt;?php
    $defaults = array(
        'type'    => '',
        'tagline' => false,
        'alt'     => get_bloginfo( 'name' )
    )
    df_header_logo( $defaults );
?&gt;</pre>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$type</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The type of header logo to display. You can choose "header-image" or "custom". Header image uses the WordPress header image in the "Apperance" section. "custom" out put generic markup allowing you to use a custom image with CSS', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: None', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$tagline</tt></dt>
                            <dd><?php _e('(<i>boolean</i>) (<i>optional</i>) include the site decsription', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: false', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$alt</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) alt tag for the header image', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: get_bloginfo( \'name\' )', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong><?php _e('Menu_Walker()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('A Custom Nav Menu Walker that includes structured data (schema.org). Used with wp_nav_menu()', 'cjhs-functionality'); ?> </p>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_meta_categories()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('A custom output listing the post\'s categories that includes structured data (schema.org)', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_meta_categories', '$args' ); ?></p>
<pre class="code-block">&lt;?php
    $defaults = array(
        'title'       => true,
        'title_text'  => 'View all posts in %s',
        'separator'   => ', '
    )
    df_meta_categories( $defaults );
?&gt;</pre>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$title</tt></dt>
                            <dd><?php _e('(<i>boolean</i>) (<i>optional</i>) Preceed the category list with a title', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: true', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$title_text</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The text to use preceding the category list', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: View all posts in %s', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$separator</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) charachter to use to seperate the categories in the list', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: \', \'', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_tags_list()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('A custom output listing the post\'s tags that includes structured data (schema.org)', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_tags_list', '$args' ); ?></p>
<pre class="code-block">&lt;?php
    $defaults = array(
        'title'       => true,
        'title_text'  => 'View all posts in %s',
        'separator'   => ', '
    )
    df_tags_list( $defaults );
?&gt;</pre>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$title</tt></dt>
                            <dd><?php _e('(<i>boolean</i>) (<i>optional</i>) Preceed the category list with a title', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: true', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$title_text</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The text to use preceding the category list', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: View all posts in %s', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$separator</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) charachter to use to seperate the categories in the list', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: \', \'', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_short_title()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('Truncates long post titles', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_short_title', '$args' ); ?></p>
<pre class="code-block">&lt;?php
    $defaults = array(
        'limit'    => '',
        'ellipsis' => '...'
    )
    df_short_title( $defaults );
?&gt;</pre>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$limit</tt></dt>
                            <dd><?php _e('(<i>int</i>) (<i>required</i>) The cahracter amount to display', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: None', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$ellipsis</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The elipsis to use', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: ...', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong class="toggle"><?php _e('df_title_tag()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('Creates a SEO freindly title by preceding the title with custom text and/or including the page number for paginated pages', 'cjhs-functionality'); ?> </p>
                    <div class="details">
                        <h3 class="heading"><?php _e('Usage', 'cjhs-functionality'); ?></h3>
                        <p class="usage"><?php code_ex( 'df_title_tag', '$args' ); ?></p>
<pre class="code-block">&lt;?php
    $defaults = array(
        'separator'     => '|',
        'search_text'   => 'Search Results for',
        'error_text'    => 'Page Not Found',
        'archive_text'  => 'Archive :'
    )
    df_title_tag( $defaults );
?&gt;</pre>
                        <h3 class="heading"><?php _e('Parameters', 'cjhs-functionality'); ?></h3>
                        <dl>
                            <dt><tt>$separator</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>required</i>) The cahracter seperating the preceding text from the page/post title', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: |', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$search_text</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The preceding text for search result pages', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: Search Results for', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$error_text</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The preceding text for error pages', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: Page Not Found', 'cjhs-functionality'); ?></dd>
                            </dl>
                            <dt><tt>$archive_text</tt></dt>
                            <dd><?php _e('(<i>string</i>) (<i>optional</i>) The preceding text for achive pages', 'cjhs-functionality'); ?></dd>
                            <dl>
                                <dd><?php _e('Default: Archive :', 'cjhs-functionality'); ?></dd>
                            </dl>
                        </dl>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="function-name">
                    <strong><?php _e('df_page_schema()', 'cjhs-functionality'); ?></strong>
                </td>
                <td class="column-description desc">
                    <p><?php _e('Adds structured data (schema.org) to the html tag for each page. Individual page\'s schema can be define in the "Page Schema" Meta Field.', 'cjhs-functionality'); ?> </p>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <th scope="col" id="name" class="manage-column column-name">
                <?php _e('Function', 'cjhs-functionality'); ?>
            </th>
            <th scope="col" id="description" class="manage-column column-description">
                <?php _e('Description', 'cjhs-functionality'); ?>
            </th>
        </tfoot>
    </table>

</div>
