@php $riskNumber = 1; @endphp
<div class="mt-[2rem]">
    <label class="text-3xl text-[#4846aa]" for="">
        ส่วนที่ 5 การประเมินความเสี่ยงของผู้ป่วย สามารถระบุได้มากกว่า 1 ประเด็นความเสี่ยง/ปัจจัยความเสี่ยง
    </label>
    <div class="grid grid-rows-7 grid-flow-col gap-4 mt-[1rem] pl-16">
        @foreach ($risk as $item)
            <div class="flex gap-4 items-center">
                <input
                    value="{{ $item->id }}"
                    onclick="toggleFields6(this, 'riskText{{ $item->id }}')"
                    type="checkbox"
                    name="risk_num[]"
                    id="checkbox_{{ $item->id }}">
                <label for="checkbox_{{ $item->id }}" class="text-[#525456] text-lg">
                    {{ $riskNumber }}. {{ $item->risk_name }}
                </label>
                <input
                    class="text-[#525456] text-lg bg-[#f4f4fc] border-[#a3a0df] p-1 rounded-lg"
                    id="riskText{{ $item->id }}"
                    style="display: none;"
                    type="text">
            </div>
            @php $riskNumber++; @endphp
        @endforeach
    </div>
</div>
<script>
    function toggleFields6(checkbox, textFieldId) {
        const textField = document.querySelector(`#${textFieldId}`);
        if (checkbox.checked) {
            textField.style.display = 'block';
            textField.setAttribute('name', 'risk_detail[]');
            if (!textField.value) {
                // หากไม่มีค่าที่โหลดมา ให้ตั้งค่าเริ่มต้น
                textField.value = '';
            }
        } else {
            textField.style.display = 'none';
            textField.value = ''; // ล้างข้อความใน input text
            textField.removeAttribute('name'); // ไม่ส่งค่าหาก checkbox ไม่ถูกเลือก
        }
    }
</script>
