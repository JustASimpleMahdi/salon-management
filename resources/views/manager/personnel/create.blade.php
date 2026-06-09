@extends('layout.base.index')
@section('main')
    <div class="w-[393px] h-[852px] relative bg-white overflow-hidden">
        <div class="w-[393px] h-[852px] left-0 top-0 absolute bg-[#f8f4f1]"></div>

        <form action="{{ route('manager.personnels.store') }}" method="post"
              class="w-[345px] h-[754px] left-[24px] top-[45px] absolute">
            @csrf

            <div
                class="whitespace-nowrap left-[220px] top-[-2px] absolute text-right justify-start text-[#2d211d] text-[28px] font-bold">
                ایجاد پرسنل
            </div>

            <div class="w-[345px] h-[684px] left-0 top-[70px] absolute bg-[#fffcfa] rounded-[34px]"></div>

            <!-- نام -->
            <div class="left-[285px] top-[86px] absolute text-right justify-start text-[#6d5246] text-xl font-normal">
                نام
            </div>

            <input
                name="firstname"
                value="{{ old('firstname') }}"
                type="text"
                class="w-[297px] h-[52px] left-[24px] top-[120px] absolute bg-white rounded-[18px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right text-[#2d211d]"
            />

            <!-- نام خانوادگی -->
            <div class="left-[225px] top-[191px] absolute text-right justify-start text-[#6d5246] text-xl font-normal">
                نام خانوادگی
            </div>

            <input
                name="lastname"
                value="{{ old('lastname') }}"
                type="text"
                class="w-[297px] h-[52px] left-[24px] top-[225px] absolute bg-white rounded-[18px] outline outline-1 outline-offset-[-0.50px] outline-[#e7ded8] px-4 text-right text-[#2d211d]"
            />

            <!-- خدمات پرسنل -->
            <div class="left-[247px] top-[305px] absolute text-right justify-start text-[#6d5246] text-sm font-normal">
                خدمات پرسنل
            </div>

            <!-- ابرو -->
            <div class="left-[45px] top-[341px] absolute w-65 flex flex-col gap-10">
                @foreach($services as $service)
                    <label class="cursor-pointer flex justify-between items-center">
                        <div
                            class="left-[271px] top-[338px]  text-right justify-start text-[#2d211d] text-xl font-normal">
                            {{ $service->name }}
                        </div>
                        <input
                            name="services[]"
                            value="{{ $service->id }}"
                            type="checkbox"
                            class="w-5 h-5 cursor-pointer   accent-[#6D5246]"
                        />
                    </label>
                @endforeach
            </div>


            <!-- دکمه -->
            <button
                class="cursor-pointer w-[297px] h-[58px] left-[24px] top-[658px] absolute bg-gradient-to-br from-[#6d5246] to-[#2d211d] rounded-[22px]">

                <div
                    class="left-1/2 top-1/2 -translate-1/2 absolute text-center justify-start text-white text-[15px] font-bold">
                    ثبت پرسنل
                </div>
            </button>

        </form>

        <!-- Back Button -->
        <a href="{{ route('manager.personnels.index') }}" data-svg-wrapper class="left-[40px] top-[45px] absolute">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="#FFFCFA"/>
                <circle cx="24" cy="24" r="23" stroke="#E7DED8"/>
                <path d="M27 16L19 24L27 32" stroke="#6D5246" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </a>

    </div>
@endsection
