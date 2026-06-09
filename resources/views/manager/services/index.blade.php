@extends('layout.base.index')
@section('main')
    <div class="w-[393px] h-[852px] relative bg-[#f8f4f1] overflow-hidden">

        <!-- Header -->
        <div class="absolute right-[28px] top-[56px] text-right">
            <div class="text-[#2d211d] text-[30px] font-bold">
                مدیریت خدمات
            </div>
            <div class="mt-1 text-[#b2a39b] text-[11px] font-medium">
                مدیریت خدمات سالن زیبایی
            </div>
        </div>

        <!-- Service List -->
        <div class="absolute top-[150px] left-[24px] w-[345px]">

            <!-- ابرو -->
            @foreach($services as $service)
                <div class="w-full h-[92px] bg-white rounded-[28px] shadow-[0_4px_20px_rgba(0,0,0,0.03)] relative mb-5">
                    <div
                        class="absolute left-[18px] top-[22px] w-[48px] h-[48px] bg-[#f5f1ee] rounded-full flex items-center justify-center">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#8d7366">
                            <circle cx="12" cy="5" r="2"/>
                            <circle cx="12" cy="12" r="2"/>
                            <circle cx="12" cy="19" r="2"/>
                        </svg>
                    </div>
                    <div class="absolute right-[24px] top-[31px] text-[#2d211d] text-[20px] font-bold">
                        {{ $service->name }}
                    </div>
                </div>

            @endforeach


        </div>

        <!-- Floating Plus Button -->
        <a href="{{ route('manager.services.create') }}" class="absolute left-1/2 -translate-x-1/2 bottom-[78px]">
            <div class="w-[72px] h-[72px] rounded-full bg-gradient-to-br from-[#7c5a4d] via-[#5b4137] to-[#3a2923]
                shadow-[0_10px_25px_rgba(82,61,53,0.35)]
                flex items-center justify-center">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                    <path d="M12 5V19M5 12H19"
                          stroke="white"
                          stroke-width="2.5"
                          stroke-linecap="round"/>
                </svg>
            </div>
        </a>

        <!-- Bottom Navigation (مثل Home) -->
        @include('layout.base.footer')
    </div>
@endsection
