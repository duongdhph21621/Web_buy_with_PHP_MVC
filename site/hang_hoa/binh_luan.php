<?php
require("../../dao/binh_luan.php");
require("../../dao/users.php");
if (exist_param("noidung")) {
    $ma_kh = $_SESSION["user"]["ma_kh"];
    $ngay_bl = date_format(date_create(), "Y-m-d");
    binh_luan_insert($noi_dung, $ma_hh, $ngay_bl, $ma_kh);
}

$bl_list = binh_luan_select_by_hang_hoa($ma_hh);
foreach ($bl_list as $value) {
    echo "<div class='bg-gray-100 flex items-center py-2 px-6 border-b-2'>";
    echo "<div class='flex items-center '>";
    echo "<div class='text-gray-800'>";
    echo "<h3 class='font-semibold'>" . users_select_by_id($value["ma_kh"])["ho_ten"] . "</h3>";
    echo "<p class='text-sm text-gray-600'>" . $value["ngay_bl"] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "<p class='text-gray-700 mb-4 ml-5'>" . $value["noi_dung"] . "</p>";

    echo "</div>";
}

if (!isset($_SESSION["user"])) {
    echo "<p class='text-sm text-gray-600'>Đăng nhập để bình luận</p>";
} else {
    ?>
    <form action="<?php $_SERVER["REQUEST_URL"] ?>" method="POST">
        <div>
            <div class="flex items-center" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "bg-gray-100 text-gray-900 hover:bg-gray-200", Not Selected: "bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900" -->
                <button id="tabs-1-tab-1"
                    class="bg-white text-gray-500  rounded-md border border-transparent px-3 py-1.5 text-sm font-medium"
                    aria-controls="tabs-1-panel-1" role="tab" type="button">Write</button>
                <!-- Selected: "bg-gray-100 text-gray-900 hover:bg-gray-200", Not Selected: "bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900" -->

                <!-- These buttons are here simply as examples and don't actually do anything. -->
                <div class="ml-auto flex items-center space-x-5">
                </div>
            </div>
            <div class="mt-2">
                <div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1" role="tabpanel"
                    tabindex="0">
                    <label for="comment" class="sr-only">Comment</label>
                    <div>
                        <textarea rows="5" name="comment" id="comment"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-3 sm:text-sm sm:leading-6"
                            placeholder="Add your comment..."></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-2 flex justify-end">
            <button type="submit"
                class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
        </div>
    </form>
    <?php
}

?>