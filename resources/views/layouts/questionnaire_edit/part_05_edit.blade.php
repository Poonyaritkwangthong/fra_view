@php $riskNumber = 1; @endphp
<div class="mt-[2rem]">
    <label class="text-3xl text-[#4846aa]" for="">
        ส่วนที่ 5 การประเมินความเสี่ยงของผู้ป่วย สามารถระบุได้มากกว่า 1 ประเด็นความเสี่ยง/ปัจจัยความเสี่ยง
    </label>
    <div class="grid grid-rows-7 grid-flow-col gap-4 mt-[1rem] pl-16">
        @foreach ($risk as $item)
            @php
                // ค้นหาข้อมูลความเสี่ยงใน assess_patient_risk ที่ตรงกับ general_information_id
                $existingRisk = $assess_patient_risk->firstWhere('risk_num', $item->id);
            @endphp
            <div class="flex gap-4 items-center">
                <!-- Checkbox -->
                <input type="hidden" name="risk_hidden[{{ $item->id }}]" value="0">
                <input value="{{ $item->id }}" type="checkbox" name="risk_num[{{ $item->id }}]"
                    id="checkbox_{{ $item->id }}"
                    @if ($existingRisk) checked @endif
                    onclick="toggleFields6(this, 'riskText{{ $item->id }}')">

                <!-- Label -->
                <label for="checkbox_{{ $item->id }}" class="text-[#525456] text-lg">
                    {{ $riskNumber }}. {{ $item->risk_name }}
                </label>

                <!-- Text Input -->
                <div id="riskText{{ $item->id }}" style="{{ $existingRisk ? '' : 'display: none;' }}">
                    <input class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg" type="text"
                        name="risk_detail[{{ $item->id }}]" value="{{ $existingRisk->risk_detail ?? '' }}">
                </div>

            </div>
            @php $riskNumber++; @endphp
        @endforeach
    </div>
</div>


<script>
    function toggleFields6(checkbox, textFieldId) {
        const textField = document.querySelector(`#${textFieldId}`);
        if (checkbox.checked) {
            textField.style.display = 'block'; // แสดงฟอร์มกรอกข้อมูล
        } else {
            textField.style.display = 'none'; // ซ่อนฟอร์มกรอกข้อมูล
            textField.value = ''; // ล้างค่าที่กรอกไว้
        }
    }
</script>
