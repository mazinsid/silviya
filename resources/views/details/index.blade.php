<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
               تفاصيل

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="card card-default">
                       <div class="card-header">
                       <a href="{{route('details.insert',$offerid)}}" class="bg-blue-500 text-white rounded font-medium w-full">أضافة تفاصيل</a>
                       </div>
                       <div class="card-body">

                       <table class="table-fixed border-collapse border border-green-800" dir="rtl" >

                            <tbody>
                            <tr>
                                <td class="w-1/2 ...">الأسم</td>

                                <td class="w-1/3 ...">التعريف</td>
                                <td class="w-1/4 ...">تعديل</td>
                                <td class="w-1/4 ...">حزف</td>
                            </tr>
                            @foreach($details as $detail)
                                <tr class="bg-blue-200">
                                    <td>{{ $detail->title_ar }}</td>
                                    <td>{{ $detail->description_ar }}</td>
                                    <td>  <a href="{{route('details.edit',$detail)}}" class="bg-blue-500 text-white rounded font-medium w-full">تعديل</a></td>
                                    <td>
                                        <form action="{{route('details.destroy',$detail->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button >حزف</button>
                                        </form>
                                    </td>
                                </tr>
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
