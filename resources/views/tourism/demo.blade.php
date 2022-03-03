<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' كل المعالم') }}
        </h2>
    </x-slot>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <form action="{{route('demo.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <input type="hidden" name="tourism_id" value="{{$tourismid}}">
                    <input type="file"  name="image"
                           class="bg-gray-100 border-2
                                w-full p-4 rounded-lg" >
                </div>
                <button type="submint" class="bg-blue-500
                             text-white rounded font-medium w-full">أدخال</button>
        </form>
    </div>
    @foreach($demos as $demo)
        <div class="mb-4">
    <div class="gallery">
            <img src="{{ asset('storage/'.$demo->image)}}" alt="Cinque Terre" width="600" height="400">

    </div>
             <form method="post" action="{{route('demo.destroy',$demo->id)}}">

                @csrf
                @method('DELETE')
                <button >حزف</button>
            </form>
        </div>
    @endforeach


</x-app-layout>
