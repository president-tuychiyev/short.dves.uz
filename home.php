<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>URL Shortener - Short URLs & Custom Free Link Shortener | www.short.dves.uz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free URL shortener to create perfect URLs for your business. short.dves.uz helps you create and share branded links with custom domains at scale. ✓ Check it out!"/>
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="short.dves.uz | Custom URL Shortener, Link Management &amp; Branded Links">
    <meta property="og:description" content="Shorten, create and share trusted, powerful links for your business. short.dves.uz's url and link shortener helps you with industry-leading features like custom domains, branded link and link redirects.">
    <meta property="og:url" content="http://short.dves.uz/">
    <meta property="og:site_name" content="Short link">
    <meta property="article:publisher" content="https://www.facebook.com/president-tuychiyev">
    <meta property="article:modified_time" content="<?=date('m-d-Y h:i:s a', time())?>">


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Architects+Daughter|Roboto&subset=latin,devanagari'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="./asset/icon.ico">
    <link rel="stylesheet" href="./asset/css/style.css">
</head>

<body>

    <body class="welcome">
        <span id="splash-overlay" class="splash"></span>
        <span id="welcome" class="z-depth-4"></span>

        <header class="navbar-fixed">
            <nav class="row deep-purple darken-3">
                <div class="col s12">
                    <ul class="right">
                        <li class="right">
                            <a href="https://www.facebook.com/president.tuychiyev" target="_blank"
                                class="fa fa-facebook-square fa-2x waves-effect waves-light"><span
                                    class="icon-text"></span></a>
                        </li>
                        <li class="right">
                            <a href="https://www.linkedin.com/in/president-tuychiyev" target="_blank"
                                class="fa fa-linkedin-square fa-2x waves-effect waves-light"><span
                                    class="icon-text"></span></a>
                        </li>
                        <li class="right">
                            <a href="https://codepen.io/President_Tuychiyev" target="_blank"
                                class="fa fa-codepen fa-2x waves-effect waves-light"><span class="icon-text"></span></a>
                        </li>
                        <li class="right">
                            <a href="https://github.com/president-tuychiyev" target="_blank"
                                class="fa fa-github-square fa-2x waves-effect waves-light"><span
                                    class="icon-text"></span></a>
                        </li>
                        <li class="right">
                            <a href="https://t.me/DGUuz" target="_blank"
                                class="fa fa-send-o fa-2x waves-effect waves-light"><span class="icon-text"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="valign-wrapper">
            <span class="container grey-text text-lighten-1 ">

                <p class="flow-text">Welcome to</p>
                <h1 class="title grey-text text-lighten-3">Short link</h1>

                <blockquote class="flow-text">Change the address to a shorter address and keep sharing links to your
                    loved ones :)</blockquote>

                <div class="content" style="display: flex;">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">link</i>
                            <input id="url" value="" type="text" name="url" class="validate">
                            <label for="icon_prefix">Put your link</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn btn-short waves-effect waves-red">SHORT</button>
                        </div>
                    </div>
                </div>
            </span>
        </main>

        <div class="fixed-action-btn">
            <a href="#message" class="modal-trigger btn btn-large btn-floating amber waves-effect waves-light">
                <i class="large material-icons">message</i>
            </a>
        </div>

        <div id="message" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>About</h4>
                <p>Hello there!
                    This site was developed by Javlonbek Tuychyev, you can see other projects at the following addresses
                    and connect to these addresses to keep up to date.</p>
                <hr>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">connect_without_contact</i>
                            Contact me
                        </div>
                        <div class="collapsible-body">
                            <ul class="collection with-header">
                                <li class="collection-item">
                                    <div>— Phone: <a href="tel:+998944337566">+998 94 4337566</a> <a
                                            href="tel:+998944337566" class="secondary-content"><i
                                                class="material-icons">send</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— Phone: <a href="tel:+998994409804">+998 99 4409804</a> <a
                                            href="tel:+998994409804" class="secondary-content"><i
                                                class="material-icons">send</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— Telegram: <a href="https://t.me/President_Tuychiyev">@President_Tuychiyev</a>
                                        <a href="https://t.me/President_Tuychiyev" class="secondary-content"><i
                                                class="material-icons">send</i></a>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div>— Telegram: <a href="https://t.me/Azimjanovich">@Azimjanovich</a> <a
                                            href="https://t.me/Azimjanovich" class="secondary-content"><i
                                                class="material-icons">send</i></a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">whatshot</i>
                            Other projects
                        </div>
                        <div class="collapsible-body">
                            <ul class="collection with-header">
                                <li class="collection-item">
                                    <div>— GitHub: <a
                                            href="https://github.com/president-tuychiyev">president-tuychiyev</a> <a
                                            href="https://github.com/president-tuychiyev" class="secondary-content"><i
                                                class="material-icons">send</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— GitLab: <a
                                            href="https://gitlab.com/president-tuychiyev">president-tuychiyev</a> <a
                                            href="https://gitlab.com/president-tuychiyev" class="secondary-content"><i
                                                class="material-icons">send</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— Codepen: <a
                                            href="https://codepen.io/President_Tuychiyev">president-tuychiyev</a>
                                        <a href="https://codepen.io/President_Tuychiyev" class="secondary-content"><i
                                                class="material-icons">send</i></a>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div>— Telegram: <a href="https://t.me/DGUuz">president-tuychiyev</a>
                                        <a href="https://t.me/DGUuz" class="secondary-content"><i
                                                class="material-icons">send</i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">widgets</i>
                            Order for your business
                        </div>
                        <div class="collapsible-body">
                            <ul class="collection with-header">
                                <li class="collection-item">
                                    <div>— <a href="https://t.me/Azimjanovich">Web sites:</a> Starting at 500$<a
                                            href="https://t.me/Azimjanovich" class="secondary-content"><i
                                                class="material-icons">shopping_cart_checkout</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— <a href="https://t.me/Azimjanovich">Android app:</a> Starting at 700$<a
                                            href="https://t.me/Azimjanovich" class="secondary-content"><i
                                                class="material-icons">shopping_cart_checkout</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— <a href="https://t.me/Azimjanovich">iOS app:</a> Starting at 900$<a
                                            href="https://t.me/Azimjanovich" class="secondary-content"><i
                                                class="material-icons">shopping_cart_checkout</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— <a href="https://t.me/Azimjanovich">Telegram bot:</a> Starting at 400$<a
                                            href="https://t.me/Azimjanovich" class="secondary-content"><i
                                                class="material-icons">shopping_cart_checkout</i></a></div>
                                </li>
                                <li class="collection-item">
                                    <div>— <a href="https://t.me/Azimjanovich">Desktop app:</a> Starting at 800$<a
                                            href="https://t.me/Azimjanovich" class="secondary-content"><i
                                                class="material-icons">shopping_cart_checkout</i></a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="collection">
                    <li class="collection-item avatar">
                        <i class="material-icons circle green">account_balance_wallet</i>
                        <span class="title">I am glad that this project has benefited :)</span>
                        <p>
                            If you also benefit, please contribute to the development of this project and we will be
                            happy to help.
                            <br>
                            <strong class="badge red" style="color: #fff; padding: 3px; margin: 5px 0px 0px 0px; border-radius: 6px 0px 0px 6px;">Donate | visa</strong>
                            <strong class="badge blue" style="color: #fff; padding: 3px; margin: 5px 0px 0px 0px; border-radius: 0px 6px 6px 0px;">4195 2500 4502 8337</strong>
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">attach_money</i></a>
                    </li>
                </ul>

            </div>
            <div class="modal-footer">
                <a class="modal-action modal-close btn-floating halfway-fab waves-effect waves-light red right"><i
                        class="material-icons">close</i></a>
            </div>
        </div>

        <footer class="page-footer deep-purple darken-3">
            <div class="footer-copyright deep-purple darken-4">
                <div class="container">
                    <time datetime="{{ site.time | date: '%Y' }}">&copy; <?=date('Y')?> President Tuychiyev</time>
                </div>
            </div>
        </footer>
    </body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>
    <script src="./asset/js/script.js"></script>

</body>

</html>