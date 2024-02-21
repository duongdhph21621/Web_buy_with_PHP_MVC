<div class="col-span-7  mr-10">
    <div class="relative mt-10">
        <div class="h-[560px] w-full relative">
            <!-- svelte-ignore a11y-missing-attribute -->
            <img src="../../upload/<?php echo $item_hh["hinh"] ?>" class="w-full h-full object-cover" />

            <?php
            if ($item_hh["dac_biet"] == 1) {
                echo "<div";
                echo " class='flex justify-center items-center absolute w-[70px] h-[70px] rounded-[100%]  bg-red-600 text-white right-[-20px] top-[-20px]'>";
                echo "<span>Đặc biệt</span>";
                echo "</div>";

            }
            ?>
        </div>

    </div>
</div>
<div class="col-span-5 flex flex-col justify-between">
    <div class="flex flex-col justify-between">
        <p class="font-Space mb-2 font-medium text-xs text-[#FDA701] tracking-[2px] uppercase">
            <?php echo $loai_hang["ten_loai"] ?>
        </p>
        <h2 class="font-Inter text-[22px] font-medium text-[#3B6122] mt-2 mb-3">
            <?php echo $item_hh["ten_hh"] ?>
        </h2>
        <p class="py-2 text-[#475467] font-normal font-Inter max-w-[90%]">
            <?php echo $item_hh["mo_ta"] ?>
        </p>


        <div class="pt-2 pb-[10px]">
            <p class="font-Space text-[#475467] uppercase font-medium text-xs">Giảm giá</p>
            <div class="mt-2 flex gap-2">
                <div
                    class="p-1 font-Inter font-normal text-white rounded-md  text-[16px] bg-[red] border-[1px] text-[#344054] border-[#ECF1F6] py-1  px-[20px] w-fit cursor-pointer">
                    <?php echo $item_hh["giam_gia"] * 100 ?>%
                </div>
            </div>
        </div>
    </div>
    <div class="border_gradian_footer border-t-[1px]">
        <p class="font-Space font-medium text-base text-[#1D2939] text-left py-3">
            <?php echo $item_hh["don_gia"] ?><span class="price_font text-sm mb-1 font-medium absolute">vnđ</span>
            </span>
        </p>
        <a href="#"
            class="mt-5 flex uppercase justify-center gap-4 items-center py-2 bg-[#1E4D84] text-white font-medium text-base font-Space">
            <!-- <img src="/img/cartwhite.png" alt="" class="w-[24px] h-[24px]" /> -->
            <span>Thêm vào giỏ hàng</span>
        </a>
    </div>
</div>
<div class="col-span-12">
    <?php require("binh_luan.php") ?>
</div>
<div class="col-span-12 grid grid-cols-12 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12">
    <div class="col-span-12 justify-center flex w-full ">Sản phẩm cùng loại</div>
    <?php
    foreach ($ds_hang_hoa_tuong_tu as $value) {

        echo "<a href='./chi_tiet.php?ma_hh=" . $value["ma_hh"] . "' class='col-span-4 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow'>";
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