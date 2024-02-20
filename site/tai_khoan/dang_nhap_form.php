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
                "password1": {
                    required: true,
                    minlength: 3
                }

            },
            messages: {
                "firstname": {
                    required: "Bắt buộc nhập",
                },
                "password1": {
                    required: "Bắt buộc nhập",
                    minlength: "Nhập ít nhất 3 ký tự"
                }


            }
        });
    });

</script>

<form action="index.php?submit_login" id="login_user" method="post">
    <div class="form-control w3layouts">
        <input type="text" id="firstname" name="firstname" placeholder="User Name" title="Please enter your Username"
            required="">
    </div>



    <div class="form-control agileinfo">
        <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
    </div>

    <div class="flex items-center justify-between">
        <a href="index.php?forgotPass" class="ml-[100px] text-blue-500">Quên mật khẩu</a>
        <a href="index.php?signup" class="mr-[100px] text-blue-500">Đăng ký</a>
    </div>



    <input type="submit" class="register" value="Login">

</form>