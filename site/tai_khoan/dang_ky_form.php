<form action="index.php?submit_signup" class="px-2 py-4" method="POST" enctype="multipart/form-data">
    <div class="mb-4">
        <label for="user_name" class=" block mb-2 text-sm font-medium text-white">Tên người dùng:</label>
        <input type="text" name="user_name" id="user_name" placeholder="User name"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="email" class="block mb-2 text-sm font-medium text-white">Email:</label>
        <input type="email" name="email" placeholder="Email"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="ho_ten" class="block mb-2 text-sm font-medium text-white">Họ và tên:</label>
        <input type="text" name="ho_ten" id="ho_ten" placeholder="Họ tên"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="image" class="block mb-2 text-sm font-medium text-white">Hình ảnh:</label>
        <input type="file" name="image" id="image"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 text-white block w-full p-2 rounded-md"
            required>
    </div>

    <div class="mb-4">
        <label for="mat_khau" class="block mb-2 text-sm font-medium text-white">Mật khẩu:</label>
        <input type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu"
            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" required>
    </div>
    <input type="hidden" name="vai_tro" id="vai_tro" value="0">
    <input type="hidden" name="kich_hoat" id="kich_hoat" value="1">
    <div class="mt-6 flex items-center justify-between">
        <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md">Đăng ký</button>
        <a href="index.php?login" class=" text-blue-500">Đã có tài khoản</a>

    </div>
</form>