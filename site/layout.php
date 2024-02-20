<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
        type="text/javascript"></script>
    <script src="demoValidation.js" type="text/javascript"></script>


</head>
<style>
    label.error {
        color: red;
    }

    .disabled {
        pointer-events: none;
        color: gray;
        text-decoration: none;
        cursor: not-allowed;
    }
</style>

<body>
    <?php
    $userCookie = $_COOKIE['user'];

    $userLogin = unserialize($userCookie);
    if (!$userLogin) {
        header("Location: /site/tai_khoan?login");
    }
    ?>
    <?php
    require("header.php");
    ?>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 mt-4">
        <ul role="list" class="grid grid-cols-12 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12">
            <?php
            $currentURL = $_SERVER['REQUEST_URI'];
            if ($currentURL === "/site/trang_chu/" || $currentURL === "/site/trang_chu/index.php") {


                ?>
                <div class="col-span-12">
                    <img src="/content/images/slider_2.webp" class="w-full object-cover" alt="">
                </div>
                <?php
            }

            ?>
            <div class="col-span-9 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12">
                <?php
                require($VIEW_NAME)
                    ?>
            </div>
            <div class="col-span-3">
                <?php
                require("danh_muc.php")
                    ?>
            </div>

            <!-- More people... -->
        </ul>

    </div>

    <?php
    require("footer.php");
    ?>

</body>

</html>