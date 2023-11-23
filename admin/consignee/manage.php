<?php
include '../../config.php';
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $qry = $conn->query("SELECT * from `consignee` where id = '{$_GET['id']}' ");
    if ($qry->num_rows > 0) {
        foreach ($qry->fetch_assoc() as $k => $v) {
            $$k = $v;
        }
    }
}
?>
<div class="container-fluid">
    <form action="" id="consignee-form">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <textarea name="name" id="name" cols="30" rows="2"
                class="form-control form no-resize"><?php echo isset($name) ? $name : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="dept" class="control-label">Department</label>
            <textarea name="dept" id="dept" cols="30" rows="2"
                class="form-control form no-resize"><?php echo isset($dept) ? $dept : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="gst" class="control-label">GST</label>
            <input name="gst" id="gst" class="form-control form "
                value="<?php echo isset($gst) ? $gst : ''; ?>" />
        </div>
        <div class="form-group">
            <label for="contact" class="control-label">Mobile Number:</label>
            <input name="contact" id="contact" class="form-control form "
                value="<?php echo isset($contact) ? $contact : ''; ?>" />
        </div>
        <div class="form-group">
            <label for="email" class="control-label">E-mail</label>
            <input name="email" id="email" class="form-control form "
                value="<?php echo isset($email) ? $email : ''; ?>" />
        </div>
        <div class="form-group">
            <label for="address" class="control-label">Address</label>
            <textarea name="address" id="address" cols="30" rows="2"
                class="form-control form no-resize"><?php echo isset($address) ? $address : ''; ?></textarea>
        </div>
    </form>
</div>
<script>

    $(document).ready(function () {
        $('#consignee-form').submit(function (e) {
            e.preventDefault();
            var _this = $(this)
            $('.err-msg').remove();
            start_loader();
            $.ajax({
                url: _base_url_ + "classes/Master.php?f=save_consignee",
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
                error: err => {
                    console.log(err)
                    alert_toast("An error occured 1", 'error');
                    end_loader();
                },
                success: function (resp) {
                    if (typeof resp == 'object' && resp.status == 'success') {
                        location.reload()
                    } else if (resp.status == 'failed' && !!resp.msg) {
                        var el = $('<div>')
                        el.addClass("alert alert-danger err-msg").text(resp.msg)
                        _this.prepend(el)
                        el.show('slow')
                        end_loader()
                    } else {
                        alert_toast("An error occured2", 'error');
                        end_loader();
                        console.log(resp)
                    }
                }
            })
        })

    })
</script>