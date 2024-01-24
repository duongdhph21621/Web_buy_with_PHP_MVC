<?php
foreach ($items as $value) {

    echo "<a href='../hang_hoa/chi_tiet.php?ma_hh=" . $value["ma_hh"] . "' class='col-span-4 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow'>";
    echo "<div class='flex  flex-col py-8 px-3'>";
    echo "<img class='mx-auto h-32 w-32'";
    echo "src='../../upload/" . $value["hinh"] . "'";
    echo "alt='" . $value["hinh"] . "'>";
    echo "<h3 class='mt-6 text-sm font-medium text-gray-900'>" . $value["ten_hh"] . "</h3>";
    echo "<div class='mt-1'>";
    echo "<p class='text-red-500 text-xl'>" . $value["don_gia"] . "đ</p>";
    echo "</div>";
    echo "  </div>";
    echo "</a>";
}

?>