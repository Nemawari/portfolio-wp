<?php 
/**
 * theme functions
 * Author: KOHEI NEMAWARI 
*/


/**
 * Renders the theme styles by enqueueing the main style with the last modified time of the style.css file.
 *
 * 
 */
function theme_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


/**
 * Creates a custom post type for News with specified labels and arguments.
 *
 * 
 */
function create_news_post_type() {
    $labels = array(
        'name'               => _x( 'News', 'post type general name' ),
        'singular_name'      => _x( 'News', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'news' ),
        'add_new_item'       => __( 'Add New News' ),
        'edit_item'          => __( 'Edit News' ),
        'new_item'           => __( 'New News' ),
        'all_items'          => __( 'All News' ),
        'view_item'          => __( 'View News' ),
        'search_items'       => __( 'Search News' ),
        'not_found'          => __( 'No news found' ),
        'not_found_in_trash' => __( 'No news found in the trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'News'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'news', $args );
}

add_action( 'init', 'create_news_post_type' );
function add_custom_fields_to_news_post() {
    add_meta_box(
        'news_custom_fields',
        'Custom Fields',
        'render_news_custom_fields',
        'news',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_custom_fields_to_news_post' );

function render_news_custom_fields( $post ) {
    $date = get_post_meta( $post->ID, 'date', true );
    $author = get_post_meta( $post->ID, 'author', true );
    $maxmi = get_post_meta( $post->ID, 'maxmi', true );
    $tel = get_post_meta( $post->ID, 'tel', true );
    $mail = get_post_meta( $post->ID, 'mail', true );
    $address = get_post_meta( $post->ID, 'address', true );

    ?>
    <div class="inside">
        <div class="field">
            <label for="date">Date:</label>
            <input type="text" name="date" id="date" value="<?php echo esc_attr( $date ); ?>">
        </div>
        <div class="field">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="<?php echo esc_attr( $author ); ?>">
        </div>
        <div class="field">
            <label for="maxmi">Maxmi:</label>
            <input type="text" name="maxmi" id="maxmi" value="<?php echo esc_attr( $maxmi ); ?>">
        </div>
        <div class="field">
            <label for="tel">Tel:</label>
            <input type="text" name="tel" id="tel" value="<?php echo esc_attr( $tel ); ?>">
        </div>
        <div class="field">
            <label for="mail">Mail:</label>
            <input type="text" name="mail" id="mail" value="<?php echo esc_attr( $mail ); ?>">
        </div>
        <div class="field">
            <label for="address">Address:</label>
            <textarea name="address" id="address"><?php echo esc_textarea( $address ); ?></textarea>
        </div>
    </div>
    <?php
}

function save_news_custom_fields( $post_id ) {
    if ( ! isset( $_POST['news_custom_fields_nonce'] ) || ! wp_verify_nonce( $_POST['news_custom_fields_nonce'], basename( __FILE__ ) ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['post_type'] ) && 'news' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        $date = sanitize_text_field( $_POST['date'] );
        update_post_meta( $post_id, 'date', $date );

        $author = sanitize_text_field( $_POST['author'] );
        update_post_meta( $post_id, 'author', $author );

        $maxmi = sanitize_text_field( $_POST['maxmi'] );
        update_post_meta( $post_id, 'maxmi', $maxmi );

        $tel = sanitize_text_field( $_POST['tel'] );
        update_post_meta( $post_id, 'tel', $tel );

        $mail = sanitize_text_field( $_POST['mail'] );
        update_post_meta( $post_id, 'mail', $mail );

        $address = sanitize_text_field( $_POST['address'] );
        update_post_meta( $post_id, 'address', $address );
    }
}
?>
