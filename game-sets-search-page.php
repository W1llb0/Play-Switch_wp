<?
/*
Template Name: Страница поиска Сетов игр
*/
?>
<? get_header(); ?>

<?
$args = array(
    'post_type' => 'game_sets',
    'posts_per_page' => -1,
    'meta_query' => [
        'relation' => 'OR',
        [
            'key' => 'developer',
            'value' => $_GET['developer']
        ],
        [
            'key' => 'release_date',
            'value' => $_GET['year'],
            'compare' => 'LIKE',
        ]
    ],
);

$posts = get_posts($args);

foreach ($posts as $post) {
    the_title();
}

wp_reset_postdata();

?>

<? get_footer(); ?>