<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' كل العروض') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card card-default">
                        <div class="card-header">
                            <a href="/offers/create" class="bg-blue-500 text-white rounded font-medium w-full">أضافة العرض</a>
                        </div>
                        <div class="card-body">

                            <table class="table-fixed border-collapse border border-green-800" dir="rtl" >

                                <tbody>
                                <tr>
                                    <td class="w-1/4 ...">الأسم</td>
                                    <td class="w-1/4 ...">النوع</td>
                                    <td class="w-1/4 ...">التعريف</td>
                                    <td class="w-1/4 ...">السعر</td>
                                    <td class="w-1/4 ...">الصورة</td>
                                    <td class="w-1/4 ...">استرجاع</td>
                                    <td class="w-1/4 ...">حزف</td>
                                </tr>
                                @foreach($offers as $offer)
                                    <tr class="bg-blue-200">
                                        <td>{{ $offer->name_ar }}</td>
                                        <td>{{ $offer->type_ar }}</td>
                                        <td>{{ $offer->node_ar }}</td>
                                        <td>{{ $offer->price }}</td>
                                        <td><img src="{{ asset('storage/'.$offer->image)}}"></td>
                                        <td>
                                            <a href="{{route('restore.offer',$offer->id)}}">استرجاع</a>
                                        </td>
                                        <td>
                                            <form action="{{route('offers.destroy',$offer->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button >حزف</button>
                                            </form>
                                        </td>   </tr>
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
