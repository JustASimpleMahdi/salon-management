<div class="relative shrink-0 w-full h-[130px] overflow-hidden mt-auto">
    <!-- Nav background bar -->
    <div class="absolute left-0 top-[48px] w-full h-[82px] bg-[#FFFCFA] border-t border-[#E8DFD8]"></div>

    <!-- Protruding center button group -->
    <a href="{{ route('reservation.services') }}"
       class="absolute left-1/2 -translate-x-1/2  top-[18px] block w-[84px] h-[84px] focus:outline-none">

        <!-- Outer circle -->
        <div class="w-[84px] h-[84px] rounded-full bg-black/7"></div>

        <!-- Main circle -->
        <div
            class="absolute left-1/2 top-[6px] w-[72px] h-[72px] rounded-full bg-[#503930] -translate-x-1/2 transition-colors duration-200 group-hover:bg-[#6b4f45]"></div>

        <!-- Gold ring -->
        <div
            class="absolute left-1/2 top-[8px] w-[72px] h-[72px] rounded-full border border-[#D4AF7F]/45 -translate-x-1/2 pointer-events-none"></div>

        <!-- Plus vertical -->
        <div class="absolute left-1/2 top-[29px] w-[4px] h-[30px] bg-white rounded-full -translate-x-1/2"></div>

        <!-- Plus horizontal -->
        <div class="absolute left-1/2 top-[42px] w-[30px] h-[4px] bg-white rounded-full -translate-x-1/2"></div>
    </a>

    <!-- Nav items row using flex for even distribution -->
    <div
        class="absolute left-0 top-[48px] w-full h-[82px] flex flex-row-reverse items-center justify-around px-[20px]">
        <!-- Home -->
        <a href="{{ route('index') }}" @class(["flex flex-col items-center gap-y-[6px] mt-[6px]",
'text-[#6D5246]' => request()->routeIs('index'),
'text-[#8D7366]'=>!request()->routeIs('index')])>
            <div class="relative w-[20px] h-[23px]">
                <svg class="w-full h-full" width="20" height="23" viewBox="0 0 20 23" fill="none">
                    <path d="M1 9L10 1L19 9V22H1V9Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                </svg>
                <svg class="absolute left-1/2 -translate-x-1/2 bottom-[3px]" width="10" height="9"
                     viewBox="0 0 10 9" fill="none">
                    <path d="M1 9V1H9V9" stroke="currentColor" stroke-width="2"/>
                </svg>
            </div>
            <span class="text-[11px] font-bold">خانه</span>
        </a>

        <!-- Services -->
        <a href="{{ route('reservation.services') }}" @class(["flex flex-col items-center gap-y-[6px] mt-[6px]",
'text-[#6D5246]' => request()->routeIs('reservation.services'),
'text-[#8D7366]'=>!request()->routeIs('reservation.services')])>
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                <path d="M11 1L14 8L21 11L14 14L11 21L8 14L1 11L8 8L11 1Z" stroke="currentColor" stroke-width="2"
                      stroke-linejoin="round"/>
            </svg>
            <span class="text-[11px]">خدمات</span>
        </a>

        <!-- Center spacer for the protruding button -->
        <div class="w-[50px]"></div>

        <!-- Appointments -->
        <a href="{{ route('appointments.index') }}" @class(["flex flex-col items-center gap-y-[6px] mt-[6px]",
'text-[#6D5246]' => request()->routeIs('appointments.index'),
'text-[#8D7366]'=>!request()->routeIs('appointments.index')])>
            <div class="relative w-[20px] h-[20px]">
                <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 4H4C2.34315 4 1 5.34315 1 7V19C1 20.6569 2.34315 22 4 22H16C17.6569 22 19 20.6569 19 19V7C19 5.34315 17.6569 4 16 4Z"
                        stroke="currentColor" stroke-width="2"/>
                    <path d="M1 10H19" stroke="currentColor" stroke-width="2"/>
                    <path d="M6 0V6" stroke="currentColor" stroke-width="2"/>
                    <path d="M14 0V6" stroke="currentColor" stroke-width="2"/>
                </svg>
            </div>
            <span class="text-[11px]">نوبت‌ها</span>
        </a>

        <!-- Profile -->
        <a href="{{ route('profile.index') }}" @class(["flex flex-col items-center gap-y-[6px] mt-[6px]",
'text-[#6D5246]' => request()->routeIs('index'),
'text-[#8D7366]'=>!request()->routeIs('index')])>
            <div class="relative w-[22px] h-[26px]">
                <svg class="absolute left-0 top-0" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path
                        d="M7 13C10.3137 13 13 10.3137 13 7C13 3.68629 10.3137 1 7 1C3.68629 1 1 3.68629 1 7C1 10.3137 3.68629 13 7 13Z"
                        stroke="currentColor" stroke-width="2"/>
                </svg>
                <svg class="absolute left-[-4px] bottom-0" width="22" height="12" viewBox="0 0 22 12"
                     fill="none">
                    <path d="M1 11C1 4 5 1 11 1C17 1 21 4 21 11" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </div>
            <span class="text-[11px]">پروفایل</span>
        </a>
    </div>

    <!-- Reserve label under center button -->
    <span
        class="absolute left-1/2 top-[103px] text-[#6D5246] text-[11px] font-bold -translate-x-1/2">رزرو</span>
</div>
