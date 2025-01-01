
<?php
// ดึงข้อมูลจากฐานข้อมูลและแปลง JSON
$problem_detail = $general_information->problem->problem_detail ?? '[]';
$problem_detail = json_decode($problem_detail, true);

// ตรวจสอบว่าค่าที่ได้เป็น Array หรือไม่
$problem_detail = is_array($problem_detail) ? array_map('trim', $problem_detail) : [];
?>
<div class="mt-[2rem] ">
    <label class="text-3xl text-[#4846aa]" for="">ส่วนที่ 4
        การช่วยเหลือตามสภาพปัญหาเเละความต้องการของผู้ป่วย
        (สามาระบุได้มากกว่า 1
        หัวข้อ)</label>
    <div class="grid grid-rows-2 grid-flow-col gap-4  mt-[1rem] pl-16 border-b">
        <div>
            <input type="checkbox" value="0.ไม่มีความต้องการ" name="problem_detail[]" id=""
            {{ in_array('0.ไม่มีความต้องการ', $problem_detail) ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="problem_detail">0.ไม่มีความต้องการ</label>
        </div>
        <div>
            <input type="checkbox" value="1.การเสริมสร้างพลังอำนาจ" name="problem_detail[]" id=""
            {{ in_array('1.การเสริมสร้างพลังอำนาจ', $problem_detail) ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="problem_detail">1.การเสริมสร้างพลังอำนาจ</label>
        </div>
        <div>
            <input type="checkbox" value="2.การฟื้นฟูสมรรถภาพทางสังคม" name="problem_detail[]" id=""
            {{ in_array('2.การฟื้นฟูสมรรถภาพทางสังคม', $problem_detail) ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="problem_detail">2.การฟื้นฟูสมรรถภาพทางสังคม</label>
        </div>
        <div>
            <input type="checkbox" value="3.การจัดการทรััพยากรทางสังคม" name="problem_detail[]" id=""
            {{ in_array('3.การจัดการทรััพยากรทางสังคม', $problem_detail) ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="problem_detail">3.การจัดการทรััพยากรทางสังคม</label>
        </div>
        <div class="mb-[2rem]">
            <input type="checkbox" value="4.การบริการทางสังคม" name="problem_detail[]" id=""
            {{ in_array('4.การบริการทางสังคม', $problem_detail) ? 'checked' : '' }}>
            <label class="text-[#525456] text-lg" for="problem_detail">4.การบริการทางสังคม</label>
        </div>
    </div>
</div>
