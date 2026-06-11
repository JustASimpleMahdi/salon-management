@extends('layout.base.index')
@section('main')
    <div class="w-[393px] h-[852px] relative bg-[#f8f4f1] overflow-hidden flex flex-col">
        <!-- Back button (kept absolute as a floating element) -->
        <a href="{{ route('index') }}" class="absolute left-[24px] top-[49px]">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_97)">
                    <circle cx="24" cy="24" r="24" fill="#FFFCFA"/>
                    <circle cx="24" cy="24" r="23" stroke="#E7DED8"/>
                    <path d="M27 16L19 24L27 32" fill="#FFFCFA"/>
                    <path d="M27 16L19 24L27 32" stroke="#6D5246" stroke-width="2.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_97">
                        <rect width="48" height="48" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </a>

        <!-- Title and subtitle (right-aligned) -->
        <div class="flex flex-col pt-[56px] mr-10">
            <h1 class="text-[34px] font-bold text-[#3a2a25] text-right leading-tight">
                خدمات
            </h1>
            <p class="text-sm text-[#b09a91] text-right mt-[4px] leading-tight">
                لطفا خدمات مورد نظر را انتخاب کنید.
            </p>
        </div>

        <!-- Service cards list -->
        <div class="flex flex-col gap-y-6 mt-6">
            <!-- Card 1: Eyebrow (selected) -->
            @foreach($services as $service)
                <div
                    class="w-[345px] h-[86px] cursor-pointer px-6 mx-auto bg-[#fff] rounded-[30px] border border-transparent transition-colors  flex flex-col justify-center
has-checked:bg-[#fff0eb] has-checked:border-[#503930]" onclick="this.querySelector('input').checked = true">
                    <input name="service" type="radio" value="{{ $service->id }}" class="hidden" @checked($loop->first)>
                    <h2 class="text-lg font-bold text-[#3a2a25] text-right  leading-tight">{{ $service->name }}</h2>
                    <p class="text-xs text-[#6d5246] text-right mt-[2px] leading-tight">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>

        <!-- Submit button -->
        <button
            class="cursor-pointer w-[345px] h-[60px] mx-auto bg-[#503930] rounded-3xl flex items-center justify-center mt-[66px]">
            <span class="text-white text-lg font-bold">ثبت و ادامه</span>
        </button>
    </div>
@endsection
