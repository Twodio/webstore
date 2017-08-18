<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="<?=URL;?>css/default.css"/>
        <link rel="stylesheet" type="text/css" href="<?=URL;?>css/grid-view.css"/>
        <link rel="stylesheet" type="text/css" href="<?=URL;?>css/box-fixing.css"/>
        <link rel="stylesheet" type="text/css" href="<?=URL;?>css/shopping-cart.css"/>
        <script type="text/javascript" src="<?=URL;?>js/jquery.js"></script>
    </head>
    <body>
    <div id="header">
        <div id="header-title">
            <h2>WEBSITE TITLE</h2>
        </div>
        <div id="header-bar">
            <div class="menu">
                <a href="<?=URL;?>home">Home</a>
                <a href="<?=URL;?>help">Help</a>
                <a href="<?=URL;?>about">About</a>
            </div>
            <div class="cart">
                <b>Cart: </b>
                <a href="<?=URL;?>cesto">
                    <?=count($all->fetch());?> item(s)
                </a>
            </div>
        </div>  
    </div>
    <div id="content">


