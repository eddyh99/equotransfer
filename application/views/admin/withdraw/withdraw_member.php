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
                    <input class="datepicker-af" type="text" name="tgl" id="tgl" readonly>
                    <table class="table table-hover table-bordered" id="tbl_history_member">
                        <thead class="table-dark">
                            <tr class="align-middle">
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Bank Cost</th>
                                <th>Trackless Commision</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="border-top: 0;">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>