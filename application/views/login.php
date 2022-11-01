<?php
// if ($this->session->userdata('Email'))
//     redirect('site/dashboard_kinerja/pantun');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RQ Amanah Blora | WhatsApp Broadcast</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/AdminLTE-master/dist/css/adminlte.min.css">
   


</head>

<body class="hold-transition login-page">
    
    <div class="login-box align-items-center">
        
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="position-relative">
                            <img src="<?php echo base_url(); ?>aset/image/headerwa.jpg" alt="Photo 1" class="img-fluid">
                            <div class="card card-outline">
                                <div class="card-header text-center">
                                    <a href="<?php echo base_url(); ?>" class="h3"><b>Login</b> </a>
                                </div>
                                <div class="card-body">

                                    <form id="formLogin">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="username" placeholder="Username">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="icheck-primary">
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-4">


                                                <button id="buttonSubmit" type="submit" class="btn btn-danger btn-block">Login</button>
                                            </div>

                                            <!-- /.col -->
                                        </div>
                                    </form>

                                    <!-- /.social-auth-links -->

                                </div>
                                <!-- /.card-body -->
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
            </div>

        

        <!-- /.card -->
    </div>
    <script src="<?php echo base_url(); ?>/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/AdminLTE-master/dist/js/adminlte.min.js"></script>

</body>

</html>

<script>
    $("#formLogin").submit(function(event) {
        $("#buttonSubmit").html(" <i class='fa fa-refresh fa-spin'></i> Proses ");

        $.ajax({
            type: "POST",
            cache: false,
            url: '<?php echo base_url(); ?>/servicepengguna/login',
            dataType: 'json',
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function(output) {
                // $("#buttonSubmit").html(" Login ");

                console.log(output)
              
                console.log(output)
                if (output.sukses == true)
                    location.reload();
                else if (output.sukses == false)
                    $("#buttonSubmit").html(" Login ");


            }

        })

        event.preventDefault()




    });
</script>
<script>
    $("#sss").click(function(){
        alert(9999)
    })
</script>