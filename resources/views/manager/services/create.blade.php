@extends('layout.base.index')
@section('main')
    <form action="{{ route('manager.services.store') }}" method="post"
          class="w-[393px] h-[852px] relative bg-white overflow-hidden">
        @csrf
        <div class="w-[393px] h-[852px] left-0 top-0 absolute bg-[#f8f4f1]"></div>

        <div data-svg-wrapper class="left-[24px] top-[130px] absolute">
            <svg width="345" height="430" viewBox="0 0 345 430" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M34 0H311C329.778 0 345 15.2223 345 34V396C345 414.778 329.778 430 311 430H34C15.2223 430 0 414.778 0 396V34C0 15.2223 15.2223 0 34 0Z"
                    fill="#FFFCFA"/>
            </svg>
        </div>

        <button
            class="cursor-pointer w-[297px] h-[58px] left-[48px] top-[455px] absolute bg-gradient-to-br from-[#6d5246] to-[#2d211d] rounded-[22px]">

            <div
                class="left-1/2 top-1/2 -translate-1/2 absolute text-center justify-start text-white text-[15px] font-bold">
                ثبت خدمت
            </div>
        </button>

        <div
            class="left-[250px] top-[43px] absolute text-right justify-start text-[#2d211d] text-[28px] font-bold">
            ایجاد خدمت
        </div>
        <div
            class="left-[265px] top-[83px] absolute text-right justify-start text-[#8d7366] text-[13px] font-normal">
            افزودن خدمت جدید
        </div>

        <div data-svg-wrapper class="left-[40px] top-[45px] absolute">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="#FFFCFA"/>
                <circle cx="24" cy="24" r="23" stroke="#E7DED8"/>
                <path d="M27 16L19 24L27 32" stroke="#6D5246" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </div>

        <!-- نام خدمت -->
        <div
            class="left-[295px] top-[167px] absolute text-right justify-start text-[#6d5246] text-[13px] font-bold">
            نام خدمت
        </div>
        <input
            name="name"
            value="{{ old('name') }}"
            class="w-[297px] h-[44px] left-[48px] top-[195px] absolute bg-white rounded-[16px] border border-[#e7ded8] px-4 text-right text-[#2d211d] placeholder:text-[#b19a90] focus:outline-none focus:border-[#6d5246]"
        />
        @error('name')
        <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message }}</p>
        @enderror

        <!-- توضیحات -->
        <div
            class="left-[295px] top-[275px] absolute text-right justify-start text-[#6d5246] text-[13px] font-bold">
            توضیحات
        </div>
        <textarea
            name="description"
            class="w-[297px] h-[64px] left-[48px] top-[310px] absolute bg-white rounded-[16px] border border-[#e7ded8] px-4 pt-3 text-right text-[#2d211d] placeholder:text-[#b19a90] resize-none focus:outline-none focus:border-[#6d5246]"
        >{{ old('description') }}</textarea>
        @error('description')
        <p class="mt-2 text-right text-[#D65A5A] text-xs">{{ $message }}</p>
        @enderror
    </form>
@endsection
