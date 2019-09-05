<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herberk-2018-19</title>
    <link rel="stylesheet" href="http://www.expertphp.in/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
<header class="header">
    <div class="flex-center position-ref full-height">
        <?php if(Route::has('login')): ?>
            <div class="top-right links">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/home')); ?>">Home</a>

                <?php else: ?>
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                    <a href="contact-us">Contacto</a>
                    <a href="<?php echo e(route('login')); ?>">Login</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
            
          <div class="col-md-8">
              <div class="panel panel-primary">
                  <div class="panel-heading"><h4>Formulario para contacto:<strong>  Hermann Berkhoff Felis</strong></h4></div>
                       <div class="panel-body">
                          <div class="col-md-4">
                              <div class="card-body text-center">
                                 <i class="fa fa-globe fa-5x text-success"></i>
                                  <p><i class="fas fa-mobile fa-2x text-primary"></i> Mov. 9-87695505<br/>
                                      <i class="fas fa-phone fa-2x text-primary"></i> Fono (56)45-2294321<br/></p>
                                    <p class="lead ">
                                      Diego Portales 1383,<br/>
                                      Temuco,<br/>
                                      Chile </p>
                                  <i class="fab fa-laravel fa-3x text-danger"></i>
                                  <p class="card-text"></p>
                                  <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Ve a algún lugar</a>
                              </div>

                          </div>
                          <div class="col-md-8">

                            <?php echo Form::open(array('route' => 'postcontact','method'=>'POST')); ?>

                                <div class="form-group">
                                    <strong>Nombre::</strong>
                                    <?php echo Form::text('name', null, array('placeholder' => 'Nombre completo','class' => 'form-control')); ?>

                                    <?php echo $errors->first('name', '<span class="invalid-feedback text-danger" role="alert">:message</span>'); ?>

                                </div>
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')); ?>

                                   <?php echo $errors->first('email', '<span class="invalid-feedback text-danger" role="alert">:message</span>'); ?>

                                </div>
                                <div class="form-group">
                                    <strong>Mensaje:</strong>
                                    <?php echo Form::textarea('message', null, array('placeholder' => 'Mensaje de 255 caracteres','class' => 'form-control','style'=>'height:100px')); ?>

                                    <?php echo $errors->first('message', '<span class="invalid-feedback text-danger" role="alert">:message</span>'); ?>

                                </div>
                                      <input id="user_id" name="user_id" type="hidden" value=1>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <?php echo Form::submit('Enviar',['class'=>'btn btn-success']); ?>

                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                     </div>
                  </div>
              </div>
            <script>
            <?php if(Session::has('message')): ?>
                var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
                switch(type){
                    case 'info':
                        toastr.info("<?php echo e(Session::get('message')); ?>");
                        break;

                    case 'warning':
                        toastr.warning("<?php echo e(Session::get('message')); ?>");
                        break;
                    case 'success':
                        toastr.success("<?php echo e(Session::get('message')); ?>");
                        break;
                    case 'error':
                        toastr.error("<?php echo e(Session::get('message')); ?>");
                        break;
                }
                <?php endif; ?>
            </script>
    </div>
</header>
</body>
</html>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/landing/contact.blade.php ENDPATH**/ ?>