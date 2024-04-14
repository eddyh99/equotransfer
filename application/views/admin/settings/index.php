<div id="layoutSidenav_content">
    <main>
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
        <form action="<?=base_url()?>admin/cost/savesettings" method="post">
            <div class="container-fluid px-4">
                <div class="col-12 card mb-5 mt-3">
                    <div class="card-header fw-bold">
                        Settings
                    </div>
                    <div class="card-body shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <input class="form-check-input pill-currency" name="status" type="checkbox" <?php echo ($status == 'yes') ? "checked" : "" ?>>
                                    <span class="fw-semibold fs-5 ms-3">Auto Withdraw</h5>
                                </div>
                            </div>
                            <div class="col-12 my-5">
                                <button type="submit" class="btn btn-freedy-green px-3" name="submit">Save Settings</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</div>