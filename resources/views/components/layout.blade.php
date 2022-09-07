<!DOCTYPE HTML>
<!--
 Phantom by HTML5 UP
 html5up.net | @ajlkn
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>{{ config('app.name') . ' - Portada' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <x-header>

        </x-header>

       <x-menu>

            {{}}
       </x-menu>


        <!-- Main -->
        <div id="main">
            <div class="inner">
                {{ @slot('')

                @endslot}}
            </div>
        </div>

            <x-footer>

            </x-footer>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon brands style2 fa-twitter"><span
                                    class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-facebook-f"><span
                                    class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-instagram"><span
                                    class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-dribbble"><span
                                    class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-github"><span
                                    class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a>
                        </li>
                        <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a>
                        </li>
                        <li><a href="#" class="icon solid style2 fa-envelope"><span
                                    class="label">Email</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/browser.min.js"></script>
    <script src="/assets/js/breakpoints.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>