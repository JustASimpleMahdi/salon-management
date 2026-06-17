@extends('layout.base.index')
@section('main')
    <div class="w-[393px] h-[852px] relative bg-[#f8f4f1] overflow-hidden flex flex-col">
        <!-- Back button (kept absolute as a floating element) -->
        <a href="{{ route('index') }}" class="absolute left-[24px] top-[35px] z-10">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_177)">
                    <circle cx="24" cy="24" r="24" fill="#FFFCFA"/>
                    <circle cx="24" cy="24" r="23" stroke="#E7DED8"/>
                    <path d="M27 16L19 24L27 32" fill="#FFFCFA"/>
                    <path d="M27 16L19 24L27 32" stroke="#6D5246" stroke-width="2.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_177">
                        <rect width="48" height="48" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </a>

        <!-- Page title -->
        <div class="flex w-full pt-[42px] pr-[40px]">
            <h1 class="text-[28px] font-bold text-[#2d211d] text-right">رزرو نوبت {{ $service->name }}</h1>
        </div>

        <!-- Date label -->
        <div class="flex w-full mt-[66px] pr-[102px]">
            <span class="text-sm text-[#6d5246]">تاریخ :</span>
        </div>

        <!-- Date picker with arrows -->
        <div class="flex items-center justify-between gap-x-4 px-8 mt-[8px]">
            <!-- Right arrow (points left in RTL) -->
            @if(!$date->subDay()->isPast())
                <a href="?{{ http_build_query(array_merge(request()->query(),['date' => $date->subDay()->format('Y/m/d')])) }}"
                   class="flex items-center justify-center w-[35px] h-[35px] rounded-full bg-white border border-[#707070]">
                    <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_140)">
                            <path
                                d="M1.39753 24.0029C1.12021 24.0034 0.848996 23.9197 0.618319 23.7626C0.387641 23.6054 0.207905 23.3818 0.101929 23.1201C-0.00404683 22.8584 -0.0314835 22.5705 0.0231024 22.2929C0.0776883 22.0153 0.211835 21.7605 0.408512 21.5609L7.10665 14.7263C7.63149 14.1905 8.34331 13.8894 9.08553 13.8894C9.82775 13.8894 10.5396 14.1905 11.0644 14.7263L2.38879 23.5845C2.25878 23.7176 2.10425 23.8231 1.93412 23.8949C1.76399 23.9667 1.58162 24.0034 1.39753 24.0029ZM11.6029 13.277C11.4189 13.2775 11.2366 13.2406 11.0668 13.1685C10.8969 13.0964 10.7427 12.9905 10.6133 12.857L0.408512 2.43915C0.145688 2.17125 -0.00214239 1.80772 -0.0024573 1.42852C-0.0027722 1.04933 0.144454 0.685547 0.406833 0.417192C0.669212 0.148837 1.02525 -0.0021041 1.39663 -0.00242563C1.768 -0.00274716 2.12429 0.147577 2.38711 0.415478L12.5919 10.8344C12.8532 11.1035 12.9997 11.4671 12.9997 11.846C12.9997 12.2249 12.8532 12.5885 12.5919 12.8575C12.4625 12.9909 12.3084 13.0966 12.1386 13.1686C11.9688 13.2406 11.7867 13.2775 11.6029 13.277Z"
                                fill="#6D5246"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1_140">
                                <rect width="13" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            @else
                <span
                    class="flex items-center justify-center w-[35px] h-[35px] rounded-full bg-white opacity-50 border border-[#707070]">
                    <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_140)">
                            <path
                                d="M1.39753 24.0029C1.12021 24.0034 0.848996 23.9197 0.618319 23.7626C0.387641 23.6054 0.207905 23.3818 0.101929 23.1201C-0.00404683 22.8584 -0.0314835 22.5705 0.0231024 22.2929C0.0776883 22.0153 0.211835 21.7605 0.408512 21.5609L7.10665 14.7263C7.63149 14.1905 8.34331 13.8894 9.08553 13.8894C9.82775 13.8894 10.5396 14.1905 11.0644 14.7263L2.38879 23.5845C2.25878 23.7176 2.10425 23.8231 1.93412 23.8949C1.76399 23.9667 1.58162 24.0034 1.39753 24.0029ZM11.6029 13.277C11.4189 13.2775 11.2366 13.2406 11.0668 13.1685C10.8969 13.0964 10.7427 12.9905 10.6133 12.857L0.408512 2.43915C0.145688 2.17125 -0.00214239 1.80772 -0.0024573 1.42852C-0.0027722 1.04933 0.144454 0.685547 0.406833 0.417192C0.669212 0.148837 1.02525 -0.0021041 1.39663 -0.00242563C1.768 -0.00274716 2.12429 0.147577 2.38711 0.415478L12.5919 10.8344C12.8532 11.1035 12.9997 11.4671 12.9997 11.846C12.9997 12.2249 12.8532 12.5885 12.5919 12.8575C12.4625 12.9909 12.3084 13.0966 12.1386 13.1686C11.9688 13.2406 11.7867 13.2775 11.6029 13.277Z"
                                fill="#6D5246"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1_140">
                                <rect width="13" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </span>

            @endif

            <!-- Date text -->
            <span class="text-[19px] font-bold text-[#6d5246]">{{ $date->format('Y/m/d') }}</span>

            <!-- Left arrow (points right in RTL) -->
            <a href="?{{ http_build_query(array_merge(request()->query(),['date' => $date->addDay()->format('Y/m/d')])) }}"
               class="flex items-center justify-center w-[35px] h-[35px] rounded-full bg-white border border-[#707070]">
                <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_137)">
                        <path
                            d="M11.6029 24.0029C11.2319 24.0037 10.8757 23.854 10.6128 23.5868L1.93714 14.7286C2.46197 14.1927 3.1738 13.8917 3.91602 13.8917C4.65824 13.8917 5.37006 14.1927 5.8949 14.7286L12.5919 21.5609C12.7886 21.7605 12.9227 22.0153 12.9773 22.2929C13.0319 22.5705 13.0045 22.8584 12.8985 23.1201C12.7925 23.3818 12.6128 23.6054 12.3821 23.7626C12.1514 23.9197 11.8802 24.0034 11.6029 24.0029ZM1.39757 13.277C1.2137 13.2777 1.03154 13.2411 0.861653 13.1693C0.691771 13.0974 0.537562 12.9919 0.407988 12.8587C0.146715 12.5896 0.00012207 12.226 0.00012207 11.8471C0.00012207 11.4682 0.146715 11.1047 0.407988 10.8356L10.6128 0.415481C10.7429 0.282793 10.8974 0.177576 11.0673 0.105837C11.2373 0.0340983 11.4194 -0.00275683 11.6033 -0.00262415C11.7872 -0.00249148 11.9693 0.0346264 12.1392 0.10661C12.3091 0.178594 12.4634 0.284034 12.5933 0.41691C12.7233 0.549786 12.8263 0.707496 12.8966 0.881035C12.9668 1.05457 13.0029 1.24054 13.0028 1.42833C13.0027 1.61611 12.9663 1.80203 12.8958 1.97546C12.8253 2.1489 12.7221 2.30646 12.5919 2.43915L2.38659 12.8587C2.25712 12.9919 2.10301 13.0974 1.93322 13.1692C1.76343 13.2411 1.58135 13.2777 1.39757 13.277Z"
                            fill="#6D5246"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1_137">
                            <rect width="13" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>

            </a>
        </div>

        <!-- Time slot cards list -->
        <div class="flex flex-col gap-y-[24px] mt-[61px] px-[24px]">
            @foreach($appointments as $appointment)
                <!-- Card 2 (active/reserve) -->
                <div class="relative w-full h-[120px] bg-white rounded-[30px] overflow-hidden flex flex-col">
                    <div class="flex flex-col pt-[14px] pr-[16px]">
                        <span
                            class="text-lg font-bold text-[#2d211d]">{{ $appointment->start->format('H:i') }} تا {{ $appointment->end->format('H:i') }}</span>
                        <span
                            class="text-xs text-[#b19a90] mt-[8px]">{{  $appointment->personnels->map(fn(\App\Models\Personnel $personnel)=> $personnel->services->pluck('name'))->flatten()->unique()->implode(' • ')  }}</span>
                    </div>
                    <div class="mt-auto mb-0">
                        <div class="w-full h-px bg-[#F0E8E3]"></div>
                        <div class="flexitems-center pt-[4px] pr-[16px] pb-[4px]">
                            <span
                                class="text-[13px] font-bold text-[#8d7366]">{{ $appointment->personnels->pluck('fullname')->implode(' - ') }}</span>
                        </div>
                    </div>
                    <!-- Badge (absolute, active dark style) -->
                    <div class="absolute left-[18px] top-[68px]">
                        <div class="relative w-[82px] h-[36px]">
                            <svg width="82" height="36" viewBox="0 0 82 36" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M64 0.5H18C8.33502 0.5 0.5 8.33502 0.5 18C0.5 27.665 8.33502 35.5 18 35.5H64C73.665 35.5 81.5 27.665 81.5 18C81.5 8.33502 73.665 0.5 64 0.5Z"
                                    fill="#6D5246" stroke="#D4AF7F"/>
                            </svg>
                            <button
                                type="button"
                                onclick="openSelectPersonnelModal({
                                    personnels : [
                                        @foreach($appointment->personnelsWithReserved as $personnel)
                                        {
                                           fullname: '{{ $personnel->fullname }}',
                                           active: {{ !$personnel->reserved ? 'true' : 'false' }},
                                           confirmUrl: '{{ route('reservation.confirmation',['appointment' => $appointment,'personnel' => $personnel,'service' => $service]) }}'
                                        },
                                        @endforeach
                                    ]
                                })"
                                class="cursor-pointer absolute inset-0 flex items-center justify-center text-[13px] font-bold text-white">
                                رزرو
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom navigation bar -->
        @include('layout.user.bottom-navigation')

        <div id="select-personnel-modal"
             class="w-[393px] h-[852px] bg-[#0005] z-10 absolute flex flex-col items-center overflow-hidden mx-auto hidden">
            <!-- Card -->
            <div
                class="w-80 min-h-60 mt-[186px] bg-[#FFFCFA] rounded-[32px] border border-[#ECE3DD] overflow-hidden flex flex-col items-center py-[24px]">
                <!-- Title -->
                <h2 class="text-lg font-bold text-[#2d211d] text-center mb-9"> انتخاب متخصص </h2>

                <div data-personnels-el class="flex flex-col items-center gap-2">
                    <!-- Specialist Row 1 (selected) -->
                    <div
                        class="cursor-pointer w-[273px] h-[47px] bg-white has-checked:bg-[#FFF1EB] border border-[#ECE3DD] rounded-full flex items-center pr-[24px]"
                        onclick="this.querySelector('input').checked = true"
                    >
                        <input name="personnel" type="radio" class="hidden">
                        <span class="text-[13px] font-bold text-[#2d211d]"> الهام جهانی </span>
                    </div>
                </div>
                <!-- Confirm button -->
                <a
                    href="#"
                    data-confirm-button
                    class="w-[272px] h-[42px] bg-[#6D5246] rounded-full flex justify-center items-center mt-8 cursor-pointer">
                    <span class="text-white text-sm font-bold"> تایید انتخاب </span>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const selectPersonnelModalEl = document.querySelector('#select-personnel-modal')
        const selectPersonnelModalPersonnelsEl = document.querySelector('#select-personnel-modal [data-personnels-el]')
        const selectPersonnelModalConfirmButtonEl = document.querySelector('#select-personnel-modal [data-confirm-button]')

        function openSelectPersonnelModal({personnels}) {
            selectPersonnelModalEl.classList.remove('hidden');
            selectPersonnelModalPersonnelsEl.innerHTML = ""
            const defaultSelectedPersonnelIndex = 0
            selectPersonnelModalConfirmButtonEl.href = personnels[defaultSelectedPersonnelIndex].confirmUrl
            personnels.forEach(({fullname, active, confirmUrl}, index) => {
                if (active) {
                    selectPersonnelModalPersonnelsEl.innerHTML += `
                        <div
                            class="cursor-pointer w-[273px] h-[47px] bg-white has-checked:bg-[#FFF1EB] border border-[#ECE3DD] rounded-full flex items-center pr-[24px]"
                            onclick="this.querySelector('input').click()"
                        >
                            <input name="personnel" type="radio" class="hidden" value="${confirmUrl}" ${index === defaultSelectedPersonnelIndex ? 'checked' : ''}>
                            <span class="text-[13px] font-bold text-[#2d211d]">${fullname}</span>
                        </div>
                    `
                } else {
                    selectPersonnelModalPersonnelsEl.innerHTML += `
                        <div
                            class="flex justify-between opacity-50 cursor-pointer w-[273px] h-[47px] bg-white has-checked:bg-[#FFF1EB] border border-[#ECE3DD] rounded-full flex items-center pr-[24px]"

                        >
                            <span class="text-[13px] font-bold text-[#2d211d]">${fullname}</span>
<span>رزرو شده</span>
                        </div>
                    `
                }


            })
            selectPersonnelModalPersonnelsEl.querySelectorAll('input[type="radio"]').forEach(input => {
                input.addEventListener('change', () => {
                    selectPersonnelModalConfirmButtonEl.href = input.value
                })
            })

            function close() {
                selectPersonnelModalEl.classList.add('hidden');
                selectPersonnelModalEl.removeEventListener('click', onBackgroundClick)
            }

            function onBackgroundClick(e) {
                if (e.target.closest('#select-personnel-modal > *')) return
                close()
            }

            selectPersonnelModalEl.addEventListener('click', onBackgroundClick)
        }
    </script>
@endpush
