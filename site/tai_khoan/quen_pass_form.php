<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="demoValidation.js" type="text/javascript"></script>
<script>
    $().ready(function () {
        $("#login_user").validate({
            onfocusout: true,
            onkeyup: true,
            onclick: true,
            rules: {
                "firstname": {
                    required: true,
                },
                "email": {
                    required: true,
                    email: true,
                },
                "password1": {
                    required: true,
                    minlength: 3
                }

            },
            messages: {
                "firstname": {
                    required: "Bắt buộc nhập",
                },
                "email": {
                    required: "Bắt buộc nhập",
                    email: "Đúng định dạng email",
                },
                "password1": {
                    required: "Bắt buộc nhập",
                    minlength: "Nhập ít nhất 3 ký tự"
                }


            }
        });
    });

</script>

<form action="index.php?submit_change_pass" method="post">
    <div class="form-control w3layouts">
        <input type="text" id="firstname" name="firstname" placeholder="User Name" title="Please enter your Username"
            required="">
    </div>



    <div class="form-control agileinfo">
        <input type="text" class="lock" name="email" placeholder="Email" id="email" required="">
    </div>

    <div class="form-control agileinfo">
        <input type="password" class="lock" name="Newpassword" placeholder="Mật khẩu mới" id="password1" required="">
    </div>


    <input type="submit" class="register" value="Đổi mật khẩu">
    <a href="index.php?login" class="ml-[96px] text-blue-500">Đăng nhập</a>

</form>