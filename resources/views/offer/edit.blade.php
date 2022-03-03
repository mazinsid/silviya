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
                            تعديل
                        </div>
                        <div class="flex justify-center">
                            <div class="w-3/12 bg-white p-6 rounded-lg">

                                <form action="{{route('offers.update',$offers->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(isset($offers))
                                        @method('PUT')
                                    @endif
                                    <div class="mb-4">
                                        <x-input  type="text" name="name_ar" value="{{$offers->name_ar}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال الاسم بالعربية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="name_en" value="{{$offers->name_en}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال الاسم بالانجليزية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="name_es" value="{{$offers->name_es}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال الاسم بالاسبانية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="type_ar" value="{{$offers->type_ar}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال النوع بالعربية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="type_en" value="{{$offers->type_en}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال النوع بالانجليزية" />
                                    </div>
                                    <div class="mb-4">
                                        <x-input  type="text" name="type_es" value="{{$offers->type_es}}"
                                               class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                                               placeholder="أدخال النوع بالاسبانية" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="name">عن البرنامج بالعربية</label>
                                        <textarea name="node_ar" rows="5">
                                            {{$offers->node_ar}}
                                </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="name">عن البرنامج بالانجليزية</label>
                                        <textarea name="node_en"  rows="5" >
                                    {{$offers->node_en}}
                                </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="name">عن البرنامج بالاسبانية</label>
                                        <textarea name="node_es"  rows="5">
                                    {{$offers->node_es}}
                                </textarea>
                                    </div>

                                    <div class="mb-4">
                                        <x-input  type="text" name="price" value="{{$offers->price}}"
                                               class="bg-gray-100 border-2
                                w-full p-4 rounded-lg" placeholder="أدخال السعر" />
                                    </div>
                                    <div class="mb-4">
                                        <td><img src="{{ asset('storage/'.$offers->image)}}"></td>

                                        <x-input  type="file"  name="image"
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
