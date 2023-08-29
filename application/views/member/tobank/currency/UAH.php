<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountNumber" placeholder="Account Number">
</div>

<?php if ($type == 'local') { ?>
    <div class="align-items-center my-3">
        <input class="form-control me-2" type="text" name="IBAN" placeholder="IBAN">
    </div>
<?php } ?>

<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="phoneNumber" placeholder="Phone Number">
</div>
<div class="align-items-center my-3">
    <select name="countryCode" class="form-select me-2" id="countryCode">
        <option value="">--Country Initial--</option>
        <?php foreach ($countries_list as $cur) { ?>
            <option value="<?= $cur['code'] ?>"><?= $cur['code'] . ' - ' . $cur['name'] ?></option>
        <?php } ?>
    </select>
    <!-- <input class="form-control me-2" type="text" name="countryCode" placeholder="Country initial" maxlength="2"> -->
</div>
<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="city" placeholder="City">
</div>
<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="firstLine" placeholder="FirstLine">
</div>
<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="postCode" placeholder="Post Code">
</div>