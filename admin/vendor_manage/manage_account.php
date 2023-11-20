<?php
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $qry = $conn->query("SELECT * from `vendor` where id = '{$_GET['id']}' ");
    if ($qry->num_rows > 0) {
        foreach ($qry->fetch_assoc() as $k => $v) {
            $$k = $v;
        }
    }
}
?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <?php echo isset($_GET['id']) ? 'Update Vendor' : "Create New Vendor"; ?>
        </h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form id="account-form">
                <input type="hidden" name="id" value='<?php echo isset($id) ? $id : '' ?>'>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label class="control-label">Vendor Account Number</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="vendor_number" id="vendor_number"
                                value="<?php echo isset($vendor_number) ? $vendor_number : '' ?>" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="button"
                                    id="generate_vendor_number">Generate</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">Password</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="generated_password"
                                value="<?php echo isset($generated_password) ? $generated_password : '' ?>" <?php echo (!isset($id)) ? "required" : '' ?>>
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="button"
                                    id="generate_pass">Generate</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label class="control-label">Name of Trader</label>
                        <input type="text" class="form-control" name="p_name"
                            value="<?php echo isset($p_name) ? $p_name : ''; ?>" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">Company Name</label>
                        <input type="text" class="form-control" name="c_name"
                            value="<?php echo isset($c_name) ? $c_name : ''; ?>" required>
                    </div>
                </div>
                <div class="row">
                    <?php if (!isset($id)): ?>
                        <div class="form-group col-sm-6">
                            <label class="control-label">MSME Verified</label>
                            <select class="form-control" name="msme_verified" required>
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($id)):
                        if ($msme_verified == 0):
                            $ms = "Yes";
                        else:
                            $ms = "No";
                        endif; ?>

                        <div class="form-group col-sm-6">
                            <label class="control-label">MSME Verified</label>
                            <input type="text" class="form-control" name="c_name"
                                value="<?php echo isset($ms) ? $ms : ''; ?>" readonly>
                        </div>

                    <?php endif; ?>
                    <div class="form-group col-sm-6">
                        <label class="control-label">MSME Registration Number</label>
                        <input type="text" class="form-control" name="msme_no"
                            value="<?php echo isset($msme_no) ? $msme_no : ''; ?>"
                            placeholder="(optional) If Selected No">
                    </div>


                </div>
                <hr>





                <div class="row">
                    <div class="form-group col-sm-6">
                        <label class="control-label">GEM ID</label>
                        <input type="text" class="form-control" name="gem_id"
                            value="<?php echo isset($gem_id) ? $gem_id : '' ?>" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control" name="email"
                            value="<?php echo isset($email) ? $email : '' ?>" required
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                            title="Enter a valid email address">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label class="control-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact_no"
                            value="<?php echo isset($contact_no) ? $contact_no : ''; ?>" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">GSTIN</label>
                        <input type="text" class="form-control" name="gstin"
                            value="<?php echo isset($gstin) ? $gstin : ''; ?>" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <textarea class="form-control" name="address" rows="3"
                        required><?php echo isset($address) ? $address : ''; ?></textarea>
                </div>


                <!-- <div class="form-group col-6">
                    <label for="" class="control-label">Avatar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img"
                            onchange="displayImg(this,$(this))">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group col-6 d-flex justify-content-center">
                    <img src="<?php
                    // echo validate_image(isset($meta['avatar']) ? $meta['avatar'] : '') 
                    ?>" alt=""
                        id="cimg" class="img-fluid img-thumbnail">
                </div> -->



            </form>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex w-100">
            <button form="account-form" class="btn btn-primary mr-2">Save</button>
            <a href="./?page=vendor_manage" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#generate_pass').click(function () {
            var randomstring = Math.random().toString(36).slice(-8);
            $('[name="generated_password"]').val(randomstring)
        })
        $('[name="vendor_number"]').on('input', function () {
            if ($('._checks').length > 0)
                $('._checks').remove()
            $('button[form="account-form"]').attr('disabled', true)
            $(this).removeClass('border-danger')
            $(this).removeClass('border-success')
            var checks = $('<small class="_checks">')
            checks.text("Checking availablity")
            $('[name="vendor_number"]').after(checks)
            $.ajax({
                url: _base_url_ + 'classes/Master.php?f=check_account',
                method: 'POST',
                data: { id: $('[name="id"]').val(), vendor_number: $(this).val() },
                dataType: 'json',
                error: err => {
                    console.log(err)
                    alert_toast("An error occured 1", "error")
                    end_loader()
                },
                success: function (resp) {
                    if (resp.status == 'available') {
                        checks.addClass('text-success')
                        checks.text('Available')
                        $('[name="vendor_number"]').addClass('border-success')
                        $('button[form="account-form"]').attr('disabled', false)
                    } else if (resp.status == 'taken') {
                        checks.addClass('text-danger')
                        checks.text('Account already exist')
                        $('[name="vendor_number"]').addClass('border-danger')
                        $('button[form="account-form"]').attr('disabled', true)
                    } else {
                        alert_toast('An error occured 2', "error")
                        $('[name="vendor_number"]').addClass('border-danger')
                        console.log(resp)
                    }
                    end_loader()
                }
            })
        })
        $('#account-form').submit(function (e) {
            e.preventDefault()
            start_loader()
            if ($('.err_msg').length > 0)
                $('.err_msg').remove()
            $.ajax({
                url: _base_url_ + 'classes/Master.php?f=save_account',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                error: err => {
                    console.log(err)
                    alert_toast("An error occured 33", "error")
                    end_loader()
                },
                success: function (resp) {
                    if (resp.status == 'success') {
                        location.href = "./?page=vendor_manage"
                    } else if (!!resp.msg) {
                        var msg = $('<div class="err_msg"><div class="alert alert-danger">' + resp.msg + '</div></div>')
                        $('#account-form').prepend(msg)
                        msg.show('slow')
                    } else {
                        alert_toast('An error occured 4', "error")
                        console.log(resp)
                    }
                    end_loader()
                }
            })
        })

    })
</script>
<script>
    $(function () {
        $('#generate_vendor_number').click(function () {
            var prefix = "V-";
            var randomCode = Math.floor(10000000 + Math.random() * 90000000);
            var accountNumber = prefix + randomCode;
            $('#vendor_number').val(accountNumber);
        });
    });
</script>
<style>
    img#cimg {
        height: 15vh;
        width: 15vh;
        object-fit: cover;
        border-radius: 100% 100%;
    }
</style>
<script>
    function displayImg(input, _this) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#cimg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>