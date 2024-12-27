@php
    $riskDetails = [];
    if (is_string($general_information->assess_patient_risk->risk_detail)) {
        $decoded = json_decode($general_information->assess_patient_risk->risk_detail, true);
        $riskDetails = is_array($decoded) ? $decoded : [];
    } elseif (is_array($general_information->assess_patient_risk->risk_detail)) {
        $riskDetails = collect($general_information->assess_patient_risk->risk_detail)
            ->mapWithKeys(function ($item) {
                return [$item['risk'] => $item['detail']];
            })
            ->toArray();
    }
@endphp

<div class="mt-[2rem]">
    <label class="text-3xl text-[#4846aa]" for="">ส่วนที่ 5 การประเมินความเสี่ยงของผู้ป่วย
        สามารถระบุได้มากกว่า 1
        ประเด็นความเสี่ยง/ปัจจัยความเสี่ยง</label>
    <div class="grid grid-rows-7 grid-flow-col gap-4 mt-[1rem] pl-16">
        @foreach ($riskOptions as $key => $option)
            <div class="flex gap-4 items-center">
                <input value="{{ (string)$key }}" type="checkbox" name="risk[]" id="checkbox_{{ $key }}"
                    {{ is_array($risk) && in_array((string)$key, $risk) ? 'checked' : '' }}>
                <label for="checkbox_{{ $key }}" class="text-[#525456] text-lg">{{ $option }}</label>
                <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                    id="riskText{{ $key }}" style="display: none;" type="text" name="risk_detail[]"
                    value="{{ $riskDetails[$key] ?? '' }}">
            </div>
        @endforeach
    </div>
</div>

<script>
 console.log("Risk:", @json($risk));
console.log("Risk Detail:", @json($riskDetails));

    const risk = @json($risk); // ค่าของ risk ที่ส่งมาจาก PHP
    const riskData = @json($riskDetails || []); // ข้อมูลการเสี่ยง
    const checkboxes = document.querySelectorAll('[name="risk[]"]'); // เลือกทุก checkbox

    console.log(risk); // ตรวจสอบข้อมูล risk
    console.log(riskData); // ตรวจสอบข้อมูล riskDetails
    console.log(checkboxes); // ตรวจสอบการเลือก checkbox

    checkboxes.forEach(checkbox => {
        const riskValue = checkbox.value;
        const textField = document.getElementById("riskText" + riskValue);

        // ตรวจสอบว่าค่า risk ตรงกับ value ของ checkbox หรือไม่
        if (risk.includes(riskValue) || risk.includes(parseInt(riskValue))) {
            checkbox.checked = true;
            textField.value = riskData[riskValue] || ''; // ใช้ riskValue เพื่ออ้างถึง riskData
            textField.style.display = 'block'; // แสดง input text
        } else {
            checkbox.checked = false;
            textField.value = '';
            textField.style.display = 'none'; // ซ่อน input text
        }

        checkbox.addEventListener('change', function() {
            toggleFields6(this, textField);
        });
    });


    // ฟังก์ชัน toggleFields6
    function toggleFields6(checkbox, textField) {
        if (checkbox.checked) {
            textField.style.display = 'block'; // แสดง input text
        } else {
            textField.style.display = 'none'; // ซ่อน input text
            textField.value = ''; // ล้างข้อความใน input text
        }
    }
</script>
