@extends('layout.base.index')
@section('main')
    <div class="w-[393px] h-[852px] relative bg-[#f8f4f1] overflow-hidden">
        <!-- Header -->
        <div
            class="absolute right-[20px] top-[41px] text-right text-[#2d211d] text-[28px] font-bold font-['Vazirmatn']"
        >
            سلام {{ auth()->user()->firstname }}
        </div>
        <div
            class="absolute right-[20px] top-[85px] text-right text-[#8d7366] text-[13px] font-bold font-['Vazirmatn']"
        >
            •هر نگاه، روایتگر زیبایی شماست.
        </div>

        <!-- Card -->
        <div
            class="absolute left-[24px] top-[120px] w-[345px] h-[190px] bg-gradient-to-br from-[#7b5b4c] via-[#5a4036] to-[#2f211c] rounded-[34px] p-5 overflow-hidden"
        >
            <!-- محو شدن اشکال -->
            <div
                class="absolute w-[200px] h-[200px] bg-white/10 rounded-full -top-10 -left-16"
            ></div>
            <div
                class="absolute w-[150px] h-[150px] bg-white/5 rounded-full -bottom-8 -right-12"
            ></div>

            <div class="absolute right-[20px] top-[10px] text-[#d9b99b] text-[13px]">
                امروز
            </div>
            <div
                class="absolute left-[20px] top-[50px] text-white text-[56px] font-bold font-['Vazirmatn']"
            >
                17
            </div>
            <div
                class="absolute left-[20px] top-[120px] text-white text-lg font-bold font-['Vazirmatn']"
            >
                نوبت فعال
            </div>
            <div class="absolute left-0 bottom-5 w-full h-[1px] bg-white/50"></div>
        </div>

        <!-- Management Section -->
        <div
            class="absolute right-[20px] top-[350px] text-[#2d211d] text-lg font-bold font-['Vazirmatn']"
        >
            مدیریت
        </div>
        <div
            class="absolute right-[20px] top-[380px] grid grid-cols-2 gap-x-4 gap-y-4 w-[353px]"
        >
            <!-- خدمات -->
            <a href="{{ route('manager.services.index') }}"
                class="flex flex-col items-center justify-center bg-white rounded-[28px] h-[120px]"
            >
                <div
                    class="w-[56px] h-[56px] bg-gray-100 rounded-full flex items-center justify-center"
                >
                    <svg width="24" height="24" fill="currentColor">
                        <path
                            d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"
                        />
                        <circle cx="12" cy="12" r="2.5"/>
                    </svg>
                </div>
                <span class="mt-2 text-sm font-bold">خدمات</span>
            </a>
            <!-- پرسنل -->
            <a href="{{ route('manager.personnels.index') }}"
                class="flex flex-col items-center justify-center bg-white rounded-[28px] h-[120px]"
            >
                <div
                    class="w-[56px] h-[56px] bg-gray-100 rounded-full flex items-center justify-center"
                >
                    <svg width="24" height="24" fill="currentColor">
                        <path
                            d="M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.01 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"
                        />
                    </svg>
                </div>
                <span class="mt-2 text-sm font-bold">پرسنل</span>
            </a>
            <!-- نوبت -->
            <div
                class="flex flex-col items-center justify-center bg-white rounded-[28px] h-[120px] col-span-2 self-center"
            >
                <div
                    class="w-[56px] h-[56px] bg-gray-100 rounded-full flex items-center justify-center"
                >
                    <svg width="24" height="24" fill="currentColor">
                        <path
                            d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"
                        />
                    </svg>
                </div>
                <span class="mt-2 text-sm font-bold">نوبت</span>
            </div>
        </div>

        <!-- Bottom Navigation -->
        @include('layout.base.footer')
    </div>
@endsection
