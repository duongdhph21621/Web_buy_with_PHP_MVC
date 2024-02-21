<style>
    .example_text {
        white-space: nowrap;
        /* Ngăn văn bản xuống dòng */
        overflow: hidden;
        /* Ẩn phần văn bản vượt qua khung */
        text-overflow: ellipsis;
        /* Hiển thị dấu ba chấm */
    }
</style>

<div class="mt-4 border-t border-gray-200">
    <form action="/site/hang_hoa/liet_ke.php" class="border-b pb-4 border-gray-200">
        <span class="mb-4 block">Search</span>
        <input type="text" name="kyw" id="kyw"
            class="block w-full rounded-full border-0 focus-visible:out-line-none px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-visible:ring-0 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            placeholder="Nhập từ khóa tìm kiếm">
    </form>
    <h3 class=" mt-2">Danh mục</h3>
    <ul role="list" class="px-2 py-3 font-medium text-gray-900">
        <?php
        foreach ($ds_loai_hang as $value) {

            echo "<li>";
            echo "<a href='../hang_hoa/liet_ke.php?ma_loai=" . $value["ma_loai"] . "' class='block px-2 py-3'>" . $value["ten_loai"] . "</a>";
            echo "</li>";
        }
        ?>

    </ul>
    <div>
        <h3>Top 10 yêu thích</h3>
        <ul role="list" class="px-2 border-2 rounded-lg font-medium text-gray-900">
            <?php
            foreach ($ds_hang_hoa_top_10 as $value) {

                echo "<li class='border-b-2 border-gray block'>";
                echo "<a class='flex items-center py-2' href='../hang_hoa/chi_tiet.php?ma_hh=" . $value["ma_hh"] . "' class='block px-2 py-3'>
                    <img class='w-[20px] h-[20px]' src='/upload/" . $value["hinh"] . "' />
                    <p class='ml-3 example_text'>" . $value["ten_hh"] . "</p>
                </a>";
                echo "</li>";
            }
            ?>

        </ul>
    </div>
</div>