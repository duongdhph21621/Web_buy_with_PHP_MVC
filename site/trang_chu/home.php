<div class="col-span-12 mt-10 grid grid-cols-12 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12">
    <?php
    foreach ($ds_hang_hoa_top_10 as $value) {

        echo "<a href='../hang_hoa/chi_tiet.php?ma_hh=" . $value["ma_hh"] . "' class='col-span-4 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow'>";
        echo "<div class='flex flex-1 flex-col py-8 px-3'>";
        echo "<img class='mx-auto h-32 w-32'";
        echo "src='../../upload/" . $value["hinh"] . "'";
        echo "alt='" . $value["hinh"] . "'>";
        echo "<h3 class='mt-6 text-sm font-medium text-gray-900'>" . $value["ten_hh"] . "</h3>";
        echo "<dl class='mt-1 flex flex-grow flex-col justify-between'>";
        echo "<dt class='text-red-500 text-xl'>" . $value["don_gia"] . "đ</dt>";
        echo "</dl>";
        echo "  </div>";
        echo "</a>";
    }

    ?>
</div>