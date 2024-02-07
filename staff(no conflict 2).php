<div id="Staffs" class="tabcontent overflow-y-scroll overflow-x-scroll bg-gray-50">
        <form action="" method="POST" class="flex">
            <input type="text" name="text" class="p-4 border-2 border-gray-200 text-gray-500">
            <select name="select" id="" class="p-4 border-2 border-gray-200 text-gray-500">
                <option value="select">select role</option>
                <option value="manager">manager</option>
                <option value="housekeeper">housekeeper</option>
                <option value="security">security</option>
                <option value="front desk">front desk</option>
                <option value="porter">porter</option>
                <option value="cook">cook</option>
                <option value="chef">chef</option>
                <option value="server">server</option>
                <option value="technician">technician</option>
            </select>
            <button type="submit" name="btn" class=" px-8 py-4 bg-blue-500 hover:bg-blue-600">Add staff</button>
        </form>
        <div class=" relative ml-4 gap-x-10 gap-y-4 grid grid-cols-5 grid-rows-3">
            <?php
            $query = "select * from staffs";
            $run = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($run)) {
                $name = $row['name'];
                $role = $row['role'];
            ?>
                <!-- Customer 1 -->
                <div class="flex flex-col justify-center items-center bg-[#fafafa] relative w-[180px] h-[220px] rounded-lg shadow-lg p-2 z-1">
                    <div class="absolute right-2 top-2 z-40">
                        <span class="material-symbols-outlined text-[20px] hover:bg-gray-200 border-1 rounded-full px-2 py-2 hover:cursor-pointer inline-flex">
                            more_vert
                        </span>
                        <div class="hidden origin-top-right absolute right-0 mt-1 w-[100px] h-[80px] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <a href="" class="text-gray-700 hover:text-green-600 block px-6 py-2 flex" role="menuitem" tabindex="-1">
                                    <span class="material-symbols-outlined text-[14px] mt-1 border-1 rounded-full hover:cursor-pointer inline-flex">
                                        edit
                                    </span>
                                    <p class="ml-2 text-[12px] hover:text-green-600">Edit</p>
                                </a>
                                <a href="" class="text-gray-700 hover:text-red-500 block px-6 py-2 flex" role="menuitem" tabindex="-1">
                                    <span class="material-symbols-outlined text-[14px] mt-1 border-1 rounded-full hover:cursor-pointer inline-flex">
                                        delete
                                    </span>
                                    <p class="ml-2 text-[12px] ">Delete</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="Images/testimonials/sudhar1.jpg" alt="image" class="w-[50px] h-[50px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class="font-semibold text-[12px] pb-1 pt-2"><?php echo $name ?></p>
                    <p class="font-semibold text-[12px] text-gray-600"><?php echo $role ?></p>
                </div>
            <?php } ?>

        </div>
    </div>