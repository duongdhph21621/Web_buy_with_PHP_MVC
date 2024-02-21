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
                "password": {
                    required: true,
                },
                "new_password": {
                    required: true,
                    minlength: "Nhập ít nhất 3 ký tự"

                },
                "re_new_password": {
                    equalTo: "#new_password",
                    required: true,
                    minlength: 3
                }

            },
            messages: {
                "password": {
                    required: "Bắt buộc nhập",
                },
                "new_password": {
                    required: "Bắt buộc nhập",
                    minlength: "Nhập ít nhất 3 ký tự"

                },
                "re_new_password": {
                    equalTo: "Nhập lại không chính xác",
                    required: "Bắt buộc nhập",
                    minlength: "Nhập ít nhất 3 ký tự"
                }


            }
        });
    });

</script>

<form action="index.php?edit_pass" method="post">




    <!-- <div class="form-control agileinfo">
        <input type="password" class="lock" name="password" placeholder="Mật khẩu cũ" id="password" required="">
    </div>
    <div class="form-control agileinfo">
        <input type="password" class="lock" name="new_password" placeholder="Mật khẩu mới" id="new_password"
            required="">
    </div>
    <div class="form-control agileinfo">
        <input type="password" class="lock" name="re_new_password" placeholder="Nhập lại mật khẩu mới"
            id="re_new_password" required="">
    </div> -->
    <div class="mb-4">
        <label for="mat_khau" class="block mb-2 text-sm font-medium text-white">Mật khẩu cũ:</label>
        <input type="password" name="password" id="password" placeholder="Mật khẩu cũ"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md">
    </div>
    <div class="mb-4">
        <label for="mat_khau" class="block mb-2 text-sm font-medium text-white">Mật khẩu Mới:</label>
        <input type="password" name="new_password" id="new_password" placeholder="Mật khẩu Mới"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md">
    </div>
    <div class="mb-4">
        <label for="mat_khau" class="block mb-2 text-sm font-medium text-white">Nhập lại mật khẩu mới:</label>
        <input type="password" name="re_new_password" id="re_new_password" placeholder="Nhập lại mật khẩu mới"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md">
    </div>

    <input type="submit" class="register" value="Đổi mật khẩu">
    <a href="/" class="ml-[96px] text-blue-500">Trang chủ</a>

</form>