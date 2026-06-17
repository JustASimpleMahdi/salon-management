@extends('layout.base.index')

@section('main')
    <div class="w-[393px] h-[852px] bg-[#F8F4F1] overflow-hidden flex flex-col mx-auto">
        <div class="flex flex-col px-6">
            <div class="flex flex-col w-full pt-[31px]">
                <h1 class="text-3xl font-bold text-[#2d211d] text-right mb-2">نوبت‌های من</h1>
                <p class="text-[13px] text-[#8a817c] text-right">مدیریت رزروهای شما</p>
            </div>

            <!-- Upcoming Appointment Card -->
            <div class="flex flex-col gap-4">
                @foreach($currentReservations as $reservation)
                    <div
                        class="w-[345px] mx-auto mt-[31px] rounded-[30px] bg-white border border-[#ECE3DD] flex flex-col items-center py-[20px]">
                        <!-- Gold accent line -->
                        <div class="w-[93px] h-1 bg-[#D4AF7F] rounded-full mb-[18px]"></div>
                        <!-- Service name -->
                        <p class="text-2xl font-bold text-[#2d211d] mb-[14px]">{{ $reservation->service->name }}</p>
                        <!-- Date -->
                        <p class="text-sm text-[#8a817c] mb-[11px]">{{ $reservation->appointment->date }}</p>
                        <!-- Time -->
                        <p class="text-base font-bold text-[#6d5246] mb-[11px]">{{$reservation->appointment->start->format('H:i')}}
                            تا {{$reservation->appointment->end->format('H:i')}}</p>
                        <!-- Specialist -->
                        <p class="text-sm text-[#8a817c] mb-[21px]">{{ $reservation->personnel->fullname }}</p>
                        <!-- Cancel button -->
                        <div
                            class="w-[140px] h-[38px] bg-[#EFE7E2] rounded-full flex items-center justify-center cursor-pointer">
                            <span class="text-[13px] font-bold text-[#6d5246]">لغو نوبت</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- History heading -->
            <h2 class="text-lg font-bold text-[#2d211d] text-right mt-[29px] mb-6">سوابق رزرو</h2>

            <!-- Past row 1 -->
            <div class="flex flex-col gap-4">
                @foreach($pastReservations as $reservation)
                    <div
                        class="bg-white border border-[#ECE3DD] rounded-[30px] overflow-hidden px-[24px] py-[20px]">
                        <!-- First row: service name + status dot -->
                        <div class="flex justify-between items-start">
                            <div>
                                <div class="w-[42px] h-[3px] bg-[#D4AF7F] rounded-full mb-[4px]"></div>
                                <h3 class="text-[17px] font-bold text-[#2d211d] leading-tight">{{ $reservation->service->name }}</h3>
                            </div>
                            <div class="relative w-[22px] h-[22px] rounded-full bg-[#6D5246]">
                                <div
                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[8px] h-[8px] rounded-full bg-[#D4AF7F]"></div>
                            </div>
                        </div>

                        <!-- Second row: date + specialist & time -->
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-xs text-[#8a817c] leading-tight">{{ $reservation->appointment->date }}</p>
                            <p class="text-xs text-[#8a817c] leading-tight whitespace-nowrap">{{ $reservation->personnel->fullname }}
                                - {{ $reservation->appointment->start->format('H:i') }}
                                تا {{ $reservation->appointment->end->format('H:i') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Bottom Navigation -->
        @include('layout.user.bottom-navigation')
    </div>
@endsection
