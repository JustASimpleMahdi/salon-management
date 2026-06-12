@extends('layout.base.index')

@section('main')
    <div class="w-[393px] h-[852px] bg-[#F8F4F1] overflow-hidden mx-auto flex flex-col items-center">
        <!-- Top section: back button + title -->
        <div class="flex flex-row items-start w-full mt-[30px]">
            <!-- Title block (on the right) -->
            <div class="flex flex-col items-end mr-6 mt-[4px]">
                <h1 class="text-[28px] font-bold text-[#2d211d] text-right leading-tight">تایید نهایی رزرو</h1>
                <p class="text-[13px] text-[#a09086] text-right mt-[22px] leading-tight">بررسی اطلاعات نوبت</p>
            </div>

            <!-- Back button (on the left in RTL, so it's the last flex item) -->
            <a
                href="{{ route('reservation.index',['service'=> $service]) }}"
                class="flex-none w-12 h-12 mr-auto ml-[24px] rounded-full bg-[#FFFCFA] border border-[#ECE3DD] flex items-center justify-center">
                <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.25 1.25L1.25 11.25L11.25 21.25" stroke="#6D5246" stroke-width="2.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

        </div>

        <!-- Confirmation card -->
        <div
            class="w-[345px] mt-[33px] rounded-[30px] bg-white border border-[#ECE3DD] flex flex-col items-center py-[17px]">
            <!-- Checkmark circle -->
            <div class="w-14 h-14 rounded-full bg-[#6D5246] flex items-center justify-center">
                <svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 9.5L10.5 18.5L27.5 1.5" stroke="white" stroke-width="3" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <!-- Main message -->
            <p class="text-xl font-bold text-[#2d211d] mt-[13px]">نوبت شما آماده ثبت است.</p>
            <!-- Gold divider -->
            <div class="w-[81px] h-[3px] bg-[#D4AF7F] rounded-full mt-[5px]"></div>
            <!-- Motivational text -->
            <p class="text-[13px] text-[#8a817c] mt-[10px]">برای درخشیدن آماده‌ای؟ ✦</p>
        </div>

        <!-- Details card -->
        <div
            class="w-[331px] mt-[30px] rounded-[30px] bg-white border border-[#ECE3DD] p-[32px] flex flex-col gap-y-[20px]">
            <!-- Row 1: خدمت -->
            <div class="flex justify-between items-center">
                <span class="text-[15px] font-bold text-[#2d211d]">خدمت</span>
                <span class="text-[15px] font-bold text-[#6d5246]">{{ $service->name }}</span>
            </div>
            <div class="w-full h-px bg-[#F0E8E3]"></div>

            <!-- Row 2: متخصص -->
            <div class="flex justify-between items-center">
                <span class="text-[15px] font-bold text-[#2d211d]">متخصص</span>
                <span class="text-[15px] font-bold text-[#6d5246]">{{ $personnel->fullname }}</span>
            </div>
            <div class="w-full h-px bg-[#F0E8E3]"></div>

            <!-- Row 3: تاریخ -->
            <div class="flex justify-between items-center">
                <span class="text-[15px] font-bold text-[#2d211d]">تاریخ</span>
                <span class="text-[15px] font-bold text-[#6d5246]">{{ $appointment->start->format('Y/m/d') }}</span>
            </div>
            <div class="w-full h-px bg-[#F0E8E3]"></div>

            <!-- Row 4: ساعت -->
            <div class="flex justify-between items-center">
                <span class="text-[15px] font-bold text-[#2d211d]">ساعت</span>
                <span
                    class="text-[15px] font-bold text-[#6d5246]">{{ $appointment->start->format('H:i') }} تا {{ $appointment->end->format('H:i') }}</span>
            </div>
        </div>

        <!-- Confirm button -->
        <form action="{{ route('reservation.confirm',compact('personnel','service','appointment')) }}" method="post">
            @csrf
            <button
                class="w-[345px] h-[58px] mt-[54px] rounded-full bg-[#503930] flex items-center justify-center cursor-pointer">
                <span class="text-white text-[17px] font-bold">تایید و ثبت نوبت</span>
            </button>
        </form>

        <!-- Edit time link -->
        <a href="{{ route('reservation.index',['service'=> $service]) }}"
           class="text-sm text-[#8a817c] mt-[28px] mb-auto text-center">ویرایش زمان</a>
    </div>
@endsection
