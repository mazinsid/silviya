<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('العروض') }}
        </h2>
    </x-slot>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="card card-default">
                       <div class="card-header flex justify-center">أضافة معلم
                       </div>
                       <div class="flex justify-center">
                       <div class="w-3/12 bg-white p-6 rounded-lg">

                           <form action="{{route('tourism.store') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                           <div class="mb-4">
                                <x-input type="text" name="name_ar"
                                       class="block mt-2 w-full"
                                       placeholder="أدخال الاسم بالعربية" />
                           </div>
                               <div class="mb-4">
                                   <x-input type="text" name="name_en"
                                          class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                          placeholder="أدخال الاسم بالانجليزية" />
                               </div>
                               <div class="mb-4">
                                   <x-input type="text" name="name_es"
                                          class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                          placeholder="أدخال الاسم بالاسبانية" />
                               </div>
                               <div class="mb-4">
                                   <label>أدخال التفاصيل العربية</label>
                                   <textarea   rows="4"  name="description_ar">
                                          </textarea>
                               </div>
                               <div class="mb-4">
                                   <label>أدخال التفاصيل الانجليزية</label>
                                   <textarea rows="4" name="description_en">
                                   </textarea>
                               </div>
                               <div class="mb-4">
                                   أدخال التفاصيل الاسبانية
                                   <textarea rows="4" name="description_es"></textarea>
                               </div>
                               <div class="mb-4">
                                   <x-input type="file"  name="image"
                                            class="block mt-1 w-full" />
                               </div>
                             <div class="flex items-center justify-end mt-4">
                             <x-button type="submint" class="ml-3
                             text-center  w-full">أدخال</x-button>
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
