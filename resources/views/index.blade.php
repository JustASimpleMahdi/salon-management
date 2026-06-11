@extends('layout.base.index')

@section('main')
    <div class="w-[393px] h-[852px] relative bg-[#F8F4F1] overflow-hidden mx-auto flex flex-col">
        <!-- Decorative background circle - kept absolute as it's a background element spanning multiple sections -->
        <div
            class="absolute -left-[119px] top-[589px] w-[280px] h-[280px] rounded-full bg-[#D4AF7F]/5 pointer-events-none"></div>

        <!-- ========== GREETING SECTION ========== -->
        <div class="flex flex-col shrink-0 pt-[56px] pr-[30px] pl-[24px]">
            <h1 class="text-[28px] font-bold text-[#2D211D] leading-tight">
                سلام الهام
            </h1>
            <p class="text-[12px] text-[#8D7366] mt-[5px] leading-tight">
                امروز برای درخشیدن آماده‌ای؟
            </p>
        </div>

        <!-- ========== ACTIVE TURN CARD ========== -->
        <div class="relative shrink-0 mx-[24px] mt-[33px] w-[345px] h-[160px] rounded-[34px] overflow-hidden">
            <!-- Card background -->
            <div class="absolute inset-0 bg-gradient-to-br from-[#7A5A4C] via-[#5C4237] to-[#2D211D]"></div>
            <!-- Card border -->
            <div class="absolute inset-0 rounded-[34px] border border-[#D4AF7F]/20"></div>
            <!-- Decorative circle -->
            <div
                class="absolute right-[-30px] top-[-20px] w-[200px] h-[90px] bg-white/5 rounded-full rotate-[-15deg]"></div>
            <!-- Large number -->

            <!-- Bottom labels row -->
            <div class="absolute left-[60px] right-[40px] top-[50px] flex flex-row justify-between items-end">
                <span class="text-[#F7F2EE] text-[15px] ">

                    امروز</span>
                <span class="text-[#F4E8DE] text-[15px] flex flex-col items-center">
                    <div class="text-white text-[54px] font-bold leading-none ">
                {{ fa_digits($todayAppointmentsCount) }}
            </div>
                    نوبت فعال

                </span>
            </div>
            <!-- Divider -->
            <div
                class="absolute left-[27px] right-[27px] bottom-[28px] h-px bg-gradient-to-r from-transparent via-[#D4AF7F]/50 to-transparent"></div>
        </div>

        <!-- ========== SERVICES HEADING ========== -->
        <h2 class="shrink-0 mr-[29px] mt-[36px] text-[22px] font-bold text-[#2D211D] leading-tight">
            خدمات محبوب
        </h2>

        <!-- ========== SERVICE CARDS ========== -->
        <div class="flex flex-col shrink-0 mx-[24px] mt-[28px] gap-y-[13px]">
            <!-- Service Card 1: Eyebrows -->
            @foreach($popularServices as $service)
                <div
                    class="relative w-full h-[88px] rounded-[28px] bg-[#FFFCFA] border border-[#ECE3DD] flex flex-row items-center justify-between px-[31px]">
                    <!-- Right side: text content -->
                    <div class="flex flex-col">
                        <div class="w-[42px] h-[3px] bg-[#D4AF7F] rounded-full mb-[5px]"></div>
                        <h3 class="text-[17px] font-bold text-[#2D211D] leading-tight">{{ $service->name }}</h3>
                        <p class="text-[12px] text-[#A09086] leading-tight mt-[1px]">{{ $service->description }}</p>
                    </div>
                    <!-- Left side: number -->
                    <div class="text-[22px] font-bold text-[#3A2A24]">17</div>
                </div>
            @endforeach
        </div>

        <!-- ========== BOTTOM NAVIGATION ========== -->
        <!-- Pushed to bottom with mt-auto to occupy remaining space -->
        <div class="relative shrink-0 w-full h-[130px] overflow-hidden mt-auto">
            <!-- Nav background bar -->
            <div class="absolute left-0 top-[48px] w-full h-[82px] bg-[#FFFCFA] border-t border-[#E8DFD8]"></div>

            <!-- Protruding center button group -->
            <!-- Outer circle -->
            <div
                class="absolute left-1/2 top-[18px] w-[84px] h-[84px] rounded-full bg-black/[0.07] -translate-x-1/2"></div>
            <!-- Main circle -->
            <div
                class="absolute left-1/2 top-[24px] w-[72px] h-[72px] rounded-full bg-[#503930] -translate-x-1/2"></div>
            <!-- Gold ring -->
            <div
                class="absolute left-1/2 top-[26px] w-[72px] h-[72px] rounded-full border border-[#D4AF7F]/45 -translate-x-1/2"></div>
            <!-- Plus vertical -->
            <div class="absolute left-1/2 top-[47px] w-[4px] h-[30px] bg-white rounded-full -translate-x-1/2"></div>
            <!-- Plus horizontal -->
            <div class="absolute left-1/2 top-[60px] w-[30px] h-[4px] bg-white rounded-full -translate-x-1/2"></div>

            <!-- Nav items row using flex for even distribution -->
            <div
                class="absolute left-0 top-[48px] w-full h-[82px] flex flex-row-reverse items-center justify-around px-[20px]">
                <!-- Home -->
                <a href="{{ route('index') }}" class="flex flex-col items-center gap-y-[6px] mt-[6px]">
                    <div class="relative w-[20px] h-[23px]">
                        <svg class="w-full h-full" width="20" height="23" viewBox="0 0 20 23" fill="none">
                            <path d="M1 9L10 1L19 9V22H1V9Z" stroke="#6D5246" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                        <svg class="absolute left-1/2 -translate-x-1/2 bottom-[3px]" width="10" height="9"
                             viewBox="0 0 10 9" fill="none">
                            <path d="M1 9V1H9V9" stroke="#6D5246" stroke-width="2"/>
                        </svg>
                    </div>
                    <span class="text-[#6D5246] text-[11px] font-bold">خانه</span>
                </a>

                <!-- Services -->
                <div class="flex flex-col items-center gap-y-[6px] mt-[3px]">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 1L14 8L21 11L14 14L11 21L8 14L1 11L8 8L11 1Z" stroke="#8D7366" stroke-width="2"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="text-[#8D7366] text-[11px]">خدمات</span>
                </div>

                <!-- Center spacer for the protruding button -->
                <div class="w-[50px]"></div>

                <!-- Appointments -->
                <div class="flex flex-col items-center gap-y-[6px] mt-[2px]">
                    <div class="relative w-[20px] h-[20px]">
                        <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 4H4C2.34315 4 1 5.34315 1 7V19C1 20.6569 2.34315 22 4 22H16C17.6569 22 19 20.6569 19 19V7C19 5.34315 17.6569 4 16 4Z"
                                stroke="#8D7366" stroke-width="2"/>
                            <path d="M1 10H19" stroke="#8D7366" stroke-width="2"/>
                            <path d="M6 0V6" stroke="#8D7366" stroke-width="2"/>
                            <path d="M14 0V6" stroke="#8D7366" stroke-width="2"/>
                        </svg>
                    </div>
                    <span class="text-[#8D7366] text-[11px]">نوبت‌ها</span>
                </div>

                <!-- Profile -->
                <div class="flex flex-col items-center gap-y-[6px] mt-[0px]">
                    <div class="relative w-[22px] h-[26px]">
                        <svg class="absolute left-0 top-0" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path
                                d="M7 13C10.3137 13 13 10.3137 13 7C13 3.68629 10.3137 1 7 1C3.68629 1 1 3.68629 1 7C1 10.3137 3.68629 13 7 13Z"
                                stroke="#8D7366" stroke-width="2"/>
                        </svg>
                        <svg class="absolute left-[-4px] bottom-0" width="22" height="12" viewBox="0 0 22 12"
                             fill="none">
                            <path d="M1 11C1 4 5 1 11 1C17 1 21 4 21 11" stroke="#8D7366" stroke-width="2"
                                  stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="text-[#8D7366] text-[11px]">پروفایل</span>
                </div>
            </div>

            <!-- Reserve label under center button -->
            <span
                class="absolute left-1/2 top-[103px] text-[#6D5246] text-[11px] font-bold -translate-x-1/2">رزرو</span>
        </div>
    </div>
@endsection
