@extends('layout.base.index')
@section('main')
    <div class="w-[393px] h-[852px] relative bg-white overflow-hidden">
        <div class="w-[393px] h-[852px] left-0 top-0 absolute">
            <div class="w-[393px] h-[852px] left-0 top-0 absolute bg-[#f8f4f1]"></div>
            <div class="right-[28px] top-[43px] absolute text-right justify-start text-[#2d211d] text-[28px] font-bold">
                مدیریت پرسنل
            </div>
            <div
                class="right-[28px] top-[82px] absolute text-right justify-start text-[#8d7366] text-[13px] font-normal">
                مدیریت کارکنان سالن
            </div>
            <a href="{{ route('manager.personnels.create') }}" data-svg-wrapper
               class="left-[160px] top-[700px] absolute">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M36 72C55.8823 72 72 55.8823 72 36C72 16.1177 55.8823 0 36 0C16.1177 0 0 16.1177 0 36C0 55.8823 16.1177 72 36 72Z"
                        fill="url(#paint0_linear_72_444)"/>
                    <defs>
                        <linearGradient id="paint0_linear_72_444" x1="0" y1="0" x2="72" y2="72"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#7C5A4D"/>
                            <stop offset="0.5" stop-color="#5B4137"/>
                            <stop offset="1" stop-color="#3A2923"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
            <div data-svg-wrapper class="left-[189px] top-[729px] absolute">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.5 1.5V15.5ZM1.5 8.5H15.5Z" fill="black"/>
                    <path d="M8.5 1.5V15.5M1.5 8.5H15.5" stroke="white" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
        <div data-svg-wrapper class="left-[66px] top-[197px] absolute">
            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="#6D5246"/>
            </svg>
        </div>
        <div data-svg-wrapper class="left-[66px] top-[203px] absolute">
            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="#6D5246"/>
            </svg>
        </div>
        <div
            class="w-[345px] h-[170px] left-[24px] top-[126px] absolute bg-gradient-to-br from-[#8a6257] to-[#4a3530] rounded-[34px]"></div>
        <div class="size-40 left-[233px] top-[158px] absolute opacity-5 bg-white rounded-full"></div>
        <div class="left-[115px] top-[203px] absolute justify-start text-white text-xl font-normal">پرسنل فعال</div>
        <div
            class="left-[218px] top-[175px] absolute justify-start text-white text-[54px] font-bold">{{ $personnelsCount }}</div>
        <div
            class="w-[297px] h-0 left-[38px] top-[254px] absolute outline outline-1 outline-offset-[-0.50px] outline-white"></div>
        <div class="left-[24px] top-[338px] absolute flex flex-col gap-5">
            @foreach($personnels as $personnel)
                <div class="w-[345px] h-[92px] relative overflow-hidden">
                    <div class="w-[345px] h-[92px] absolute left-0 top-0 absolute bg-white rounded-[28px]"></div>
                    <div
                        class="left-[250px] top-[19px] absolute text-right justify-start text-[#2d211d] text-lg font-bold">
                        {{ $personnel->fullname }}
                    </div>
                    <div
                        class="left-[250px] top-[50px] absolute text-right justify-start text-[#8d7366] text-[13px] font-normal">
                        {{ $personnel->services->implode(' • ') }}
                    </div>
                    <button type="button" onclick="openBottomDrawer({
                    name: '{{ $personnel->fullname }}',
                    editLink: '{{ route('manager.personnels.edit',compact('personnel')) }}',
                    deleteLink: '{{ route('manager.personnels.destroy',compact('personnel')) }}',
                })">
                        <div data-svg-wrapper class="left-[10px] top-[27px] absolute">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#F4EEEA"/>
                            </svg>
                        </div>
                        <div data-svg-wrapper class="left-[26px] top-[37px] absolute">
                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#6D5246"/>
                            </svg>
                        </div>
                        <div data-svg-wrapper class="left-[26px] top-[43px] absolute">
                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#6D5246"/>
                            </svg>
                        </div>
                        <div data-svg-wrapper class="left-[26px] top-[49px] absolute">
                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#6D5246"/>
                            </svg>
                        </div>
                    </button>
                </div>
            @endforeach
        </div>
        <div data-svg-wrapper class="left-[19px] top-[44px] absolute">
            <svg width="220" height="210" viewBox="0 0 220 210" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.04" d="M40 0H220L120 210H0L40 0Z" fill="white"/>
            </svg>
        </div>
        @include('layout.base.footer')
        <x-bottom-drawer name="پرسنل"/>
    </div>
@endsection


