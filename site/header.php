<?php
$userCookie = $_COOKIE['user'];

// Chuyển đổi chuỗi đã serialize thành mảng
$userLogin = unserialize($userCookie);

?>

<header class="bg-indigo-600 sticky top-[0] right-0 left-0 z-[100]">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex w-full items-center justify-between border-b border-indigo-500 py-6 lg:border-none">
            <div class="flex items-center">
                <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="">
                </a>
                <div class="ml-10 hidden space-x-8 lg:block">
                    <a href="/" class="text-base font-medium text-white hover:text-indigo-50">Trang chủ</a>
                    <a href="/site/trang_chu?gioi_thieu"
                        class="text-base font-medium text-white hover:text-indigo-50">Giới thiệu</a>
                    <a href="/site/trang_chu?lien_he" class="text-base font-medium text-white hover:text-indigo-50">Liên
                        hệ</a>
                    <a href="/site/trang_chu?gop_y" class="text-base font-medium text-white hover:text-indigo-50">Góp
                        ý</a>
                    <a href="/site/trang_chu?nhan_dien"
                        class="text-base font-medium text-white hover:text-indigo-50">Nhận diện</a>
                </div>
            </div>
            <div class="ml-10 space-x-4 flex ">
                <?php
                if ($userLogin) {
                    if ($userLogin["vai_tro"] == 1) {
                        echo "<a href='/admin/thong_ke'
                        class='inline-block rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-base font-medium text-white hover:bg-opacity-75'>Admin Manager</a>";
                    }
                    echo "<div class='relative'>
                    
                            <button type='button' class='group -m-1.5 flex items-center p-1.5' id='user-menu-button'
                                aria-expanded='false' aria-haspopup='true'>
                                <span class='sr-only'>Open user menu</span>
                                <img class='h-8 w-8 rounded-full bg-gray-50'
                                    src='/upload/" . $userLogin["hinh"] . "'
                                    alt=''>
                                <span class='hidden lg:flex lg:items-center'>
                                    <span class='ml-4 text-sm font-semibold leading-6 text-white'
                                        aria-hidden='true'>" . $userLogin["ho_ten"] . "</span>
                                    <svg class='ml-2 h-5 w-5 text-gray-400' viewBox='0 0 20 20' fill='currentColor'
                                        aria-hidden='true'>
                                        <path fill-rule='evenodd'
                                            d='M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z'
                                            clip-rule='evenodd' />
                                    </svg>
                                </span>
                                <div class='hidden group-hover:block absolute right-0 top-[25px] z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white  shadow-lg ring-1 ring-gray-900/5 focus:outline-none'
                                role='menu' aria-orientation='vertical' aria-labelledby='user-menu-button'
                                tabindex='-1'>
                                <!-- Active: 'bg-gray-50', Not Active: ' -->
                                <a href='/site/profile' class='block px-3 py-2 text-sm leading-6 text-gray-900 hover:bg-gray-200 rounded-md' role='menuitem'
                                    tabindex='-1' id='user-menu-item-0'>Your profile</a>
                                <a href='/site/tai_khoan?logout' class='block px-3 py-2 text-sm leading-6 text-gray-900 hover:bg-gray-200 rounded-md' role='menuitem'
                                    tabindex='-1' id='user-menu-item-1'>Sign out</a>
                            </div>
                            </button>

                            
                        </div>";
                } else {


                    echo "<a href='/site/tai_khoan/index.php?login'
                        class='inline-block rounded-md border border-transparent bg-indigo-500 px-4 py-2 text-base font-medium text-white hover:bg-opacity-75'>Sign
                        in</a>
                    <a href='#'
                        class='inline-block rounded-md border border-transparent bg-white px-4 py-2 text-base font-medium text-indigo-600 hover:bg-indigo-50'>Sign
                        up</a>";
                }


                ?>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-x-6 py-4 lg:hidden">
            <a href="/" class="text-base font-medium text-white hover:text-indigo-50">Trang chủ</a>
            <a href="/site/trang_chu?gioi_thieu" class="text-base font-medium text-white hover:text-indigo-50">Giới
                thiệU</a>
            <a href="/site/trang_chu?lien_he" class="text-base font-medium text-white hover:text-indigo-50">Liên hệ</a>
            <a href="/site/trang_chu?gop_y" class="text-base font-medium text-white hover:text-indigo-50">Góp ý</a>
            <a href="/site/trang_chu?nhan_dien" class="text-base font-medium text-white hover:text-indigo-50">Nhận
                diện</a>
        </div>
    </nav>
</header>