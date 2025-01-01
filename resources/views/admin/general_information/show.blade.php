@extends('layouts.app02')

@section('title')
    show page
@endsection

@section('content')
    <div class="mt-[4rem] mb-[4rem] text-center text-3xl">
        <h1>เครื่องมือประเมิน วินิจฉัย เเละจัดการทางสังคม</h1>
        <h2>(Social Diagnosis and Management Assessment) ตัวย่อ S.D.M.A</h2>
    </div>
    <div class="w-[90rem] h-full p-[2rem] border mx-auto rounded-xl shadow-2xl mb-[4rem] text-[#525456]">
        <div class="flex items-center gap-2 text-3xl ml-[4rem] mt-[2rem]">
            <h1 class="font-bold text-black">หมายเลข :</h1>
            <p>{{ $general_information->id }}</p>
        </div>
        <div class="flex justify-between items-center mt-[1rem]">
            <div class="flex items-center gap-2 text-xl ml-[4rem]">
                <h1 class="text-black font-bold">วันที่รับเคส</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg ">{{ $general_information->case_date }}</p>
            </div>
            <div class="flex items-center gap-2 text-xl ml-[4rem] mr-[4rem]">
                <h1 class="text-black font-bold">กลุ่มเป้าหมาย</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg ">{{ $general_information->target_group }}</p>
            </div>
        </div>

        <div class="pt-4 pb-4 mt-[2rem]">
            <div class="flex justify-between gap-2 items-center text-xl">
                <div class=" ml-[4rem]">
                    <h1 class="font-bold text-black">ชื่อ-สกุล</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                        {{ $general_information->prefix }}{{ $general_information->full_name }}</p>
                </div>
                <div class="">
                    <h1 class=" font-bold text-black">หมายเลข HN</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                        {{ $general_information->hn }}</p>
                </div>
                <div class="">
                    <h1 class=" font-bold text-black">หมายเลข AN</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                        {{ $general_information->an }}</p>
                </div>
                <div class=" mr-[4rem]">
                    <h1 class=" font-bold text-black">หมายเลข SN</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                        {{ $general_information->sn }}</p>
                </div>
            </div>
            <div class="flex justify-between items-center gap-2 mt-[1rem] text-xl mr-[4rem]">
                <div class=" ml-[4rem]">
                    <h1 class=" font-bold text-black">เกิดวันที่</h1>
                    <p class="pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[14.5rem]">
                        {{ $general_information->birth_date }}</p>
                </div>
                <div class="">
                    <h1 class="font-bold text-black">อายุ</h1>
                    <div class="flex items-center bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[8rem]">
                        <p class="pl-[1rem] pr-[1rem]">{{ $general_information->age }}</p>
                        <p>ปี</p>
                    </div>
                </div>
                <div class="">
                    <h1 class=" font-bold text-black">สิทธิการรักษา</h1>
                    <p class="pl-[1rem] pr-[1rem]  bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[33rem]">
                        {{ $general_information->healthcare_rights }}</p>
                </div>
                <div class="">
                    <h1 class=" font-bold text-black">เบอร์โทรศัพท์</h1>
                    <p class="pl-[1rem] pr-[1rem]  bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[15rem]">
                        {{ $general_information->phone_num }}
                    </p>
                </div>
            </div>
            <div class="flex justify-between items-center gap-2 mt-[1rem] text-xl  ml-[4rem]  mr-[4rem]">
                <div class="">
                    <h1 class="font-bold text-black">หมายเลขบัตรประชาชน</h1>
                    <p class="pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[25rem]">
                        {{ $general_information->id_card_num }}</p>
                </div>
                <div class="">
                    <h1 class="font-bold text-black">สัญชาติ</h1>
                    <p class="  pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[15rem]">
                        {{ $general_information->nationality }}</p>
                </div>
                <div class="">
                    <h1 class="font-bold  text-black">เชื้อชาติ</h1>
                    <p class="  pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[15rem]">
                        {{ $general_information->ethnicity }}
                    </p>
                </div>
                <div class="">
                    <h1 class="font-bold  text-black">ศาสนา</h1>
                    <p class="  pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[15rem]">
                        {{ $general_information->religion }}
                    </p>
                </div>
            </div>
            <div class="flex gap-2 justify-between items-center mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
                <div class="">
                    <h1 class="font-bold  text-black">การศึกษา</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg pl-[1rem] pr-[1rem] w-[15rem]">
                        {{ $general_information->education }}
                    </p>
                </div>
                <div class="">
                    <h1 class="font-bold  text-black">อาชีพ</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg pl-[1rem] pr-[1rem] w-[43rem]">
                        {{ $general_information->occupation }}
                    </p>
                </div>
                <div class="">
                    <h1 class="font-bold text-black">สถานภาพสมรส</h1>
                    <p class="pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[15rem]">
                        {{ $general_information->marital_status }}</p>
                </div>
            </div>
            <div class="flex  items-center mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
                <div class="">
                    <h1 class="font-bold text-black">ที่อยู่ปัจจุบัน/ที่ติดต่อได้</h1>
                    <p class="pl-[1rem] pr-[1rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg p-2 w-[78rem]">
                        {{ $general_information->current_address }}</p>
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center gap-2 text-xl mt-[2rem] ml-[4rem] mr-[4rem]">
            <div class="">
                <h1 class="font-bold text-black">การรับเรื่อง</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->receive }}</p>
            </div>
            @if ($general_information->finding_facts->receive == 'หน่วยงานภายใน')
                <div class="flex items-center gap-2">
                    <div class="">
                        <h1 class="font-bold  text-black">แผนก</h1>
                        <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                            {{ $general_information->finding_facts->receive_detail }}</p>
                    </div>

                    <div class="">
                        <h1 class="font-bold text-black">Admit วันที่</h1>
                        <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[10rem] pl-[1rem] pr-[1rem] ">
                            {{ $general_information->finding_facts->admit_date }}</p>
                    </div>
                </div>
            @elseif($general_information->finding_facts->receive == 'หน่วยงานภายนอก')
                <div class="">
                    <h1 class="font-bold text-black">แผนก</h1>
                    <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                        {{ $general_information->finding_facts->receive_detail }}</p>
                </div>
            @endif
            <div class="">
                <h1 class="font-bold text-black">กลุ่มเป้าหมาย/ประเภทผู้ใช้บริการ</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[20rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->facts_target_group }}</p>
            </div>
            <div class="">
                <h1 class="font-bold  text-black">ระบุ</h1>
                <p
                    class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1re pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->facts_target_group_detail }}</p>
            </div>
        </div>
        <div class="flex justify-between items-center gap-2 mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
            <div class="">
                <h1 class="font-bold text-black">ค่ารักษาพยาบาล</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->medical_expenses }}</p>
            </div>
            <div class="">
                <h1 class="font-bold text-black">ชำระเงินได้</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->can_pay }}</p>
            </div>
            <div class="">
                <h1 class="font-bold text-black">อนุเคราะห์/ช่วยเหลือ</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->helping_pay }}</p>
            </div>
        </div>
        <div class="flex justify-between items-center mt-[1rem] text-xl ml-[4rem] mr-[4rem] ">
            <div class="">
                <h1 class=" font-bold  text-black">ผู้ให้ข้อมูล</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->informant }}</p>
            </div>
            <div class="">
                <h1 class=" font-bold  text-black">ชื่อ</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->other_name }}</p>
            </div>
            <div class="">
                <h1 class=" font-bold text-black">เกี่ยวข้องเป็น</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[25rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->relation }}</p>
            </div>
        </div>
        <div class="flex justify-between items-center mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
            <div class="">
                <h1 class=" font-bold  text-black">ที่อยู่ผู้ให้ข้อมูล/ที่ติดต่อได้</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[60rem]  pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->address_informant }}</p>
            </div>
            <div class="">
                <h1 class=" font-bold  text-black">เบอร์โทรศัพท์ผู้ให้ข้อมูล</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem] ">
                    {{ $general_information->finding_facts->informant_phone_num }}
                </p>
            </div>
        </div>
        <div class="flex justify-between items-center mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
            <div class="">
                <h1 class="font-bold  text-black">รายได้เฉลี่ยต่อเดือน</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem]  pl-[1rem] pr-[1rem]">
                    {{ $general_information->finding_facts->income }}</p>
            </div>
            <div class="">
                <h1 class="font-bold  text-black">เเหล่งที่มาของรายได้</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[10rem]  pl-[1rem] pr-[1rem]">
                    {{ $general_information->finding_facts->source_of_income }}</p>
            </div>
            <div class="">
                <h1 class="font-bold  text-black">ระบุ</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[10rem]  pl-[1rem] pr-[1rem]">
                    {{ $general_information->finding_facts->source_of_income_detail }}</p>
            </div>
            <div class="">
                <h1 class=" font-bold text-black">การมีหนี้สิน</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[10rem]  pl-[1rem] pr-[1rem]">
                    {{ $general_information->finding_facts->having_debt }}</p>
            </div>
            <div class="">
                <h1 class=" font-bold text-black">จำนวน</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[15rem] pl-[1rem] pr-[1rem]">
                    {{ $general_information->finding_facts->total_debt }}</p>
            </div>
            <div class="">
                <h1 class=" font-bold text-black">เเหล่งหนี้สิน</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg w-[10rem]  pl-[1rem] pr-[1rem]">
                    {{ $general_information->finding_facts->source_of_debt }}</p>
            </div>
        </div>
        <div class="flex  items-center mt-[1rem] ml-[4rem] mr-[4rem] text-xl">
            <div class="">
                <h1 class="font-bold text-black">การประเมินวินิจฉัยทางปัญหาสังคม</h1>
                <div
                    class="bg-[#f4f4fc] border border-[#a3a0df] p-[1rem] rounded-lg mt-[1rem] w-[78rem] grid grid-rows-4 grid-flow-col gap-2">
                    @foreach (json_decode($general_information->social_informations->social_information, true) as $index => $social_information)
                        <p>{{ $social_information }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex  items-center mt-[1rem] text-xl">
            <div class="ml-[4rem]">
                <h1 class=" font-bold  text-black">สภาพปัญหาที่พบเเละบันทึกเพิ่มเติม</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg mt-[1rem] w-[78rem] pl-[1rem] pr-[1rem]">
                    {{ $general_information->social_informations->conditions_of_problems_found }}</p>
            </div>
        </div>
        <div class="flex  items-center mt-[1rem] text-xl">
            <div class="ml-[4rem]">
                <h1 class=" font-bold text-black">การวางเเผนช่วยเหลือ ระยะสั้น/ระยะยาว</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg mt-[1rem] w-[78rem] pl-[1rem] pr-[1rem]">
                    {{ $general_information->social_informations->help_planning }}
                </p>
            </div>
        </div>
        <div class="flex justify-between mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
            <div class="">
                <h1 class="font-bold text-black"> การช่วยเหลือตามสภาพปัญหาเเละความต้องการของผู้ป่วย</h1>
                <div class="bg-[#f4f4fc] border border-[#a3a0df] p-[1rem] rounded-lg mt-[1rem] w-[37rem] h-[17.5rem]">
                    @foreach (json_decode($general_information->problem->problem_detail, true) as $index => $problem_detail)
                        <p class="">{{ $problem_detail }}</p>
                    @endforeach
                </div>
            </div>

            <div class="">
                <h1 class="font-bold text-black">การประเมินความเสี่ยงของผู้ป่วย</h1>
                <div
                    class="bg-[#f4f4fc] border border-[#a3a0df] p-[1rem] rounded-lg mt-[1rem] w-[37rem]  grid grid-rows-7 grid-flow-col gap-2">
                    @if ($assess_patient_risk->isNotEmpty())
                    @foreach ($assess_patient_risk as $item)
                        <p>ความเสี่ยง: {{ $item->risk->risk_name }} - {{ $item->risk_detail }}</p>
                    @endforeach
                @else
                    <p>ไม่มีข้อมูลความเสี่ยง</p>
                @endif
                </div>
            </div>

        </div>
        <div class="mt-[1rem] ml-[4rem] mr-[4rem] ">
            <div class="text-xl">
                <h1 class=" font-bold text-black">เเหล่งสนับสนุนทางสังคมของผู้ป่วย/ครอบครัว</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg mt-[1rem] w-[78rem] pl-[1rem] pr-[1rem]">
                    {{ $general_information->social_support->social_detail }}</p>
            </div>
        </div>
        <div class="mt-[1rem] ml-[4rem] mr-[4rem]">
            <div class="text-xl">
                <h1 class=" font-bold text-black">การติดตามเเละประเมินผล</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg mt-[1rem] w-[78rem] pl-[1rem] pr-[1rem]">
                    {{ $general_information->monitor_and_evaluate->monitor_and_evaluate_detail }}</p>
            </div>
        </div>
        <div class="flex justify-between items-center mt-[1rem] text-xl ml-[4rem] mr-[4rem]">
            <div class="">
                <h1 class="font-bold text-black">ยุติการให้บริการ เพราะ</h1>
                <p class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg pl-[1rem] pr-[1rem] w-[60rem]">
                    {{ $general_information->termination_of_service->cause }} @if ($general_information->termination_of_service->cause_detail == true)
                        ชื่อหน่วยงาน {{ $general_information->termination_of_service->cause_detail }}
                    @endif
                </p>
            </div>
            <div class="">
                <h1 class="font-bold text-black">การประเมินครอบครัว</h1>
                <div
                    class="bg-[#f4f4fc] border border-[#a3a0df] p-2 rounded-lg pl-[1rem] pr-[1rem] flex items-center gap-2 w-[15rem]">
                    <p>
                        {{ $general_information->family_assessments->result }}</p>
                    <p>{{ $general_information->family_assessments->total_score }}
                        คะเเนน</p>
                </div>
            </div>
        </div>
        <h1 class="text-center mt-[2rem] text-3xl">ผังครอบครัว/เเผนที่บ้าน</h1>
        <div
            class="mt-[1rem] flex justify-between text-xl p-[2rem] bg-[#f4f4fc] border border-[#a3a0df] rounded-lg ml-[4rem] mr-[4rem]">
            <div class="pl-[2rem]">
                <h1 class="font-bold text-center text-black">รูปผังครอบครัว</h1>
                <img class="w-[30rem] border-2 border-black mt-[1rem]"
                    src="{{ $general_information->family_tree_and_house_map->family_tree }}" alt="">
            </div>
            <div class="pr-[2rem]">
                <h1 class="font-bold text-center text-black">รูปเเผนที่บ้าน</h1>
                <img class="w-[30rem] border-2 border-black mt-[1rem]"
                    src="{{ $general_information->family_tree_and_house_map->house_map }}" alt="">
            </div>
        </div>
        <a class="flex justify-center mt-[1rem] ml-[4rem] mr-[4rem]" href="{{ url('/admin/general_information') }}">
            <div
                class="bg-[#8fd3ff] w-[20rem] text-[#00609e] rounded-lg hover:bg-[#b8e3ff] p-4 text-xl flex justify-center gap-1 ">
                <button class="flex items-center gap-1">
                    <svg class="w-8 h-8  text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    กลับ</button>
            </div>
        </a>
    </div>
@endsection
