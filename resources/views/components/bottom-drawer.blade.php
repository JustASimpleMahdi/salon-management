@props([
    'name'
])
<div id="bottom-drawer" {{ $attributes->class(['hidden']) }}>
    <div data-background-el
         class="w-[393px] h-[875px] left-0 top-0 absolute bg-black/30 border border-[#707070]"></div>
    <div class="w-[393px] h-[220px] left-0 bottom-0 absolute">
        <div
            class="w-[393px] h-[235px] left-0 top-[-15px] absolute bg-white rounded-tl-[34px] rounded-tr-[34px]"></div>
        <div class="w-[345px] h-px left-[24px] top-[155px] absolute bg-[#EFE7E2]"></div>
        <div class="w-[65px] h-[5.34px] left-[164px] top-[-0.05px] absolute bg-[#e7ded8] rounded-[3px]"></div>
        <div
            data-title-el
            class="-translate-x-1/2 h-[23.50px] left-1/2 top-[29.86px] absolute text-center justify-start text-[#2d211d] text-lg font-bold">

        </div>
        <a href="#"
           data-edit-el
           class="w-[109px] h-[19.23px] left-[235px] top-[121px] absolute text-center justify-start text-[#6d5246] text-[15px] font-bold">
            ویرایش {{ $name }}
        </a>
        <button
            data-delete-el
            class="w-[81px] h-[19.23px] left-[260px] top-[176px] absolute text-center justify-start text-[#d67272] text-[15px] font-bold">
            حذف {{ $name }}
        </button>
        <div data-svg-wrapper class="left-[343px] top-[172px] absolute">
            <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.32812 0C8.93277 0.000271019 9.42383 0.553239 9.42383 1.23535V1.48242H15.5596C16.1643 1.48242 16.6551 2.03473 16.6553 2.7168C16.6553 3.39908 16.1644 3.95215 15.5596 3.95215H15.3408V17.0449C15.3407 19.0911 13.8681 20.75 12.0527 20.75H4.60254C2.78675 20.75 1.31459 19.0911 1.31445 17.0449V4.94043C2.5246 4.94043 3.50684 6.04707 3.50684 7.41113V17.0449C3.50697 17.7271 3.99733 18.2793 4.60254 18.2793H12.0527C12.6575 18.2793 13.1493 17.7271 13.1494 17.0449V3.95215H1.0957C0.490433 3.95212 0 3.39906 0 2.7168C0.000222902 2.03475 0.49057 1.48245 1.0957 1.48242H7.23145V1.23535C7.23145 0.553072 7.72284 0 8.32812 0ZM6.35547 5.43457C6.96026 5.43465 7.45117 5.98769 7.45117 6.66992V15.5625C7.45117 16.2447 6.96026 16.7978 6.35547 16.7979C5.75018 16.7979 5.25977 16.2448 5.25977 15.5625V6.66992C5.25977 5.98764 5.75018 5.43457 6.35547 5.43457ZM10.2998 5.43457C10.9047 5.43457 11.3955 5.98764 11.3955 6.66992V15.5625C11.3955 16.2448 10.9047 16.7979 10.2998 16.7979C9.69462 16.7977 9.2041 16.2447 9.2041 15.5625V6.66992C9.2041 5.98773 9.69462 5.43471 10.2998 5.43457Z"
                    fill="#D67272"/>
            </svg>
        </div>
        <div class="size-[18px] left-[344px] top-[120px] absolute"></div>
        <div data-svg-wrapper class="left-[343px] top-[121px] absolute">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6_116)">
                    <path
                        d="M2.46818 18C2.08734 17.9973 1.71222 17.9119 1.37171 17.7503C1.0312 17.5887 0.734398 17.3552 0.504158 17.0678C0.272188 16.7812 0.113907 16.4474 0.0418745 16.0928C-0.0301581 15.7382 -0.0139596 15.3725 0.0891845 15.0249L1.09711 11.564C1.25568 11.0202 1.56295 10.5256 1.98788 10.1303L11.9044 0.91641C12.5403 0.325753 13.3967 -0.00321934 14.2872 0.00101698C15.1778 0.00525329 16.0306 0.342356 16.6602 0.939032L18.0119 2.21956C18.6417 2.81621 18.9974 3.62429 19.0016 4.46805C19.0058 5.31182 18.6582 6.12305 18.0344 6.72533L8.30619 16.1146C7.88857 16.5172 7.3662 16.8083 6.79183 16.9585L3.13908 17.9129C2.92059 17.9704 2.69493 17.9996 2.46818 18ZM14.2708 2.1342C13.9757 2.13353 13.6922 2.2432 13.4819 2.43939L3.56757 11.6528C3.42577 11.7847 3.32333 11.9498 3.27064 12.1313L2.26272 15.593C2.25348 15.6247 2.25208 15.658 2.25865 15.6903C2.26521 15.7225 2.27956 15.7529 2.30057 15.7791C2.32156 15.8056 2.34877 15.8271 2.38005 15.8419C2.41133 15.8568 2.44583 15.8645 2.4808 15.8645C2.50135 15.8645 2.5218 15.8619 2.54163 15.8568L6.19483 14.9019C6.38621 14.8521 6.56019 14.755 6.69902 14.6207L13.4125 8.13647L12.6037 7.37029C12.182 6.96966 11.9452 6.42696 11.9452 5.86118C11.9452 5.2954 12.182 4.75271 12.6037 4.35208L14.9917 6.61435L16.4259 5.22967C16.6329 5.02853 16.7482 4.75831 16.7468 4.47736C16.7453 4.19641 16.6273 3.92726 16.4182 3.72803L15.0665 2.4475C14.9623 2.34806 14.8383 2.26917 14.7018 2.21539C14.5652 2.16162 14.4187 2.13402 14.2708 2.1342Z"
                        fill="#6D5246"/>
                </g>
                <defs>
                    <clipPath id="clip0_6_116">
                        <rect width="19" height="18" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>

</div>
<div id="delete-confirm-modal" class="hidden w-[393px] h-[852px] left-0 top-0 absolute overflow-hidden">
    <div data-background-el class="w-[393px] h-[852px] left-0 top-0 absolute bg-black/30"></div>
    <div class="w-[345px] h-60 left-[24px] top-[280px] absolute bg-[#fffcfa] rounded-[34px]"></div>
    <div class="left-[150px] top-[317px] absolute text-center justify-start text-[#2d211d] text-2xl font-bold">
        حذف {{ $name }}
    </div>
    <div class="left-[110px] top-[371px] absolute text-center justify-start text-[#8d7366] text-sm font-normal">
        آیا از حذف این {{ $name }} اطمینان دارید؟
    </div>
    <div data-name-el
         class="left-[172px] top-[405px] absolute text-center justify-start text-[#6d5246] text-base font-bold">

    </div>
    <form action="#" method="post" class="w-[305px] h-[52px] left-[44px] top-[450px] absolute overflow-hidden">
        @csrf
        @method('DELETE')
        <div class="w-[305px] h-[52px] left-0 top-0 absolute overflow-hidden">
            <div class="w-[130px] h-[52px] left-0 top-0 absolute bg-[#f3ece7] rounded-[18px]"></div>
            <button
                type="button"
                data-cancel-el
                class="left-[44px] top-[18px] absolute text-center justify-start text-[#6d5246] text-sm font-normal">
                انصراف
            </button>
            <div class="w-[130px] h-[52px] left-[175px] top-0 absolute bg-[#d67272] rounded-[18px]">
                <button
                    class="cursor-pointer left-1/2 top-1/2 -translate-1/2 absolute text-center justify-start text-white text-sm font-normal flex items-center gap-2">
                    حذف
                    <svg width="17" height="21" viewBox="0 0 17 21" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.32812 0C8.93277 0.000271019 9.42383 0.553239 9.42383 1.23535V1.48242H15.5596C16.1643 1.48242 16.6551 2.03473 16.6553 2.7168C16.6553 3.39908 16.1644 3.95215 15.5596 3.95215H15.3408V17.0449C15.3407 19.0911 13.8681 20.75 12.0527 20.75H4.60254C2.78675 20.75 1.31459 19.0911 1.31445 17.0449V4.94043C2.5246 4.94043 3.50684 6.04707 3.50684 7.41113V17.0449C3.50697 17.7271 3.99733 18.2793 4.60254 18.2793H12.0527C12.6575 18.2793 13.1493 17.7271 13.1494 17.0449V3.95215H1.0957C0.490433 3.95212 0 3.39906 0 2.7168C0.000222902 2.03475 0.49057 1.48245 1.0957 1.48242H7.23145V1.23535C7.23145 0.553072 7.72284 0 8.32812 0ZM6.35547 5.43457C6.96026 5.43465 7.45117 5.98769 7.45117 6.66992V15.5625C7.45117 16.2447 6.96026 16.7978 6.35547 16.7979C5.75018 16.7979 5.25977 16.2448 5.25977 15.5625V6.66992C5.25977 5.98764 5.75018 5.43457 6.35547 5.43457ZM10.2998 5.43457C10.9047 5.43457 11.3955 5.98764 11.3955 6.66992V15.5625C11.3955 16.2448 10.9047 16.7979 10.2998 16.7979C9.69462 16.7977 9.2041 16.2447 9.2041 15.5625V6.66992C9.2041 5.98773 9.69462 5.43471 10.2998 5.43457Z"
                            fill="#960019"/>
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>

@push('scripts')
    <script>
        const bottomDrawerEl = document.querySelector('#bottom-drawer')
        const bottomDrawerBackgroundEl = document.querySelector('#bottom-drawer [data-background-el]')
        const bottomDrawerTitleEl = document.querySelector('#bottom-drawer [data-title-el]')
        const bottomDrawerEditEl = document.querySelector('#bottom-drawer [data-edit-el]')
        const bottomDrawerDeleteEl = document.querySelector('#bottom-drawer [data-delete-el]')

        function openBottomDrawer({id, name, editLink, deleteLink}) {
            function bottomDrawerDeleteOnClick() {
                openDeleteModal({name, deleteLink})
            }

            bottomDrawerEl.classList.remove('hidden');
            bottomDrawerTitleEl.innerText = name ?? ''
            bottomDrawerEditEl.href = editLink ?? '#'
            bottomDrawerDeleteEl?.addEventListener('click', bottomDrawerDeleteOnClick)

            function closeBottomDrawer() {
                bottomDrawerEl.classList.add('hidden');
                bottomDrawerDeleteEl?.removeEventListener('click', bottomDrawerDeleteOnClick)
                bottomDrawerBackgroundEl.removeEventListener('click', closeBottomDrawer)
            }


            bottomDrawerBackgroundEl.addEventListener('click', closeBottomDrawer)
        }

    </script>
    <script>
        const deleteConfirmModalEl = document.querySelector('#delete-confirm-modal')
        const deleteConfirmModalBackgroundEl = document.querySelector('#delete-confirm-modal [data-background-el]')
        const deleteConfirmModalFormEl = document.querySelector('#delete-confirm-modal form')
        const deleteConfirmModalNameEl = document.querySelector('#delete-confirm-modal [data-name-el]')
        const deleteConfirmModalCancelEl = document.querySelector('#delete-confirm-modal [data-cancel-el]')

        function openDeleteModal({deleteLink, name}) {
            deleteConfirmModalEl.classList.remove('hidden');
            deleteConfirmModalFormEl.action = deleteLink
            deleteConfirmModalNameEl.innerText = name

            function close() {
                deleteConfirmModalEl.classList.add('hidden');
                deleteConfirmModalBackgroundEl.removeEventListener('click', close)
                deleteConfirmModalCancelEl.addEventListener('click', close)
            }

            deleteConfirmModalBackgroundEl.addEventListener('click', close)
            deleteConfirmModalCancelEl.addEventListener('click', close)
        }
    </script>
@endpush
