<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' كل الطلبات') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card card-default">
                        <div class="card-header">
                        </div>
                        <div class="card-body">

                            <table class="table-fixed border-collapse border border-green-800" dir="rtl" >

                                <tbody>
                                <tr>
                                    <td class="w-1/2 ...">الأسم</td>
                                    <td class="w-1/3 ...">البريد الالكتروني</td>
                                    <td class="w-1/3 ...">الدول</td>
                                    <td class="w-1/4 ...">رقم الهاتف</td>
                                    <td class="w-1/4 ...">تاريخ الوصول</td>
                                    <td class="w-1/4 ...">ملاحظه</td>
                                    <td class="w-1/4 ...">البرنامج</td>
                                    <td class="w-1/4 ...">استرجاع</td>
                                    <td class="w-1/4 ...">حزف</td>
                                </tr>
                                @foreach($orders as $order)
                                    <tr class="bg-blue-200">
                                        <td>{{ $order->name}}</td>
                                        <td>{{ $order->email}}</td>
                                        <td>{{ $order->country}}</td>
                                        <td>{{ $order->phone}}</td>
                                        <td>{{ $order->start}}</td>
                                        <td>{{ $order->node}}</td>
                                        <td>{{ $order->offer_id}}</td>
                                        <td>
                                            <a href="{{route('restore.orders',$order->id)}}">استرجاع</a>
                                        </td>
                                        <td>
                                            <form action="{{route('orders.destroy',$order->id)}}" method="post">
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
