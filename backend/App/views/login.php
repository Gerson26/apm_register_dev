<?php
    echo $header;
?>
    <body class="">
    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container mt-0">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-3">
                                <div class="card-header pb-0 text-start">
                                    <div class="text-center">
                                    <img src="/assets/img/logos/apm.png" style="width: 140px; margin:0px auto; height: 140px;" class="img-responsive">
                                    <img src="/assets/img/logos/wadd.png" style="width: 140px; margin:0px auto; height: 140px;" class="img-responsive">
                                    <h3  style="color: #a19a9a;" class="font-weight-bolder">"VI World Congress on Dual Disorders"</h3>
                                </div>
                                </div>
                                <div class="card-body">
                                    <form role="form" class="text-start" id="login" action="/Login/crearSession" method="POST" class="form-horizontal">
                                        <label>Do you have an account?</label>
                                        <div class="mb-3">
                                            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="eg. user@domain.com" aria-label="Email">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" id="btnEntrar" class="btn bg-gradient-info w-100 mt-4 mb-0">SIGN IN</button>
                                        </div>
                                    </form>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-4 text-sm mx-auto">
                                            You don´t have an account?
                                            <a href="/Register/" class="text-info text-dark font-weight-bold">Register</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <!--<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/img/curved-images/background.jpeg')"></div>-->
                                <video autoplay muted loop >
                                    <source class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" src="/assets/img/curved-images/bgvideo.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-0 mt-0">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-facebook"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-0">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Grupo LAHE.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    </body>

<?php echo $footer; ?>