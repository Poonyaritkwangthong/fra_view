<div class="mt-[2rem] border-b">
    <label class="text-3xl text-[#4846aa]" for="">ส่วนที่ 9 มีการประเมินครอบครัว
        หรือไม่</label>
    <div class="flex gap-4 items-center pl-16 mt-[1rem] mb-[2rem]">
        <div>
            <input type="radio" name="result" value="ไม่มี" id="" onclick="hideAllFields8()"
                {{ $general_information->family_assessments->result == 'ไม่มี' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="result">9.1 ไม่มี</label>
        </div>

        <div class="flex items-center gap-4">
            <input type="radio" name="result" value="มี" id="" onclick="toggleFields8(true)"
                {{ $general_information->family_assessments->result == 'มี' ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="result">9.2 มี</label>
            <div id="on-7" style="display: none;">
                <div class="flex items-center gap-2">
                    <label class="text-[#525456] text-lg" for="total_score">มีผลการประเมิน</label>
                    <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg w-[5rem] pl-4 border"
                        type="text" name="total_score" id="">
                    <p class="text-[#525456] text-lg">คะเเนน</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-[2rem]">
    <h1 class="text-3xl text-[#4846aa]" for="">ส่วนที่ 10 ผังครอบครัว/เเผนที่บ้าน</h1><br>
    <div class="flex justify-center gap-[2rem] p-[2rem]">
        <div class="mt-[1rem]">
            <label for="family_tree" class="text-[#525456] text-center text-2xl">
                อัพโหลดภาพผังครอบครัว
            </label>
            <div class="relative w-[30rem] mt-[1rem] bg-[#f4f4fc] border-[#a3a0df] rounded-lg hover:ring-2 hover:ring-blue-500 p-2"
                onclick="triggerImageUploadFamilyTree()">
                <div class="absolute inset-0 hover:bg-black/40"></div>

                @if (!empty($family_tree_and_house_map['family_tree']))
                    <img class="w-[30rem] object-cover"
                        src="{{ $family_tree_and_house_map['family_tree'] }}"
                        alt="Family Tree Image" />
                @elseif (!empty($general_information->family_tree_and_house_map->family_tree))
                    <img class="w-[30rem] object-cover"
                        src="{{ $general_information->family_tree_and_house_map->family_tree }}"
                        alt="Family Tree Image" />
                @else
                    <img class="w-[30rem] object-cover"
                        src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                        alt="No Image" />
                @endif

                <input name="family_tree" id="family_tree" hidden type="file"
                    class="input input-bordered input-primary w-full max-w- text-black p-2"
                    placeholder="Family Tree Image" onchange="handleFileChangeFamilyTree(event)" />
            </div>

            @if (!empty($error['family_tree']))
                <div
                    class="mt-2 bg-gradient-to-t from-[#5e0a0a] to-[#ff3baa] outline outline-offset-2 outline-1 outline-[#ff3baa] px-2 text-sm">
                    {{ $error['family_tree'] }}
                </div>
            @endif
        </div>

        <div class="mt-[1rem]">
            <label for="house_map" class="text-[#525456] text-center text-2xl">
                อัพโหลดภาพเเผนที่บ้าน
            </label>
            <div class="relative w-[30rem] mt-[1rem] bg-[#f4f4fc] border-[#a3a0df] rounded-lg hover:ring-2 hover:ring-blue-500 p-2"
                onclick="triggerImageUploadHouseMap()">
                <div class="absolute inset-0 hover:bg-black/40"></div>

                @if (!empty($family_tree_and_house_map['house_map']))
                    <img class="w-[30rem] object-cover"
                        src="{{ $family_tree_and_house_map['house_map'] }}"
                        alt="House Map Image" />
                @elseif (!empty($general_information->family_tree_and_house_map->house_map))
                    <img class="w-[30rem] object-cover"
                        src="{{ $general_information->family_tree_and_house_map->house_map }}"
                        alt="House Map Image" />
                @else
                    <img class="w-[30rem] object-cover"
                        src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                        alt="No Image Available" />
                @endif

                <input name="house_map" id="house_map" hidden type="file"
                    class="input input-bordered input-primary w-full max-w- text-black p-2"
                    placeholder="House Map Image" onchange="handleFileChangeHouseMap(event)" />
            </div>

            @if (!empty($error['house_map']))
                <div
                    class="mt-2 bg-gradient-to-t from-[#5e0a0a] to-[#ff3baa] outline outline-offset-2 outline-1 outline-[#ff3baa] px-2 text-sm">
                    {{ $error['house_map'] }}
                </div>
            @endif
        </div>
    </div>
</div>
<script>
    function triggerImageUploadFamilyTree() {
        document.getElementById("family_tree").click();
    }

    function handleFileChangeFamilyTree(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];

        if (file) {
            const container = fileInput.closest(".relative");
            let imgPreview = container.querySelector("img");

            // ถ้า img ไม่มีอยู่ สร้างใหม่
            if (!imgPreview) {
                imgPreview = document.createElement("img");
                imgPreview.className = "w-[30rem] object-cover";
                container.prepend(imgPreview);
            }

            imgPreview.src = URL.createObjectURL(file);
        }
    }

    function triggerImageUploadHouseMap() {
        document.getElementById("house_map").click();
    }

    function handleFileChangeHouseMap(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];

        if (file) {
            const container = fileInput.closest(".relative");
            let imgPreview = container.querySelector("img");

            // ถ้า img ไม่มีอยู่ สร้างใหม่
            if (!imgPreview) {
                imgPreview = document.createElement("img");
                imgPreview.className = "w-[30rem] object-cover";
                container.prepend(imgPreview);
            }

            imgPreview.src = URL.createObjectURL(file);
        }
    }
</script>
