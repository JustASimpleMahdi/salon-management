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
                <a
                    href="{{ route('reservation.index',['service'=>$service]) }}"
                    class="relative w-full h-[88px] rounded-[28px] bg-[#FFFCFA] border border-[#ECE3DD] flex flex-row items-center justify-between px-[31px]">
                    <!-- Right side: text content -->
                    <div class="flex flex-col">
                        <div class="w-[42px] h-[3px] bg-[#D4AF7F] rounded-full mb-[5px]"></div>
                        <h3 class="text-[17px] font-bold text-[#2D211D] leading-tight">{{ $service->name }}</h3>
                        <p class="text-[12px] text-[#A09086] leading-tight mt-[1px]">{{ $service->description }}</p>
                    </div>
                    <!-- Left side: number -->
                    <div class="text-[22px] font-bold text-[#3A2A24]">{{ $service->reservations_count }}</div>
                </a>
            @endforeach
        </div>

        <!-- ========== BOTTOM NAVIGATION ========== -->
        <!-- Pushed to bottom with mt-auto to occupy remaining space -->
        @include('layout.user.bottom-navigation')
    </div>
@endsection
