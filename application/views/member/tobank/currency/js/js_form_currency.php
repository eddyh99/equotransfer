<script>
    function validate() {
        $("#btnconfirm").attr("disabled", true);
        $("#form_submit").submit();
    }

    getbranchCode();

    function getbranchCode() {
        $.ajax({
            url: "<?= base_url() ?>bank/getbranchCode",
            method: "post",
            data: $("#form_submit").serialize(),
            success: function(response) {
                var data = JSON.parse(response);
                console.log(data);
                $("#branchCode").html(data.message);
                $("#token").val(data.token);
            },
            error: function(xhr, status, error) {
                var data = JSON.parse(xhr.responseText);
                $("#token").val(data.token);
            }
        });
    }

    $("#bankCode").on("change", function() {
        getbranchCode();
    })
</script>