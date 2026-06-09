@extends('layout.base.index')
@section('main')
    <form action="{{ route('manager.appointments.store') }}" method="post"
          class="w-[393px] h-[852px] relative bg-[#f8f4f1] overflow-hidden">
        @csrf
        <div
            class="left-[191px] top-[108px] absolute text-right justify-start text-[#6d5246] text-sm font-normal">
            :تاریخ
        </div>
        <input
            name="date"
            value="{{ jdate()->format('Y/m/d') }}"
            class="w-30 left-[140px] top-[142px] absolute text-center justify-start text-[#6d5246] text-[19px] font-bold">
        <div data-svg-wrapper class="left-[39px] top-[136px] absolute">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="17.5" cy="17.5" r="17" fill="white" stroke="#707070"/>
            </svg>
        </div>
        <div data-svg-wrapper class="left-[49px] top-[142px] absolute">
            <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_25_784)">
                    <path
                        d="M11.603 24.0028C11.232 24.0036 10.8759 23.854 10.6129 23.5867L1.93726 14.7286C2.46209 14.1927 3.17392 13.8916 3.91614 13.8916C4.65836 13.8916 5.37019 14.1927 5.89502 14.7286L12.592 21.5608C12.7887 21.7604 12.9229 22.0152 12.9775 22.2928C13.032 22.5705 13.0046 22.8584 12.8986 23.12C12.7926 23.3817 12.6129 23.6053 12.3822 23.7625C12.1516 23.9197 11.8803 24.0033 11.603 24.0028ZM1.39769 13.277C1.21383 13.2776 1.03166 13.241 0.861775 13.1692C0.691893 13.0974 0.537684 12.9918 0.40811 12.8586C0.146837 12.5895 0.000244141 12.226 0.000244141 11.8471C0.000244141 11.4682 0.146837 11.1046 0.40811 10.8355L10.6129 0.41542C10.743 0.282732 10.8975 0.177515 11.0674 0.105776C11.2374 0.0340373 11.4195 -0.00281786 11.6035 -0.00268519C11.7874 -0.00255252 11.9694 0.0345653 12.1393 0.106549C12.3092 0.178533 12.4635 0.283973 12.5934 0.416849C12.7234 0.549725 12.8264 0.707435 12.8967 0.880974C12.967 1.05451 13.0031 1.24048 13.0029 1.42827C13.0028 1.61605 12.9664 1.80197 12.8959 1.9754C12.8254 2.14884 12.7222 2.3064 12.592 2.43909L2.38671 12.8586C2.25724 12.9918 2.10313 13.0974 1.93334 13.1692C1.76355 13.241 1.58147 13.2776 1.39769 13.277Z"
                        fill="#6D5246"/>
                </g>
                <defs>
                    <clipPath id="clip0_25_784">
                        <rect width="13" height="24" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div data-svg-wrapper class="left-[326px] top-[136px] absolute">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="17.5" cy="17.5" r="17" fill="white" stroke="#707070"/>
            </svg>
        </div>
        <div data-svg-wrapper class="left-[339px] top-[141px] absolute">
            <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_25_787)">
                    <path
                        d="M1.39765 24.0028C1.12033 24.0034 0.849118 23.9197 0.618441 23.7625C0.387763 23.6054 0.208028 23.3818 0.102051 23.1201C-0.00392476 22.8584 -0.0313615 22.5705 0.0232244 22.2929C0.0778104 22.0153 0.211957 21.7605 0.408634 21.5608L7.10677 14.7263C7.63161 14.1904 8.34343 13.8894 9.08566 13.8894C9.82788 13.8894 10.5397 14.1904 11.0645 14.7263L2.38891 23.5845C2.2589 23.7176 2.10437 23.8231 1.93424 23.8949C1.76411 23.9667 1.58174 24.0034 1.39765 24.0028ZM11.603 13.277C11.419 13.2775 11.2368 13.2406 11.0669 13.1685C10.897 13.0963 10.7428 12.9905 10.6134 12.8569L0.408634 2.43913C0.14581 2.17123 -0.00202032 1.8077 -0.00233523 1.42851C-0.00265013 1.04932 0.144576 0.685532 0.406955 0.417177C0.669334 0.148822 1.02537 -0.00211936 1.39675 -0.00244089C1.76812 -0.00276242 2.12441 0.147562 2.38724 0.415462L12.592 10.8344C12.8533 11.1035 12.9999 11.4671 12.9999 11.846C12.9999 12.2249 12.8533 12.5884 12.592 12.8575C12.4626 12.9908 12.3085 13.0966 12.1387 13.1686C11.9689 13.2406 11.7868 13.2775 11.603 13.277Z"
                        fill="#6D5246"/>
                </g>
                <defs>
                    <clipPath id="clip0_25_787">
                        <rect width="13" height="24" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="left-[255px] top-[42px] absolute justify-start text-[#2d211d] text-[28px] font-bold">
            ثبت نوبت
        </div>
        <div class="w-[138px] h-[84px] left-[219px] top-[190px] absolute overflow-hidden">
            <div
                class="left-[94px] top-[-1px] absolute text-right justify-start text-[#6d5246] text-sm font-normal">
                شروع
            </div>
            <input
                name="start"
                value="{{ old('start') }}"
                class="w-[138px] h-14 left-0 top-[28px] absolute bg-white rounded-[18px] outline outline-1 outline-[#e7ded8] px-3 text-center text-sm"
            />
        </div>
        <div class="w-[138px] h-[84px] left-[41px] top-[190px] absolute overflow-hidden">
            <div
                class="left-[97px] top-[-1px] absolute text-right justify-start text-[#6d5246] text-sm font-normal">
                پایان
            </div>
            <input
                name="end"
                value="{{ old('end') }}"
                class="w-[138px] h-14 left-0 top-[28px] absolute bg-white rounded-[18px] outline outline-1 outline-[#e7ded8] px-3 text-center text-sm"
            />
        </div>
        <button
            class="cursor-pointer w-[297px] h-[58px] left-[48px] top-[788px] absolute bg-gradient-to-br from-[#6d5246] to-[#2d211d] rounded-[22px]">

            <div
                class="left-1/2 top-1/2 -translate-1/2 absolute text-center justify-start text-white text-[15px] font-bold">
                ثبت نوبت
            </div>
        </button>
        <div>{{ $errors }}</div>
        <div
            class="left-[299px] top-[325px] absolute text-right justify-start text-[#2d211d] text-[28px] font-bold">
            پرسنل
        </div>

        <div class=" left-[27px] top-[387px] absolute flex flex-col gap-4">
            @foreach($personnels as $personnel)
                <div class="w-[345px] h-[92px]  flex justify-between items-center px-6 bg-white rounded-[28px]">
                    <div>
                        <div
                            class=" text-right justify-start text-[#2d211d] text-lg font-bold">
                            {{ $personnel->fullname }}
                        </div>
                        <div
                            class=" text-right justify-start text-[#8d7366] text-[13px] font-normal">
                            {{ $personnel->services->pluck('name')->implode(' • ') }}
                        </div>
                    </div>
                    <input
                        name="personnels[]"
                        value="{{ $personnel->id }}"
                        @checked(in_array($personnel->id,old('personnels',[])))
                        type="checkbox"
                        style="accent-color:#6D5246;"
                        class=" w-5 h-5"
                    />
                </div>
            @endforeach
        </div>


    </form>

@endsection
