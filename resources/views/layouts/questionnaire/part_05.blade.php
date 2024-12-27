<div class="mt-[2rem]">
    <label class="text-3xl text-[#4846aa]" for="">ส่วนที่ 5 การประเมินความเสี่ยงของผู้ป่วย
        สามารถระบุได้มากกว่า 1
        ประเด็นความเสี่ยง/ปัจจัยความเสี่ยง</label>
    <div class="grid grid-rows-7 grid-flow-col gap-4 mt-[1rem] pl-16">
        <div class="flex gap-4 items-center">
            <input value="0.ไม่มีความเสี่ยง" onclick="toggleFields6(this, 'riskText1')" type="checkbox" name="risk[]"
                id="checkbox1">
            <label class="text-[#525456] text-lg" for="checkbox1">0.ไม่มีความเสี่ยง</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText1"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="1.การเจ็บป่วยซ้ำ" onclick="toggleFields6(this, 'riskText2')" type="checkbox" name="risk[]"
                id="checkbox2">
            <label class="text-[#525456] text-lg" for="checkbox2">1.การเจ็บป่วยซ้ำ</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText2"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="2.การทำแท้ง/ทอดทิ้งบุตร" onclick="toggleFields6(this, 'riskText3')" type="checkbox"
                name="risk[]" id="checkbox3">
            <label class="text-[#525456] text-lg" for="checkbox3">2.การทำแท้ง/ทอดทิ้งบุตร</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText3"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="3.การทำร้ายผู้อื่น" onclick="toggleFields6(this, 'riskText4')" type="checkbox" name="risk[]"
                id="checkbox4">
            <label class="text-[#525456] text-lg" for="checkbox4">3.การทำร้ายผู้อื่น</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText4"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="4.การถูกล่วงละเมิด/ก่ออาชญากรรม/การเป็นเหยื่่อการค้ามนุษย์"
                onclick="toggleFields6(this, 'riskText5')" type="checkbox" name="risk[]" id="checkbox5">
            <label class="text-[#525456] text-lg"
                for="checkbox5">4.การถูกล่วงละเมิด/ก่ออาชญากรรม/การเป็นเหยื่่อการค้ามนุษย์</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText5"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="5.การรับเเละเเพร่เชื้อ HIV" onclick="toggleFields6(this, 'riskText6')" type="checkbox"
                name="risk[]" id="checkbox6">
            <label class="text-[#525456] text-lg" for="checkbox6">5.การรับเเละเเพร่เชื้อ HIVร</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText6"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="6.การเกิดปัญหาสุขภาพจิต/จิตเวช" onclick="toggleFields6(this, 'riskText7')" type="checkbox"
                name="risk[]" id="checkbox7">
            <label class="text-[#525456] text-lg" for="checkbox7">6.การเกิดปัญหาสุขภาพจิต/จิตเวช</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText7"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="7.การหลบหนี" onclick="toggleFields6(this, 'riskText8')" type="checkbox" name="risk[]"
                id="checkbox8">
            <label class="text-[#525456] text-lg" for="checkbox8">7.การหลบหนี</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText8"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="8.การมีปัญหาครอบครัว" onclick="toggleFields6(this, 'riskText9')" type="checkbox"
                name="risk[]" id="checkbox9">
            <label class="text-[#525456] text-lg" for="checkbox9">8.การมีปัญหาครอบครัว</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText9"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="9.การติดสารเสพติด/เสพซ้ำ" onclick="toggleFields6(this, 'riskText10')" type="checkbox"
                name="risk[]" id="checkbox10">
            <label class="text-[#525456] text-lg" for="checkbox10">9.การติดสารเสพติด/เสพซ้ำ</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText10"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="10.การฆ่าตัวตาย" onclick="toggleFields6(this, 'riskText11')" type="checkbox"
                name="risk[]" id="checkbox11">
            <label class="text-[#525456] text-lg" for="checkbox11">10.การฆ่าตัวตาย</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText11"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="11.การถูกกีดกัน/ถูกเลือกปฏิบัติจากชุมชนหรือสังคม/ไม่ได้รับความเป็นธรรม"
                onclick="toggleFields6(this, 'riskText12')" type="checkbox" name="risk[]" id="checkbox12">
            <label class="text-[#525456] text-lg"
                for="checkbox12">11.การถูกกีดกัน/ถูกเลือกปฏิบัติจากชุมชนหรือสังคม/ไม่ได้รับความเป็นธรรม</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText12"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="12.การได้รับการเลี้ยงดู/ดูเเลไม่เหมาะสม" onclick="toggleFields6(this, 'riskText13')"
                type="checkbox" name="risk[]" id="checkbox13">
            <label class="text-[#525456] text-lg" for="checkbox13">12.การได้รับการเลี้ยงดู/ดูเเลไม่เหมาะสม</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText13"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
        <div class="flex gap-4 items-center">
            <input value="13.การถูกญาติทอดทิ้ง/ไม่ยอมรับ" onclick="toggleFields6(this, 'riskText14')" type="checkbox"
                name="risk[]" id="checkbox14">
            <label class="text-[#525456] text-lg" for="checkbox14">13.การถูกญาติทอดทิ้ง/ไม่ยอมรับ</label>
            <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" id="riskText14"
                style="display: none;" type="text" name="risk_detail[]" value="">
        </div>
    </div>
</div>
