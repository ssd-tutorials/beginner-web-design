<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php echo $title; ?></title>
    <link
        href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet"
        type="text/css"
        >
    <link
        href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Lobster"
        rel="stylesheet"
        type="text/css"
        >
    <link href="css/app.css" rel="stylesheet">
</head>
<body>

<!-- HEADER -->

<header id="headerWrapper">

    <div class="row">

        <div class="xlarge-3 large-4 columns" id="headerLeft">

            <div id="logo">
                <a href="/">My Website Name</a>
            </div>

        </div>

        <div class="xlarge-9 large-8 columns" id="headerRight">

            <div id="navigation">
                <a href="#" id="navigationTrigger"><i class="fa fa-bars"></i> MENU</a>
                <nav>
                    <a href="/"<?php if ($request == 'home') { echo ' class="active"'; } ?>>Home</a>
                    <a href="/about"<?php if ($request == 'about') { echo ' class="active"'; } ?>>About Us</a>
                    <a href="/menu"<?php if ($request == 'menu') { echo ' class="active"'; } ?>>Menu</a>
                    <a href="/loyalty-card"<?php if ($request == 'loyalty-card') { echo ' class="active"'; } ?>>Loyalty Card</a>
                    <a href="/contact"<?php if ($request == 'contact') { echo ' class="active"'; } ?>>Contact Us</a>
                </nav>
            </div>

        </div>

    </div>

</header>