@extends('layout.base.index')
@section('main')
    <form
        action="{{ route('login-submit') }}"
        method="post"
        class="w-[393px] h-[852px] relative bg-[#F8F4F1] overflow-hidden"
    >
        @csrf
        <!-- Logo -->

        <div class="w-[160px] h-[160px] absolute left-1/2 -translate-x-1/2 top-[40px]">
            <div class="w-full h-full rounded-full "></div>

            <div
                class="w-[140px] h-[140px] absolute left-[10px] top-[10px] rounded-full border-2 border-[#C8A97E]"
            ></div>

            <svg
                class="absolute left-[48px] top-[28px]"
                width="64"
                height="23"
                viewBox="0 0 64 23"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M2 20.75C17 -4.25 47 -4.25 62 20.75"
                    stroke="#C8A97E"
                    stroke-width="4"
                    stroke-linecap="round"
                />
            </svg>

            <div
                class="absolute w-full top-[42px] text-center text-white text-[54px] font-bold"
            >
                EJ
            </div>

            <div
                class="absolute w-full top-[114px] text-center text-[#C8A97E] text-[5px] tracking-[3px]"
            >
                ELHAM JAHANI BEAUTY
            </div>
        </div>

        <!-- Welcome -->

        <div class="absolute top-[235px] w-full text-center">
            <h1 class="text-[#2D211D] text-[26px] font-bold">خوش آمدید</h1>

            <p class="mt-3 text-[#8A817C] text-[14px]">ورود به سیستم مدیریت سالن</p>
        </div>

        <!-- Username -->

        <div class="absolute left-[24px] top-[340px] w-[345px]">
            <label class="block text-right text-[#6D5246] text-[13px] font-bold mb-2">
                نام کاربری
            </label>

            <input
                name="username"
                type="text"
                placeholder=".نام کاربری خود را وارد کنید"
                class="w-full h-[56px] bg-[#FFFCFA] border border-[#E7DED8] rounded-[18px] px-5 text-right text-[14px] placeholder:text-[#B8AAA2] outline-none focus:border-[#6D5246] transition"
            />

            <!-- Error Example -->

            @error('username')
            <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->

        <div class="absolute left-[24px] top-[445px] w-[345px]">
            <label class="block text-right text-[#6D5246] text-[13px] font-bold mb-2">
                رمز عبور
            </label>

            <input
                name="password"
                type="password"
                placeholder=".رمز عبور خود را وارد کنید"
                class="w-full h-[56px] bg-[#FFFCFA] border border-[#E7DED8] rounded-[18px] px-5 text-right text-[14px] placeholder:text-[#B8AAA2] outline-none focus:border-[#6D5246] transition"
            />

            <!-- Error Example -->

            @error('password')
            <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message }}</p>
            @enderror

            <div class="mt-4 text-center text-[#8A817C] text-[12px] cursor-pointer">
                حساب کاربری ندارید؟ <a href="{{ route('signin') }}" class="font-bold underline">ثبت نام</a>
            </div>
        </div>

        <!-- Login Button -->

        <x-components.button class="absolute left-[24px] top-[610px]">
            ورود
        </x-components.button>
    </form>
@endsection
