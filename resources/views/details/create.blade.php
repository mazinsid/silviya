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
                           <form action="{{route('details.store')}}" method="POST">
                           @csrf
{{--                               @method('PUT')--}}
                           <div class="mb-4">
                                <x-input  type="text" name="title_ar"
                                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                       placeholder="أدخال العنوان الغربية" />
                           </div>
                           <div class="mb-4">
                                <x-input  type="text" name="title_en"
                                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                       placeholder="أدخال العنوان الانجليزية" />
                           </div>
                           <div class="mb-4">
                                <x-input  type="text" name="title_es"
                                       class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                       placeholder="أدخال العنوان الاسبانية" />
                           </div>
                               <div class="mb-4">
                                   <label>أدخال التفاصيل العربية</label>
                                   <textarea name="description_ar" rows="5">
                                          </textarea>
                               </div>
                               <div class="mb-4">
                                   <label>أدخال التفاصيل الانجليزية</label>
                                   <textarea name="description_en" rows="5">
                                          </textarea>
                               </div>
                               <div class="mb-4">
                                   <label>أدخال التفاصيل الاسبانية</label>
                                   <textarea rows="5" name="description_es">
                                          </textarea>
                               </div>
                               <x-input  type="hidden" name="offer_id" value="{{$offerid}}" />
                             <div class="mb-4">
                             <x-button type="submint" class="bg-blue-500
                             text-white rounded font-medium w-full">اضافة</x-button>
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
