<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/1/18
 * Time: 11:14
 */
/** @var object $site_data */
/** @var object $author */
/** @var object $tracking */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="<?= base_url() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title><?= $site_data->site_name ?></title>
    <meta name="robots" content="noindex">
    <!-- DNS Prefetch -->
    <link href='//maxcdn.bootstrapcdn.com' rel='dns-prefetch' />
    <link href='//cdnjs.cloudflare.com' rel='dns-prefetch' />

    <!-- Meta Contents -->
    <meta name="generator" content="<?= $site_data->site_name ?>">
    <meta name="copyright" content="<?= $site_data->site_name ?>" />
    <meta name="generator" content="<?= $site_data->site_name ?>" />
    <meta name="author" content="<?= $author->name ?>" />
    <meta name="description" content="<?= $site_data->description ?>">
    <meta name="keywords" content="<?= $site_data->keywords ?>">

    <!-- Site Property -->
    <meta property="fb:app_id" content="<?= $site_data->fb_app_id ?>" />
    <meta property="fb:admins" content="<?= $site_data->fb_admins ?>" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $site_data->site_name ?>" />
    <meta property="og:description" content="<?= $site_data->description ?>" />
    <meta property="og:url" content="<?= base_url() ?>" />
    <meta property="og:image" content="<?= assets_url('images/image_src.jpg') ?>" />
    <meta property="og:site_name" content="<?= $site_data->site_name ?>" />
    <meta itemprop="title" content="<?= $site_data->site_name ?>" />
    <meta itemprop="description" content="<?= $site_data->description ?>" />
    <meta itemprop="url" content="<?= base_url() ?>" />
    <meta itemprop="image" content="<?= assets_url('images/image_src.jpg') ?>" />

    <!-- Favicon -->
    <?php $this->load->view('favicon'); ?>

    <link rel="bookmark" href="<?= base_url() ?>" />
    <link rel="canonical" href="<?= base_url() ?>" />
    <link rel="image_src" href="<?= assets_url('images/image_src.jpg') ?>" />

    <!-- Resource -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' rel='stylesheet' type='text/css'>
    <style>
        body {
            background-color: #F2F2F2;
            font-family: "Courier New", Courier, monospace;
            font-weight: 300;
            font-size: 16px;
            color: #FFFFFF;
            -webkit-font-smoothing: antialiased;
            -webkit-overflow-scrolling: touch;
        }

        /* Titles */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 750;
            color: #FFFFFF;
            margin-bottom: 25px;
            text-shadow: 5px 2px 4px #3A2727;
        }

        /* Paragraph & Typographic */
        p {
            color: #FFFFFF;
            line-height: 28px;
            margin-bottom: 25px;
            font-size: 20px;
            text-shadow: 3px -1px 3px #3A2727;
            font-weight: bold;
        }

        /* Links */
        a {
            color: #11F524;
            word-wrap: break-word;
            -webkit-transition: color 0.1s ease-in, background 0.1s ease-in;
            -moz-transition: color 0.1s ease-in, background 0.1s ease-in;
            -ms-transition: color 0.1s ease-in, background 0.1s ease-in;
            -o-transition: color 0.1s ease-in, background 0.1s ease-in;
            transition: color 0.1s ease-in, background 0.1s ease-in;
        }

        a:hover,
        a:focus {
            color: #FFFF00;
            text-decoration: none;
            outline: 0;
        }

        a:before,
        a:after {
            -webkit-transition: color 0.1s ease-in, background 0.1s ease-in;
            -moz-transition: color 0.1s ease-in, background 0.1s ease-in;
            -ms-transition: color 0.1s ease-in, background 0.1s ease-in;
            -o-transition: color 0.1s ease-in, background 0.1s ease-in;
            transition: color 0.1s ease-in, background 0.1s ease-in;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #CCCCCC;
            margin: 1em 0;
            padding: 0;
        }

        .logo {
            text-align: center;
            margin-top: 25px;
        }

        .logo img {
            border-radius: 50px;
        }

        h1 {
            font-size: 70px;
        }

        .w {
            margin-top: 60px;
        }

        .w.tooltip-demo {
            font-size: 1.5em;
        }

        .w i {
            padding: 12px;
        }

        @-webkit-keyframes cloudAnimation {
            from {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            to {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        @keyframes cloudAnimation {
            from {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            to {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        #clouds {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            z-index: 9999;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        #clouds img {
            width: 100%;
            left: 0;
            top: 0;
            position: absolute;
            opacity: 0.1;
        }

        #clouds img.cloud1 {
            -webkit-animation: cloudAnimation 25s infinite linear;
            animation: cloudAnimation 25s infinite linear;
        }

        #clouds img.cloud2 {
            -webkit-animation: cloudAnimation 35s infinite linear;
            animation: cloudAnimation 35s infinite linear;
        }

        #clouds img.cloud3 {
            -webkit-animation: cloudAnimation 45s infinite linear;
            animation: cloudAnimation 45s infinite linear;
            opacity: 0.05;
        }

        #clouds img.cloud4 {
            -webkit-animation: cloudAnimation 55s infinite linear;
            animation: cloudAnimation 55s infinite linear;
            opacity: 0.05;
        }
    </style>
</head>
<body>
<div id="clouds">
    <img class="cloud1" src="https://hungna.github.io/assets/themes/clouds/assets/clouds/cloud-1.png" alt="Cloud-1" />
    <img class="cloud2" src="https://hungna.github.io/assets/themes/clouds/assets/clouds/cloud-2.png" alt="Cloud-2" />
    <img class="cloud3" src="https://hungna.github.io/assets/themes/clouds/assets/clouds/cloud-3.png" alt="Cloud-3" />
    <img class="cloud4" src="https://hungna.github.io/assets/themes/clouds/assets/clouds/cloud-4.png" alt="Cloud-4" />
</div>

<div class="site_content">
    <div class="container">

        <div class="logo">
            <img src="https://secure.gravatar.com/avatar/463fc33119b4304b6fc0932ac3f262c3?size=100" width="100" alt="<?= $site_data->site_name ?>">
        </div>

        <div class="row w text-center">
            <div class="col-lg-6 col-lg-offset-3 text-justify">
                <h3>Hi there!</h3>
                <p>💡 I'm Hung and I'm a engineering manager in Hanoi, Vietnam.</p>
                <p>💻 Currently, I am working as a Engineering Manager at a software company in Hanoi, Vietnam.</p>
                <p>💻 My main work is in the fields of Ecommerce Tech, EdTech, Content Management System, DevOps and Project Management</p>
                <p>🌱 I live in a small town in Hanoi with my families, my wife and my son.</p>
                <p>💬 am passionated about PHP, Backend, Web, Security, Contribute Open Source and some of the things that</p>
                <p>Some of the things that I enjoy include: foods, travel, kungfu and photography. If you'd like to chat about them or anything else, feel free to get in touch with me on <a href="<?= $author->facebook ?>" target="_blank">facebook</a>, <a href="mailto:<?= $author->email ?>">email</a> or <a href="<?= $author->blog ?>" target="_blank">blog</a>.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
                <a data-toggle="tooltip" title="Facebook" href="<?= $author->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <a data-toggle="tooltip" title="Twitter" href="<?= $author->twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <a data-toggle="tooltip" title="Instagram" href="<?= $author->instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                <a data-toggle="tooltip" title="Flickr" href="<?= $author->flickr ?>" target="_blank"><i class="fa fa-flickr"></i></a>
                <a data-toggle="tooltip" title="Github" href="<?= $author->github ?>" target="_blank"><i class="fa fa-github"></i></a>
                <a data-toggle="tooltip" title="Blogging" href="<?= $author->blog ?>" target="_blank"><i class="fa fa-beer"></i></a>
                <a data-toggle="tooltip" title="Email Me!" href="mailto:<?= $author->email ?>" target="_blank"><i class="fa fa-envelope"></i></a>
            </div>
        </div>

    </div>
</div>

<!-- JS Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
</script>
<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js'></script>
<script>
    $.backstretch("https://hungna.github.io/assets/images/khi-mat-troi-buong-xuong.jpeg", {speed: 500});
</script>
</body>
</html>

<!--
- Page generation time: {elapsed_time} - Memory usage: {memory_usage}
- (c) Powered by Hung Nguyen - dev@nguyenanhung.com - https://nguyenanhung.com
- Welcome page đi xin của https://me.anhkiet.info/ - Đã được sự đồng ý của chủ nhân
-->
