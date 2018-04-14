<?php
    $consumer_key = '0jXK5oAWkQgYh7fMwhOPhUuQe';
    $consumer_secret = 'kALTJ1ZFthv25r4iCskTCxXjhPodq53NIybPCZU6KUeYM1RL0p';
    $access_token = '985003482422829057-Wr7CJHgcbR3Enf90VySd05HXPjgTVtU';
    $access_token_secret = 'o4wpHsDLomI59bPmhjoPMMKEN6AKRVEZYKI5UR1FZJzzg';
    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
    $tweets = $connection -> get('https://api.twitter.com/1.1/search/tweets.json?q=merhaba&result_type=recent&count=20');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <link rel="shortcut icon" type="image/png" href="img/logo-5.png">

        <title>Spam Analyzer</title>
    </head>
    <body>

        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon"></span>
            </label>
            <div class="navigation__background">&nbsp;</div>
            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#homepage" class="navigation__link">Home</a></li>
                    <li class="navigation__item"><a href="#section-app" class="navigation__link">Spam Analyzer</a></li>
                    <li class="navigation__item"><a href="#about" class="navigation__link">About Us</a></li>
                </ul>
            </nav>
        </div>

        <header class="header" id="homepage">
            <div class="header__logo-box">
                <img src="img/logo-white.png" alt="Logo" class="header__logo">
            </div>
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Don't Spam Me</span>
                    <span class="heading-primary--subs">Web Application That Analyze Spam</span>
                </h1>
                <a href="#section-app" class="btn btn--white btn--animated">Search Who Spam You</a>
            </div>
        </header>

        <main>
            <section class="section-app" id="section-app">
                <div class="u-center-text u-margin-bottom-big u-center-top-large">
                    <h2 class="heading-secondary">
                        Spam Analyzer
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small ">
                            Input Keywords : 
                        </h3>
                        <textarea name="input-column" id="input-column" cols="40" rows="1"></textarea>
                        <a href="#algorithm" class="btn btn--whitegreen btn--animated">Submit</a>
                        <h3 class="heading-tertiary u-margin-bottom-small u-margin-top-medium">
                            Choose Algorithm : 
                        </h3>
                        <div id="algorithm">
                            <a href="#section-about" class="btn btn--green btn--animated">KMP</a>
                            <a href="#section-about" class="btn btn--green btn--animated">Boyer-Moore</a>
                            <a href="#section-about" class="btn btn--green btn--animated">Regular Expression</a>
                        </div>
                    </div>

                    <div class="col-1-of-2">
                        <!-- <h3 class="heading-tertiary u-margin-bottom-small ">
                            Generated Post From (What) API
                        </h3> -->
                        <?php foreach ($tweets->statuses as $key => $tweet) { ?>
                            Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
                        <?php } ?>
                        <p class="paragraph">
                            Bunch of API here
                        </p>
                    </div>
                </div>
            </section>

     <script type="text/javascript" src="javascript/animations.js"></script>
    </body>
</html>
