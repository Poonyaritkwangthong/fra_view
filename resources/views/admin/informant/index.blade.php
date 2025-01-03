@extends('layouts.admin')

@section('title')
    ตารางผู้ให้ข้อมูล
@endsection

@section('table')
    <div class="">
        <div class="mx-auto">
        </div>
        <div class="mt-4 w-[96rem] h-full border mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-[#7d8a99] text-4xl font-bold mt-2 mb-4">
                ตารางผู้ให้ข้อมูล
            </h1>
            <div class="text-[#707c8a] flex gap-4 justify-end items-center mb-4">
                {{--  <div class="">
                <br />
                <a href="{{ route('choice.create') }}">
                    <button
                        class="text-center bg-[#ffbae9] text-[#d60092] p-3 rounded-lg w-[22rem] hover:scale-105 delay-100 hover:bg-[#ffd1f1]">
                        เพิ่มตัวเลือก
                    </button>
                </a>
            </div>  --}}
            </div>
            <div class="flex justify-between border-t mb-6">
                <div class="text-[#707c8a]  mt-4">
                    <form class="flex gap-2 items-center" method="GET" action="{{ url()->current() }}">
                        <p>Show</p>
                        <select name="entries" class="border p rounded-lg" onchange="this.form.submit()">
                            <option value="10" {{ request('entries') == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ request('entries') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('entries') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ request('entries') == 100 ? 'selected' : '' }}>100</option>
                        </select>
                        <p>entries</p>
                    </form>
                </div>
                <div class="text-[#707c8a] flex gap-2 items-center mt-4">
                    <form method="GET" action="{{ url()->current() }}">
                        <label for="search">ค้นหา</label>
                        <input id="search" name="query" class="border p-1 pl-2 rounded-lg" type="text"
                            placeholder="ค้นหา" value="{{ request('query') }}" />
                        <button type="submit" class="bg-[#8fd3ff] text-[#00609e] p-1 rounded-lg">ค้นหา</button>
                    </form>
                </div>
            </div>
            <div class="mx-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-center text-[#7d8a99] text-sm border-b">
                            <th class="p-2 pb-4">หมายเลขผู้ให้ข้อมูล</th>
                            <th class="p-2 pb-4 text-left">ชื่อ นามสกุล (ผู้ให้ข้อมูล)</th>
                            <th class="p-2 pb-4">อายุ (ผู้ให้ข้อมูล)</th>
                            <th class="p-2 pb-4">เกี่ยวข้องเป็น (ผู้ป่วย)</th>
                            <th class="p-2 pb-4 text-left">ชื่อ นามสกุล (ผู้ป่วย)</th>
                            <th class="p-2 pb-4">อายุ (ผู้ป่วย)</th>
                            <th class="p-2 pb-4">HN (รหัสผู้ป่วย)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informants as $item)
                            <tr class="text-[#7d8a99] border-b text-center">
                                <td class="p-4">{{ $item->id }}</td>
                                <td class="p-4 text-left">{{ $item->informant_name }}</td>
                                <td class="p-4">{{ $item->informant_age }}</td>
                                <td class="p-4">{{ $item->related }}</td>
                                <td class="p-4 text-left">{{ $item->patient_name }}</td>
                                <td class="p-4">{{ $item->patient_age }}</td>
                                <td class="p-4">{{ $item->HN }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-between items-center mt-4">
                <p class="text-[#00609e] ml-[1rem]">
                    จำนวนข้อมูลในหน้าปัจจุบัน: {{ $informants->count() }} |
                    แสดงข้อมูลจาก: {{ $informants->firstItem() }} ถึง {{ $informants->lastItem() }} |
                    จำนวนข้อมูลทั้งหมด: {{ $informants->total() }}
                </p>

                <div class="flex gap-2 mr-[1rem]">
                    <!-- ปุ่มย้อนกลับ -->
                    @if ($informants->previousPageUrl())
                        <a href="{{ $informants->appends(['entries' => $entries])->previousPageUrl() }}"
                            class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                            ย้อนกลับ
                        </a>
                    @endif

                    <!-- ปุ่มถัดไป -->
                    @if ($informants->nextPageUrl())
                        <a href="{{ $informants->appends(['entries' => $entries])->nextPageUrl() }}"
                            class="p-2 bg-gray-100 text-gray-500 rounded-lg hover:scale-105 hover:bg-gray-200 shadow-xl">
                            ถัดไป
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
