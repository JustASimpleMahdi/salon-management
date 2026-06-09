<div
    class="absolute left-0 bottom-0 w-full h-[72px] flex justify-around items-center border-t border-gray-300"
>
    <a href="{{ route('manager.index') }}" class="flex flex-col items-center text-xs font-bold text-[#6d5246]">
        <svg width="24" height="24" fill="currentColor">
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>
        خانه
    </a>
    <a href="{{ route('manager.services.index') }}" class="flex flex-col items-center text-xs font-bold text-[#8d7366]">
        <svg width="24" height="24" fill="currentColor">
            <path
                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 12c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"
            />
            <circle cx="12" cy="12" r="2.5"/>
        </svg>
        خدمات
    </a>
    <a href="{{ route('manager.personnels.index') }}"
       class="flex flex-col items-center text-xs font-bold text-[#8d7366]">
        <svg width="24" height="24" fill="currentColor">
            <path
                d="M16 11c1.66 0 3-1.34 3-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.01 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"
            />
        </svg
        >
        پرسنل
    </a>
    <div class="flex flex-col items-center text-xs font-bold text-[#8d7366]">
        <svg width="24" height="24" fill="currentColor">
            <path
                d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"
            />
        </svg>
        نوبت
    </div>
</div>
