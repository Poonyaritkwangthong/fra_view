@extends('layouts.app')

@section('title')
    ผลคะเเนนเเละเกณต์การวัด
@endsection

@section('content')
    <div>
        <div class="bg-white p-4 rounded-xl w-[30rem] h-full mx-auto">
            <h1 class="text-4xl font-bold text-center text-[#4846aa]">ผลในการทำเเบบประเมิน</h1>
            <div class="text-lef text-xl  p-2 mx-auto ">
                <p class="text-center text-2xl mt-[1rem]">ชื่อ: {{ $informant->informant_name }}</p>
                <p class="text-center mb-2 text-2xl mt-[1rem]">คะแนนรวม: {{ $informant->total_score }}</p>
                <div class="text-2xl text-center mt-[1rem]">
                    <p>
                        @if ($informant->total_score <= 20)
                            <h1 class="text-red-700">เกณฑ์: ระดับความพร้อมน้อย</h1>
                        @elseif ($informant->total_score <= 30)
                            <h1 class="text-yellow-600">เกณฑ์: ระดับความพร้อมปลานกลาง</h1>
                        @elseif ($informant->total_score <= 40)
                            <h1 class="text-green-500">เกณฑ์: ระดับความพร้อมมาก</h1>
                        @elseif ($informant->total_score <= 47)
                            <h1 class="text-blue-600">เกณฑ์: ระดับความพร้อมมากที่สุด</h1>
                        @endif
                    </p>
                </div>

            </div>

            <div class="flex justify-center mt-[1rem]">
                <a href="{{ url('/') }}"><button
                    class="bg-[#f4f4fc] p-2 rounded-xl text-[#525456] text-lg hover:scale-105 delay-100 shadow-lg border border-[#525456]">กลับหน้าหลัก</button></a>
            </div>

        </div>

    </div>
@endsection
