<?php
// ดึงข้อมูลจากฐานข้อมูลและแปลง JSON
$social_information = $general_information->social_informations->social_information ?? '[]';
$social_information = json_decode($social_information, true);

// ตรวจสอบว่าค่าที่ได้เป็น Array หรือไม่
$social_information = is_array($social_information) ? array_map('trim', $social_information) : [];
?>
<div>
    <label class="text-3xl text-[#4846aa]" for="">ส่วนที่ 3
        ข้อมูลทางสังคม/ปัญหาที่ส่งมารับบริการ/การประเมินวินิจฉัยทางปัญหาสังคม(ระบุปัญหาได้มากกว่า 1
        ปัญหา)</label>
    <div class="border-b">
        <div class="grid grid-rows-6 grid-flow-col gap-4 mt-[1rem] pl-16 mb-[2rem]">
            <div>
                <input type="checkbox" id="social_information_00" name="social_information[]" value="00 ไม่มีปัญหาทางสังคม"
                    {{ in_array('00 ไม่มีปัญหาทางสังคม', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_00">00 ไม่มีปัญหาทางสังคม</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_01" name="social_information[]"
                    value="01 ปัญหาคู่สมรสเเละการครองเรือน"
                    {{ in_array('01 ปัญหาคู่สมรสเเละการครองเรือน', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_01">01
                    ปัญหาคู่สมรสเเละการครองเรือน</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_02" name="social_information[]"
                    value="02 ปัญหาระหว่างบิดา มารดา บุตร"
                    {{ in_array('02 ปัญหาระหว่างบิดา มารดา บุตร', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_02">02 ปัญหาระหว่างบิดา มารดา บุตร</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_03" name="social_information[]"
                    value="03 ปัญหาความเเตกเเยกในครอบครัว"
                    {{ in_array('03 ปัญหาความเเตกเเยกในครอบครัว', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_03">03 ปัญหาความเเตกเเยกในครอบครัว</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_04" name="social_information[]"
                    value="04 ปัญหาความสัมพันธ์ระหว่างเครือญาติ"
                    {{ in_array('04 ปัญหาความสัมพันธ์ระหว่างเครือญาติ', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_04">04
                    ปัญหาความสัมพันธ์ระหว่างเครือญาติ</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_05" name="social_information[]" value="05 ปัญหาความรัก"
                    {{ in_array('05 ปัญหาความรัก', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_05">05 ปัญหาความรัก</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_06" name="social_information[]" value="06 ปัญหาทางเพศ"
                    {{ in_array('06 ปัญหาทางเพศ', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_06">06 ปัญหาทางเพศ</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_07" name="social_information[]"
                    value="07 ปัญหาภาระในการดูเเลผู้เจ็บป่วย/ผู้พิการฯ"
                    {{ in_array('07 ปัญหาภาระในการดูเเลผู้เจ็บป่วย/ผู้พิการฯ', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_07">07
                    ปัญหาภาระในการดูเเลผู้เจ็บป่วย/ผู้พิการฯ</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_08" name="social_information[]"
                    value="08 ปัญหาที่อยู่อาศัย/สภาพเเวดล้อมที่เป็นภัยต่อสุขภาพ"
                    {{ in_array('08 ปัญหาที่อยู่อาศัย/สภาพเเวดล้อมที่เป็นภัยต่อสุขภาพ', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_08">08
                    ปัญหาที่อยู่อาศัย/สภาพเเวดล้อมที่เป็นภัยต่อสุขภาพ</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_09" name="social_information[]"
                    value="09 ปัญหาที่เกิดจากบุคคลอื่นนอกครอบครัว"
                    {{ in_array('09 ปัญหาที่เกิดจากบุคคลอื่นนอกครอบครัว', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_09">09
                    ปัญหาที่เกิดจากบุคคลอื่นนอกครอบครัว</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_10" name="social_information[]" value="10 ปัญหาการเงิน"
                    {{ in_array('10 ปัญหาการเงิน', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_10">10 ปัญหาการเงิน</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_11" name="social_information[]" value="11 ปัญหาการศึกษา"
                    {{ in_array('11 ปัญหาการศึกษา', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_11">11 ปัญหาการศึกษา</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_12" name="social_information[]"
                    value="12 ปัญหาการประกรอบอาชีพ"
                    {{ in_array('12 ปัญหาการประกรอบอาชีพ', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_12">12 ปัญหาการประกรอบอาชีพ</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_13" name="social_information[]" value="13 ปัญหาทางกฏหมาย"
                    {{ in_array('13 ปัญหาทางกฏหมาย', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_13">13 ปัญหาทางกฏหมาย</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_14" name="social_information[]"
                    value="14 ปัญหาที่เป็นอุปสรรคต่อการดูเเลสุขภาพของผู้ป่วย"
                    {{ in_array('14 ปัญหาที่เป็นอุปสรรคต่อการดูเเลสุขภาพของผู้ป่วย', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_14">14
                    ปัญหาที่เป็นอุปสรรคต่อการดูเเลสุขภาพของผู้ป่วย</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_15" name="social_information[]"
                    value="15 ปัญหาความเชื่อ วัฒนธรรม การเมือง"
                    {{ in_array('15 ปัญหาความเชื่อ วัฒนธรรม การเมือง', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_15">15 ปัญหาความเชื่อ วัฒนธรรม
                    การเมือง</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_16" name="social_information[]"
                    value="16 ปัญหาสารเสพติด/สารที่ออกฤทธิ์ต่อจิตประสาท"
                    {{ in_array('16 ปัญหาสารเสพติด/สารที่ออกฤทธิ์ต่อจิตประสาท', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_16">16
                    ปัญหาสารเสพติด/สารที่ออกฤทธิ์ต่อจิตประสาท</label>
            </div>
            <div>
                <input type="checkbox" id="social_information_17" name="social_information[]"
                    value="17 ปัญหาที่เป็นปรากฏการทางสังคม/ปัญหาอื่นๆ"
                    {{ in_array('17 ปัญหาที่เป็นปรากฏการทางสังคม/ปัญหาอื่นๆ', $social_information) ? 'checked' : '' }}>
                <label class="text-[#525456] text-lg" for="social_information_17">17
                    ปัญหาที่เป็นปรากฏการทางสังคม/ปัญหาอื่นๆ</label>
            </div>
        </div>
        <div>
            <label class="flex pl-6 text-[#525456] text-lg" for="">
                <p>3.1 สภาพปัญหาที่พบเเละบันทึกเพิ่มเติม</p> ถ้ามี (อธิบายพอสังเขป)
            </label><br>
            <div class="pl-16">
                <textarea class="w-full h-[8rem] text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                    name="conditions_of_problems_found">{{ $general_information->social_informations->conditions_of_problems_found ?? '' }}</textarea>
            </div>
        </div>
        <div class="mt-[2rem] mb-[2rem]">
            <label class="pl-6 text-[#525456] text-lg" for="">
                3.2 การวางเเผนช่วยเหลือ ระยะสั้น/ระยะยาว
            </label><br>
            <div class="pl-16 mt-[1rem]">
                <textarea class="w-full h-[8rem] text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                    name="help_planning">{{ $general_information->social_informations->help_planning ?? '' }}</textarea>
            </div>
        </div>
    </div>
</div>
