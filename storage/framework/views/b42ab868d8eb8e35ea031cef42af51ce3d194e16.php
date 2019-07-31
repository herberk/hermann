<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Herberk-2018-19</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            html, body {
                background-color:#f5f8fa;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 94px;
            }

            .links > a {
                color: #fcf8f7;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .header {
                background: url(../images/bg-masthead.jpg) no-repeat center;
                background-color: transparent !important;
                background-size: cover;
                min-height: 100vh;
            }

        </style>
    </head>
    <body>
    <header class="header">
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                        <a href="contact-us">Contacto</a>
                    <?php else: ?>
                       <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="contact-us">Contacto</a>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                   Her Berk

                </div>
                <div class="links">
                    <a href="http://qcode.in/">Visit QCode.in for tutorial</a>
                     <a href="http://berkhoff.cl">Berkhoff</a>
                    <a href="https://github.com/herberk">GitHub</a>
                    <a href="https://laravel.com/docs">Documentation Laravel</a>
                    <a href="https://www.berkhoff.cl:2083/cpsess0255891085/frontend/paper_lantern/index.html?login=1&post_login=14777146898844">Laracasts</a>
                    <a href="https://laravel-news.com">Laravel News</a>
                </div>
            </div>
        </div>
     </header>

    </body>
</html>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/welcome.blade.php ENDPATH**/ ?>