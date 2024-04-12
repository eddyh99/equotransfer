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
                    TRACKLESS BANK Cost
                </div>
                
                    <div class="card-body shadow-sm">
                        <div class="col">
                            Activate Auto Withdraw 
                        </div>
                        <div class="col">
                        <select name="autowd">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        </div>
                        <div class="col">
                            <button type="submit" name="submit">Save</button>
                        </div>
                    </div>
                </div>
        </div>
    </main>
</div>