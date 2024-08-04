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
        'description' => 'I am working as a Engineering Manager at a software company in Hanoi, Vietnam. My main work is in the fields of Ecommerce Tech, EdTech, Content Management System, DevOps and Project Management ...'
    ],
    'avatar' => [
        'small' => 'https://secure.gravatar.com/avatar/463fc33119b4304b6fc0932ac3f262c3?size=100',
        'large' => 'https://secure.gravatar.com/avatar/463fc33119b4304b6fc0932ac3f262c3?size=500',
    ],
    'url' => 'https://nguyenanhung.com',
    'email' => 'dev@nguyenanhung.com',
    'blog' => 'https://blog.nguyenanhung.com',
    'facebook' => 'https://www.facebook.com/nguyenanhung',
    'instagram' => 'https://www.instagram.com/iam.hungng',
    'twitter' => 'https://twitter.com/nguyenanhung',
    'linkedin' => 'https://www.linkedin.com/in/nguyenanhung',
    'github' => 'https://github.com/nguyenanhung',
    'flickr' => 'https://www.flickr.com/people/nguyenanhung/',
];
$config['site_data'] = [
    'url' => config_item('base_url'),
    'image' => config_item('base_url') . 'assets/images/image_src.jpg',
    'site_name' => 'CodeIgniter v3 Skeleton Application on Vercel',
    'title' => 'Hung Nguyen',
    'description' => 'CodeIgniter v3 Skeleton Application on Vercel',
    'keywords' => 'CodeIgniter v3 Skeleton Application on Vercel',
    'fb_app_id' => '',
    'fb_admins' => ''
];
$config['tracking_code'] = [
    'google_analytics_id' => ''
];
