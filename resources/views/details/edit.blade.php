<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('العروض') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card card-default">
                        <div class="card-header flex justify-center">

                        </div>
                        <div class="flex justify-center">
                            <div class="w-3/12 bg-white p-6 rounded-lg">

                                <form action="{{route('details.update',$details->id)}}" method="POST">
                                    @csrf
                                    @if(isset($details))
                                        @method('PUT')
                                    @endif
                                    <div class="mb-4">
                                        <x-input  type="text" name="title_ar" value="{{$details->title_ar}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال العنوان العربية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="title_en" value="{{$details->title_en}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال العنوان الانجليزية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="title_es" value="{{$details->title_es}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال العنوان بالاسبانية" />
                                    </div>
                                    <div class="mb-4">
                                        <label>أدخال التفاصيل بالعربية</label>
                                   <textarea name="description_ar" rows="5">
                                       {{$details->description_ar}}
                                          </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label>أدخال التفاصيل بالانجليزية</label>
                                        <textarea name="description_en" rows="5">
                                       {{$details->description_en}}
                                          </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label>أدخال التفاصيل بالاسبانية</label>
                                        <textarea name="description_es" rows="5">
                                       {{$details->description_es}}
                                          </textarea>
                                    </div>
                                    <x-input  type="hidden" name="id" value="{{$details->id}}" />
                                    <x-input  type="hidden" name="offer_id" value="{{$details->offer_id}}" />
                                    <div class="mb-4">
                                        <x-button type="submint" class="bg-blue-500
                             text-white rounded font-medium w-full">تعديل</x-button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

</x-app-layout>
