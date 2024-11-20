<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>DATABASE ERROR</title>
    <meta name="author" content="Hung Nguyen - dev@nguyenanhung.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link type="text/css" media="all" href="https://hungna.github.io/assets/themes/sailor/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="https://hungna.github.io/assets/themes/sailor/assets/css/style.css" rel="stylesheet" />
    <link type="text/css" media="all" href="https://hungna.github.io/assets/themes/sailor/assets/css/responsive.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" href="https://i3.wp.com/hungna.github.io/assets/themes/sailor/assets/img/favicon.png" />
</head>
<body>
<!-- Header -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Database Error</h1>
                <h2><?= $heading; ?></h2>
                <p><?= $message; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- end Header -->

<!-- Illustration -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="illustration">
                    <div class="boat"></div>
                    <div class="water1"></div>
                    <div class="water2"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Illustration -->

<!-- Button -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="<?= config_item('base_url'); ?>">
                    <div class="btn btn-action">Take me out of here</div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end Button -->

<!-- Footer -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>&copy; Powered by <a href="<?= config_item('base_url'); ?>" title="Nguyen An Hung"><strong>Nguyen An Hung</strong></a> All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- end Footer -->

<!-- Scripts -->
<script src="https://hungna.github.io/assets/themes/sailor/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="https://hungna.github.io/assets/themes/sailor/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
