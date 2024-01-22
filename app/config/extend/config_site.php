<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 4/22/18
 * Time: 18:59
 */
$config['site_author'] = [
    'name' => 'Hung Nguyen',
    'job' => [
        'title' => 'I\'m a software engineer',
        'description' => 'I\'m working for a software development company in Hanoi (Vietnam). I\'m familiar with PHP, MySQL, Python, JavaScript, VAS Service and Team leader ...'
    ],
    'avatar' => [
        'small' => config_item('base_url') . 'assets/images/HungNA.png',
        'large' => config_item('base_url') . 'assets/images/HungNA.png',
    ],
    'url' => 'https://nguyenanhung.com',
    'email' => 'dev@nguyenanhung.com',
    'blog' => 'https://blog.nguyenanhung.com',
    'facebook' => 'https://www.facebook.com/nguyenanhung',
    'instagram' => 'https://instagram.com/nguyenanhung',
    'twitter' => 'https://twitter.com/nguyenanhung',
    'linkedin' => 'https://www.linkedin.com/in/nguyenanhung',
    'github' => 'https://github.com/nguyenanhung',
    'flickr' => 'https://www.flickr.com/people/nguyenanhung/',
];
$config['site_data'] = [
    'url' => config_item('base_url'),
    'image' => config_item('base_url') . 'assets/images/image_src.jpg',
    'site_name' => 'CodeIgniter v3 Skeleton Application',
    'title' => 'Hung Nguyen',
    'description' => 'CodeIgniter v3 Skeleton Application',
    'keywords' => 'CodeIgniter v3 Skeleton Application',
    'fb_app_id' => '',
    'fb_admins' => ''
];
$config['tracking_code'] = [
    'google_analytics_id' => ''
];
