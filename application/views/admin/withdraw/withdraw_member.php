<input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
    value="<?php echo $this->security->get_csrf_hash(); ?>">

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-12 card my-5">
                <div class="card-header fw-bold">
                    <i class="fas fa-list me-1"></i>
                    Member Withdraw
                </div>
                <div class="card-body shadow-sm">
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
                    <table class="table table-hover table-bordered" id="tbl_history_member">
                        <thead class="table-dark">
                            <tr class="align-middle">
                                <th>Description</th>
                                <th>Amount</th>
                                <th>PBS Cost</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="border-top: 0;">
                            <?php foreach($withdraw as $dt){?>
                                <tr>
                                    <td>
                                        Withdraw <?= $dt->ucode?>
                                    </td>
                                    <td>
                                        <?= $dt->currency?> <?=  number_format($dt->amount, 2, ".", ",")?>
                                    </td>
                                    <td>
                                        <?= $dt->currency?> <?= number_format($dt->pbs_cost, 2, ".", ",")?>
                                    </td>
                                    <td>
                                        <?= $dt->date_created?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url()?>admin/withdraw/prosesWD/<?= base64_encode($dt->wisequote)?>" class="btn btn-primary">Process</a>
                                        <a href="<?= base_url()?>admin/withdraw/cancelWD/<?= base64_encode($dt->wisequote)?>" class="btn btn-danger">Cancel</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>