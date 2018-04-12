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
        <link rel="shortcut icon" type="image/png" href="img/logo-4.png">

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
                    <li class="navigation__item"><a href="#section-about" class="navigation__link">About Me</a></li>
                    <li class="navigation__item"><a href="#section-skills" class="navigation__link">My Skills</a></li>
                    <li class="navigation__item"><a href="#footer" class="navigation__link">Contact Me</a></li>
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
                <a href="#section-about" class="btn btn--white btn--animated">Search Who Spam You</a>
            </div>
        </header>

        <main>
            <section class="section-about" id="section-about">
                <div class="u-center-text u-margin-bottom-big u-center-top-large">
                    <h2 class="heading-secondary">
                        About Manasye
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small ">
                            Who Am I?
                        </h3>
                        <p class="paragraph">
                            Hello there, my name is Manasye Shousen Bukit.
                            I'm currently pursuing computer science major in Institut Teknologi Bandung.
                            I'm originated from Medan,North Sumatera,Indonesia.
                            By the way, here are some of my photos.
                        </p>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            What's my interests?
                        </h3>
                        <p class="paragraph">
                            To be honest, my interests involved in all things related to computer science.
                            However, I'm currently in love in learning front-end development and also some
                            back-end to become an awesome fullstack programmer.
                        </p>
                    </div>

                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="img/manasye-4.jpg" alt="" class="composition__photo composition__photo--p1">
                            <img src="img/manasye-6.jpg" alt="" class="composition__photo composition__photo--p2">
                            <img src="img/manasye.jpg" alt="" class="composition__photo composition__photo--p3">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-skills" id="section-skills">
                <div class="row">

                    <div class="col-1-of-3">
                        <div class="skill-box skill-university">
                            <i class="skill-box__icon icon-basic-star"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">University</h3>
                            <p class="skill-box__text">
                                Like i said earlier,I'm currently pursuing Bachelor Degree in Institut Teknologi Bandung.
                                I'm a second year student in Computer Science or also known as Informatics with an outstanding GPA.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="skill-box skill-organization">
                            <i class="skill-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Organization</h3>
                            <p class="skill-box__text">
                                Active mainly in two organization  Himpunan Mahasiswa Informatika ITB as member of Project Manager division
                                and Persekutuan Mahasiswa Kristen ITB as member of Intermedia division.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="skill-box skill-coding">
                            <i class="skill-box__icon icon-basic-laptop"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Coding</h3>
                            <p class="skill-box__text">
                                Fluent in HTML, CSS, SCSS , and Javascript along with adopted framework (e.g JQuery)
                                and currently learning server-side scripting language such as PHP and Nodejs.To Do list Learn React js.
                            </p>
                        </div>
                    </div>

                </div>
            </section>
        </main>

        <footer class="footer" id="footer">
            <div class="footer__title">
                Find Me On
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="https://github.com/manasye" target="_blank" class="footer__link"><i class="fab fa-github-alt fa-3x"></i></a></li>
                            <li class="footer__item"><a href="https://www.linkedin.com/in/manasye-shousen-bukit-833313156/" target="_blank" class="footer__link"><i class="fab fa-linkedin fa-3x"></i></a></li>
                            <li class="footer__item"><a href="https://www.instagram.com/manasyebukit/" target="_blank"class="footer__link"><i class="fab fa-instagram fa-3x"></i></a></li>
                            <li class="footer__item"><a href="mailto:manasyebukit@gmail.com" target="_blank"class="footer__link"><i class="fas fa-envelope-square fa-3x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__author">
                        Built by <a href="#" class="footer__link">Manasye Shousen Bukit</a> for my
                        <a href="#" class="footer__link" target="_blank">Web Portfolio purposes</a>. The author give credits to
                        <a href="https://fontawesome.com/" class="footer__link" target="_blank">fontawesome.com</a> for providing cool logo that author used
                        mainly.Author also thanks for <a href="https://www.freepik.com/" class="footer__link" target="_blank">freepik.com</a> who provide
                        tons of cool background images to the development of this website.
                    </p>
                </div>
            </div>
        </footer>

     <script type="text/javascript" src="javascript/animations.js"></script>
    </body>
</html>
