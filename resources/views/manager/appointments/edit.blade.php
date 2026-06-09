@extends('layout.base.index')
@section('main')
    <form action="{{ route('manager.appointments.update',compact('appointment')) }}" method="post"
          class="w-[393px] h-[852px] relative bg-[#f8f4f1] overflow-hidden">
        @csrf
        @method('PUT')
        <div
            class="left-[191px] top-[108px] absolute text-right justify-start text-[#6d5246] text-sm font-normal">
            :تاریخ
        </div>
        <input
            value="{{ $appointment->start->format('Y/m/d') }}"
            disabled
            class="w-30 left-[140px] top-[142px] absolute text-center justify-start text-[#6d5246] text-[19px] font-bold">

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
                value="{{ old('start',$appointment->start->format('H:i')) }}"
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
                value="{{ old('end',$appointment->end->format('H:i')) }}"
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
                        @checked(in_array($personnel->id,old('personnels',$appointment->personnels->pluck('id')->toArray())))
                        type="checkbox"
                        style="accent-color:#6D5246;"
                        class=" w-5 h-5"
                    />
                </div>
            @endforeach
        </div>


    </form>

@endsection
