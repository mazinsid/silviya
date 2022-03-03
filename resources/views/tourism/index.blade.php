<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' كل المعالم') }}
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
                       <div class="card-header">
                       <a href="{{route('tourism.create')}}" class="bg-blue-500 text-white rounded font-medium w-full"> أضافة معلم جديد</a>
                       </div>
                       <div class="card-body">

                       <table class="table-fixed border-collapse border border-green-800" dir="rtl" >

                            <tbody>
                            <tr>
                                <td >الأسم</td>
                                <td >التعريف</td>
                                <td >الصورة</td>
                                <td >معرض الصور</td>
                                <td >تعديل</td>
                                <td >حزف</td>
                            </tr>
                            @foreach($tourisms as $tourism)
                                <tr class="bg-blue-200">
                                <td>{{ $tourism->name_ar }}</td>
                                <td>{{ $tourism->description_ar }}</td>
                                <td><img src="{{ asset('storage/'.$tourism->image)}}"></td>
                                <td>  <a href="{{route('demo.show',$tourism->id)}}" class="bg-blue-500 text-white rounded font-medium w-full">معرض الصور</a></td>
                                <td>  <a href="{{route('tourism.edit',$tourism->id)}}" class="bg-blue-500 text-white rounded font-medium w-full">تعديل</a></td>
                                    <td>
                                        <form action="{{route('tourism.destroy',$tourism->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button >حزف</button>
                                        </form>
                                    </td> </tr>
                             @endforeach
                            </tbody>
                            </table>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
