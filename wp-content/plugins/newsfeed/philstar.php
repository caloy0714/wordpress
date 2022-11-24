<?php
/**
 * @package PhilStar_RSS
 * @version 1.7.2
 */
/*
ADD THE HEADERS HERE
/**
/**
 * Plugin Name:       Phistar News
 * Plugin URI:        https://wordpress.org/plugins/philstar-rss/
 * Description:       Philstar
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Caloy
 * Author URI:        https://author.example.com/
 */



define( 'PHILSTAR_NEWS_RSS', "https://www.philstar.com/rss/headlines" );

function philstar()
{
    // Fetch the news
    return philstar_retrieve_news();
}

function philstar_retrieve_news()
{
    $news = '';
    $rss_feed = simplexml_load_file( PHILSTAR_NEWS_RSS );

    foreach ($rss_feed->channel->item as $feed_item)
    {
        $news .= '<div>';
        $news .= '<h1>' . $feed_item->title . '</h1>'; // Title
        $news .= '<p>' . $feed_item->description . '</p>'; // Description
        $news .= '<p><a href="' .$feed_item->link. '">Read more</a>'; // URL for actual news page
        $news .= '</div>';
    }

    return $news;
}

function philstar_activate()
{
    error_log('Philstar RSS Plugin is now activated');
}

function philstar_deactivate()
{
    error_log('Philstar RSS Plugin is now deactivated');
}

register_activation_hook( __FILE__, 'philstar_activate' );
register_deactivation_hook( __FILE__, 'philstar_deactivate' );
add_shortcode( 'philstar', 'philstar' );