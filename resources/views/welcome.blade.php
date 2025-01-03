@extends('layouts.user')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="bg-[#52b6da] w-full h-full mx-auto overflow-hidden bg-cover ">
        <div>
            <div class="text-center mt-[12rem] mb-[2rem] text-white">
                <h1 class="text-3xl mb-2 ">เว็ปไซต์นี้ทำเพื่อเก็มข้อมูลความเป็นอยู่ของผู้ป่วย</h1>
                <p class="text-2xl">เพื่อนำมาดำเนินช่วยเหลือผู้ป่วยที่ความเป็นอยู่ไม่ดี</p>
            </div>
            <div class="flex justify-center">
                <a href="{{ url('/page/evaluation_form') }}">
                    <button
                        class="text-white bg-[#00609e] hover:bg-[#0069ad] p-[1.5rem] text-2xl rounded-full w-[25rem] flex items-center gap-2 justify-center hover:-translate-y-1 hover:scale-105  duration-100 ">ทำเเบบสอบถามได้เลย!
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg></button>
                </a>
            </div>
        </div>
        <img class="w-full mt-[1rem]" src="/images/2.gif" alt="homepage">
    </div>
    <div class="w-[80rem] h-full mx-auto bg-white mb-[2rem]">
        <div class="mb-[1rem] border-b">
            {{--  <div class="flex justify-between mb-[2rem] pt-[2rem] text-lg">
                <div>
                    <h1>nes</h1>
                    <div class="grid grid-rows-4 flex-col gap-2 text-[#4298b4]">
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes001</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes002</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes003</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes004</a>
                    </div>
                </div>
                <div>
                    <h1>nes</h1>
                    <div class="grid grid-rows-4 flex-col gap-2 text-[#4298b4]">
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes001</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes002</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes003</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes004</a>
                    </div>
                </div>
                <div>
                    <h1>nes</h1>
                    <div class="grid grid-rows-4 flex-col gap-2 text-[#4298b4]">
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes001</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes002</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes003</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes004</a>
                    </div>
                </div>
                <div>
                    <h1>nes</h1>
                    <div class="grid grid-rows-4 flex-col gap-2 text-[#4298b4]">
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes001</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes002</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes003</a>
                        <a class="hover:border-b hover:border-[#4298b4]"
                            href="">nes004</a>
                    </div>
                </div>
            </div>  --}}
        </div>
        <div class="mt-[2rem]">
            <div class="flex justify-between">
                <div class="w-[45.5rem] text-[#4298b4]">
                    <li class="text-[#b5b5b5]">2024-2025 PPK </li>
                    <div>
                        <a href="">Terms & Condition</a>
                        <a href="">Privacy</a>
                    </div>
                    <p class="text-[#b5b5b5]">
                        Our content is available in multiple languages through both human and AI-assisted translation. While
                        we strive for accuracy, the English version remains the official text.
                    </p>
                </div>
                <div class="flex gap-[1rem]">
                    <a class=""
                        href=""><svg class="w-10 h-10 p-1 rounded-full text-white bg-gray-500 hover:border-2 hover:border-[#4298b4]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a class=""
                        href=""><svg class="w-10 h-10 p-1 rounded-full text-white bg-gray-500 hover:border-2 hover:border-[#4298b4]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a class="" href=""><svg
                            class="w-10 h-10 p-1 rounded-full text-white bg-gray-500 hover:border-2 hover:border-[#4298b4]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
