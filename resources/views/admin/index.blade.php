@extends('layouts.admin')

@section('title')
    Admin index Page
@endsection

@section('content')
    <div class="bg-white p-[2rem] rounded-xl border shadow-lg mb-[2rem]">
        <div class="flex justify-center gap-[4rem]">
            <div class="w-[22rem] h-[13rem] border p-[1rem] rounded-xl shadow-xl">
                <div class="flex items-center">
                    <img class="w-[10rem] h-[10rem]" src="https://cdn-icons-png.flaticon.com/512/5580/5580956.png"
                        alt="">
                    <div class="w-full">
                        <h1 class="text-lg text-gray-600 font-bold">จำนวนผู้ทำเเบบสอบถามทั้งหมด</h1><br>
                        <p class="ml-[3rem] text-3xl text-gray-600">{{ $total_informant }}</p>
                    </div>
                </div>
            </div>
            <div class="w-[22rem] h-[13rem] border p-[1rem] rounded-xl shadow-xl">
                <div class="flex justify-center items-center gap-2 ">
                    <div>
                        <svg class="w-[10rem] h-[10rem] text-gray-600 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="w-full">
                        <h1 class="text-xl text-gray-600 font-bold">คะเเนนเฉลี่ย</h1>
                        <p class="text-3xl text-gray-600">{{ number_format($average_scores, 2) }}</p>
                    </div>
                </div>
            </div>
            <div class="w-[22rem] h-[13rem] border p-[1rem] rounded-xl shadow-xl flex justify-center items-center gap-2">
                <div>
                    <svg class="w-[7rem] h-[7rem] text-gray-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                    </svg>
                </div>
                <div class="w-full">
                    <h1 class="text-lg text-center text-gray-600 font-bold">เกณฑ์เฉลี่ย</h1>
                    @if ($average_scores === 0)
                        <p class=" text-lg text-[#707c8a]">ยังไม่มีการทำเเบบประเมิน</p>
                    @elseif($average_scores <= 20)
                        <p class=" text-lg text-[#ff387a]">ระดับความพร้อมน้อย</p>
                    @elseif ($average_scores <= 30)
                        <p class=" text-lg text-[#fcba03]">ระดับความพร้อมปลานกลาง</p>
                    @elseif ($average_scores <= 40)
                        <p class=" text-lg text-[#38ff6d]">ระดับความพร้อมมาก</p>
                    @elseif ($average_scores <= 47)
                        <p class=" text-lg text-[#38b6ff]">ระดับความพร้อมมากที่สุด</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-[1rem]">
        <div class="bg-white w-[50rem] p-[2rem] border rounded-xl shadow-lg">
            <div>
                <h1 class="text-center mb-[2rem] text-2xl">จำนวนคะเเนนผู้ทำเเบบประเมินครอบครัวต่อเดือน</h1>
                <div class="w-[40rem] mx-auto">
                    @include('layouts.chart_bar_informant')
                </div>
            </div>
        </div>
        <div class="bg-white w-[50rem] p-[2rem] border rounded-xl shadow-lg">
            <div>
                <h1 class="text-center mb-[2rem] text-2xl">จำนวนการขอความอนุเคราะต่อเดือน</h1>
                <div class="w-[40rem] mx-auto">
                    @include('layouts.chart_bar_general_information')
                </div>
            </div>
        </div>
    </div>
@endsection
