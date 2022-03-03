<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" dir="rtl">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row justify-content-center">
                        <div class="col-md-4 justify-content-lg-start scrollbox">
                                <div class="card-header">العروض {{$offersT+$offers}}</div>
                                <div class="card-body">
                                    العروض النشطة  {{$offers}}<br>
                                    العروض المحزوفة  {{$offersT}}<br>
                                    </div>
                            </div>
                        <div class="col-md-4 justify-content-lg-start scrollbox">
                                <div class="card-header">ألطلبات {{$orderT+$order}}</div>
                                <div class="card-body">
                                    ألطلبات النشطة  {{$order}}<br>
                                    ألطلبات المحزوفة  {{$orderT}}<br>
                                    </div>
                            </div>
                        <div class="col-md-4 justify-content-lg-start scrollbox">
                                <div class="card-header">ألمعالم السياحية  {{$tourisms}}</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
