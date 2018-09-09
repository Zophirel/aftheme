<?php 
add_theme_support( 'post-thumbnails' );

function get_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all( '/<img .+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
    $first_img = $matches[1][0];
    if ( empty( $first_img ) ) {
        // defines a fallback imaage
        $first_img = get_template_directory_uri() . "/img/default.png";
    }
    $first_img = '<img style="" src="' . $first_img . '" alt="Post Image" />';
    return $first_img;
}

/*
 * Display Image from the_post_thumbnail or the first image of a post else display a default Image
 * Chose the size from "thumbnail", "medium", "large", "full" or your own defined size using filters.
 * USAGE: <?php echo my_image_display(); ?>
 */

function my_image_display($size = 'full') {
	if (has_post_thumbnail()) {
		$image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id, $size);
		$image_url = $image_url[0];
	} else {
		global $post, $posts;
		$image_url = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$image_url = $matches [1] [0];
		
		//Defines a default image
		if(empty($image_url)){
			$image_url = get_bloginfo('template_url') . "/img/default.jpg";
		}
	}
	return $image_url;
}

function short_desc(){
    $num = strlen(get_the_content());
    if($num > 100)
    {
        $a =  substr(wp_strip_all_tags(get_the_content()), 0, 100) . " ...";
        return $a;
    }
    else
    {
        $a = wp_strip_all_tags(get_the_content());
        return $a;      
    }
}
add_filter( 'rwmb_meta_boxes', 'prefix_meta_boxes' );
function prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'  => 'Test Meta Box',
        'fields' => array(
            array(
                'id'   => 'trama',
                'name' => 'Trama',
                'type' => 'textarea',
            ),
            array(
                'type'        => 'single_image',
                'name'        => 'Single Image',
                'id'          => 'my_image',
                'image_size'  => 'thumbnail',
            ),            
        ),
    );
    return $meta_boxes;
}

/*
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');
 
/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');
 
/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;
 
/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :
 
if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
 
elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
 
endforeach;
}

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pag'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='curr'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='ina' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

function my_search_form( $form ) {
    $form = '
    <form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Cerca" />
    
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );
function italystrap_add_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'italystrap_add_jquery');


    /**
     * Gets all images attached to a post
     * @return string
     */
    function wpse_get_images() {
        global $post;
        $id = intval( $post->ID );
        $size = 'medium';
        $attachments = get_children( array(
                'post_parent' => $id,
                'post_status' => 'inherit',
                'post_type' => 'attachment',
                'post_mime_type' => 'image',
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ) );
        if ( empty( $attachments ) )
                    return '';

        $output = "\n";
    /**
     * Loop through each attachment
     */
    foreach ( $attachments as $id  => $attachment ) :

        $title = esc_html( $attachment->post_title, 1 );
        $img = wp_get_attachment_image_src( $id, $size );

        $output .= '<a class="selector thumb" href="' . esc_url( wp_get_attachment_url( $id ) ) . '" title="' . esc_attr( $title ) . '">';
        $output .= '<img class="aligncenter" src="' . esc_url( $img[0] ) . '" alt="' . esc_attr( $title ) . '" title="' . esc_attr( $title ) . '" />';
        $output .= '</a>';

    endforeach;

        return $output;
    }
    
$args = array(
	'numberposts' => 10,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

?>