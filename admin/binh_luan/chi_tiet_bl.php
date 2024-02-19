<div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <a href="/admin/binh_luan/index.php"
                class="min-w-[100px] block w-fit rounded-md bg-green-400 mb-4 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200">
                Quay lại</a>
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">

                    <form action="?deleteSelected" method="post">


                        <thead class="bg-gray-50">


                            <tr>

                                <th scope="col" class="py-3.5 text-sm font-semibold text-gray-900   ">
                                    <button onclick='return confirmDelete()' type='submit'
                                        class='mb-1 inline-flex items-center gap-x-1.5 rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>
                                        <i class='fa-solid fa-pencil'></i>
                                        Xóa mục đã chọn
                                    </button>
                                </th>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    Bình luận</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Người bình luận</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">

                                    Ngày bình luậN</th>

                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">

                                    <span class="">Action</s pan>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <?php
                            foreach ($ds_bl as $key => $value) {
                                echo "<input type='hidden' name='ma_hh' value='" . $value["ma_hh"] . "' />";
                                echo "<tr>";
                                echo "<td><input value=" . $value["ma_bl"] . " name='ma_bl[]'  type='checkbox' class='h-4 w-4 ml-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600'></td>";
                                echo "<td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>" . $value["noi_dung"] . "</td>";
                                echo "<td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" . $value["user_name"] . "</td>";
                                echo "<td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" . $value["ngay_bl"] . "</td>";

                                echo "<td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>";
                                echo "<a href='?ma_bl=" . $value["ma_bl"] . "&ma_hh=" . $value["ma_hh"] . "&xoa_bl' onclick='return confirmDelete()' type='button' class='mb-1 inline-flex items-center gap-x-1.5 rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>";
                                echo "<i class='fa-solid fa-pencil'></i>";
                                echo "Xóa";
                                echo "</a>";

                                echo "</td>";
                                echo "</tr>";
                            }

                            ?>



                            <!-- More people... -->
                        </tbody>
                    </form>
                </table>
            </div>

        </div>
    </div>
</div>