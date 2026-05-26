@extends('layout.base.index')
@section('main')
    <div class="w-96 h-[852px] relative bg-white overflow-hidden">
        <div class="w-96 h-[852px] left-0 top-0 absolute bg-[#faf7f4]"></div>
        <div
            class="size-60 left-[76.50px] top-[239px] absolute bg-[#523d35] rounded-full"
        ></div>
        <div
            class="size-52 left-[91.50px] top-[254px] absolute bg-black/0 rounded-full outline outline-2 outline-offset-[-1px] outline-[#d4af7f]"
        ></div>
        <div
            class="size-44 left-[106.50px] top-[269px] absolute bg-black/0 rounded-full outline outline-1 outline-offset-[-0.50px] outline-white"
        ></div>
        <div
            class="left-[162px] top-[322px] absolute text-center justify-start text-white text-6xl font-bold"
        >
            EJ
        </div>
        <div
            class="left-[43px] top-[573px] absolute text-center justify-start text-[#2e211b] text-3xl font-bold"
        >
            آکادمی زیبایی الهام جهانی
        </div>
        <div
            class="left-[104.50px] top-[621px] absolute text-center justify-start text-[#8a817c] text-base font-normal"
        >
            سیستم هوشمند مدیریت سالن
        </div>
        <div
            id="progress"
            class="w-48 h-1.5 left-[96px] top-[730px] absolute bg-[#e9ddd2] rounded-[3px]"
        >
            <div
                class="w-0 h-1.5 left-0 top-0 absolute bg-[#6f4e37] rounded-[3px]"
            ></div>
        </div>
        <div class="size-48 left-[97px] top-[259px] absolute overflow-hidden">
            <div class="size-48 left-0 top-0 absolute bg-[#61493e] rounded-full"></div>
            <div
                class="size-44 left-[10px] top-[10px] absolute bg-black/0 rounded-full outline outline-2 outline-offset-[-1px] outline-[#d4af7f]"
            ></div>
            <div data-svg-wrapper class="left-[70px] top-[36.25px] absolute">
                <svg
                    width="64"
                    height="23"
                    viewBox="0 0 64 23"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M2.00031 20.75C17.0003 -4.25 47.0003 -4.25 62.0003 20.75"
                        stroke="#D4AF7F"
                        stroke-width="4"
                        stroke-linecap="round"
                    />
                </svg>
            </div>
            <div
                class="left-[66.50px] top-[61px] absolute text-center justify-start text-white text-6xl font-bold"
            >
                EJ
            </div>
            <div
                class="left-[28px] top-[133px] absolute text-center justify-start text-[#d4af7f] text-xs font-normal"
            >
                ELHAM JAHANI BEAUTY
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const progressFillEl = document.querySelector("#progress div");
            let width = 0;
            const duration = 2000; // 2 seconds
            const intervalTime = 20; // Update every 20ms for smooth animation
            const increment = (100 / (duration / intervalTime));

            const interval = setInterval(() => {
                if (width >= 100) {
                    clearInterval(interval);
                    // Redirect to your desired page
                    window.location.href = "{{ route('login') }}"; // Change this to your target URL
                } else {
                    width += increment;
                    if (width > 100) width = 100;
                    progressFillEl.style.width = width + "%";
                }
            }, intervalTime);
        });
    </script>
@endpush
