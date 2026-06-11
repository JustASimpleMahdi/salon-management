@extends('layout.base.index')
@section('main')
    <form action="{{ route('signin-submit') }}" method="post"
          class="w-[393px] min-h-[852px] relative bg-[#fffaf8] flex-col flex items-center p-4">
        @csrf

        <!-- لوگو -->
        <div class="w-[159px] h-[154px] relative overflow-hidden mb-9">
            <div class="w-[159px] h-[154px] left-0 top-0 absolute bg-[#523d35] rounded-full"></div>
            <div
                class="w-[139px] h-[134px] left-[10px] top-[10px] absolute bg-black/0 rounded-full outline outline-2 outline-offset-[-1px] outline-[#d4af7f]"></div>

            <div data-svg-wrapper class="left-[50px] top-[25px] absolute">
                <svg width="64" height="23" viewBox="0 0 64 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.00024 20.75C17.0002 -4.25 47.0002 -4.25 62.0002 20.75" stroke="#D4AF7F" stroke-width="4"
                          stroke-linecap="round"/>
                </svg>
            </div>

            <div class="left-[46px] top-[40px] absolute text-center justify-start text-white text-[56px] font-bold">
                EJ
            </div>


            <div
                class="w-[114px] h-[13px] left-[23px] top-[112px] absolute text-center justify-start text-[#d4af7f] text-[9px] font-normal">
                ELHAM JAHANI BEAUTY
            </div>
        </div>
        <div class="left-[110px] top-[210px] text-right justify-start text-[#2d211d] text-[28px] font-bold">
            ایجاد حساب کاربری
        </div>

        <div class="left-[130px] top-[265px] text-right justify-start text-[#8a817c] text-sm font-light">
            برای رزرو خدمات ثبت نام کنید.
        </div>

        <div class="left-[24px] top-[317px] w-[345px] flex flex-col gap-4 mt-9">
            <div>
                <!-- نام و نام خانوادگی -->
                <label class="mb-2 block text-right text-[#6d5246] text-[13px] font-bold">
                    نام
                </label>
                <input
                    name="firstname"
                    value="{{ old('firstname') }}"
                    type="text"
                    class="w-[345px] h-[62px] bg-[#fffcfa] rounded-[20px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right"
                />
                @error('firstname')
                <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message ?? 'الزامی است' }}</p>
                @enderror
            </div>
            <div>
                <!-- نام و نام خانوادگی -->
                <label class="mb-2 block text-right text-[#6d5246] text-[13px] font-bold">
                    نام خانوادگی
                </label>
                <input
                    name="lastname"
                    value="{{ old('lastname') }}"
                    type="text"
                    class="w-[345px] h-[62px] bg-[#fffcfa] rounded-[20px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right"
                />
                @error('lastname')
                <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message ?? 'الزامی است' }}</p>
                @enderror
            </div>
            <div>
                <!-- شماره همراه -->
                <label class="mb-2 block text-right text-[#6d5246] text-[13px] font-bold">
                    شماره همراه
                </label>
                <input
                    name="phone"
                    value="{{ old('phone') }}"
                    type="text"
                    class="w-[345px] h-[62px] bg-[#fffcfa] rounded-[20px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right"
                />
                @error('phone')
                <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message ?? 'الزامی است' }}</p>
                @enderror
            </div>
            <div>
                <!-- شماره همراه -->
                <label class="mb-2 block text-right text-[#6d5246] text-[13px] font-bold">
                    کد ملی
                </label>
                <input
                    name="national_code"
                    value="{{ old('national_code') }}"
                    type="text"
                    class="w-[345px] h-[62px] bg-[#fffcfa] rounded-[20px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right"
                />
                @error('national_code')
                <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message ?? 'الزامی است' }}</p>
                @enderror
            </div>
            <div>
                <!-- نام کاربری -->
                <label class="mb-2 block text-right text-[#6d5246] text-[13px] font-bold">
                    نام کاربری
                </label>
                <input
                    name="username"
                    value="{{ old('username') }}"
                    type="text"
                    class="w-[345px] h-[62px] bg-[#fffcfa] rounded-[20px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right"
                />
                @error('username')
                <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message ?? 'الزامی است' }}</p>
                @enderror
            </div>
            <div>
                <!-- رمز عبور -->
                <label class="mb-2 block text-right text-[#6d5246] text-[13px] font-bold">
                    رمز عبور
                </label>
                <input
                    name="password"
                    type="password"
                    class="w-[345px] h-[62px] bg-[#fffcfa] rounded-[20px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right"
                />
                @error('password')
                <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message ?? 'الزامی است' }}</p>
                @enderror
            </div>
        </div>

        <!-- دکمه ثبت نام -->
        <x-components.button class="mt-12">
            ثبت نام
        </x-components.button>

        <div class="mt-8 left-[190px] top-[780px] text-right justify-start text-[#8a817c] text-sm font-light">
            از قبل حساب کاربری دارید؟ <a href="{{ route('login') }}">ورود</a>.
        </div>
    </form>
@endsection
