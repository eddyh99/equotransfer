<div class="login wrap-signup">
    <div class="row">
        <div class="col-7 d-none d-lg-block bg-signup position-relative">
            <a href="<?= base_url()?>" class="m-5 position-absolute">
                <img class="img-fluid" src="<?= base_url()?>assets/img/back-link.png" alt="back link ">
            </a>
            <div class="container position-absolute logo-login">
                <div class="row ">
                    <div class="col-6 mx-auto ">
                        <a href="<?= base_url()?>">
                            <img class="img-fluid" src="<?= base_url()?>assets/img/logo-big.png" alt="logo-login">
                        </a>
                        <h2 translate="no" class="fw-bold text-white f-poppins mt-3">EquoTransfer</h2>
                        <p class="text-white f-poppins">The most popular bank inter world</p>
                        <a href="" class="btn-signup mt-2 position-absolute">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto mt-5 pt-5">
                        <div class="mt-3 mb-5">
                            <h2 class="fw-bold f-poppins">Hello Again!</h2>
                            <p class="f-poppins">Welcome Back</p>
                        </div>
                        <div class="">
                            <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                                action="<?= base_url(); ?>auth/auth_login">
                                <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <?php if (@isset($_SESSION["failed"])) { ?>
                                <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php } ?>
                                <?php if (@isset($_SESSION["success"])) { ?>
                                <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php } ?>
                                <div class="col-12 mb-5 text-center d-block d-lg-none">
                                    <a href="<?= base_url() ?>">
                                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/logo-dark.png" alt="logo">
                                    </a>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                            <span>
                                                <i class="far fa-envelope fs-5"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control f-publicsans" id="email" name="email"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-5">
                                    <!-- <label for="password" class="form-label f-publicsans">Password</label> -->
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                            <span>
                                                <i class="fas fa-lock fs-5"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control f-publicsans" id="password"
                                            placeholder="Password" required>
                                        <div class="input-group-text">
                                            <span>
                                                <i class="far fa-eye" id="togglePassword" style="cursor: pointer"
                                                    toggle="#password"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-grid gap-2 mt-auto mb-3">
                                    <button type="submit" class="btn btn-signup">Log in</button>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <a href="<?= base_url(); ?>auth/forget_pass" class="f-publicsans">
                                            <u>
                                                Forgot password?
                                            </u>
                                        </a>
                                        <a href="<?= base_url(); ?>auth/signup" class="f-publicsans">
                                            <u>
                                                Register
                                            </u>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>