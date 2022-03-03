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
                        <div class="card-header flex justify-center">
                            تعديل
                        </div>
                        <div class="flex justify-content-lg-start">
                            <div class="w-3/12 bg-white p-6 rounded-lg">

                                <form action="{{route('tourism.update',$tourism->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(isset($tourism))
                                        @method('PUT')
                                    @endif
                                    <div class="mb-4">
                                        <x-input type="text" name="name_ar" value="{{$tourism->name_ar}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال الاسم بالعربية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input type="text" name="name_en" value="{{$tourism->name_en}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال الاسم بالانجليزية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input type="text" name="name_es" value="{{$tourism->name_es}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال الاسم بالاسبانية" />
                                    </div>
                                    <div class="mb-4">
                                        <label>أدخال التفاصيل العربية</label>
                                   <textarea  name="description_ar" rows="4">{{$tourism->description_ar}}
                                          </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label>أدخال التفاصيل الانجليزية</label>
                                   <textarea  name="description_en" rows="4">{{$tourism->description_en}}
                                          </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label>أدخال التفاصيل الاسبانية</label>
                                        <textarea rows="4"  name="description_es">{{$tourism->description_es}}
                                          </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <td><img src="{{ asset('storage/'.$tourism->image)}}"></td>

                                        <x-input type="file"  name="image"
                                               class="bg-gray-100 border-2
                                w-full p-4 rounded-lg" />
                                    </div>
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
