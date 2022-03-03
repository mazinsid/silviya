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
                            <a href="{{route('Users.create')}}"
                               class="bg-blue-500 text-white rounded font-medium w-full"> أضافة جديد</a>
                        </div>
                        <div class="card-body">

                            <table class="table-fixed border-collapse border border-green-800" dir="rtl" >

                            <tr>
                            <td>name</td>
                            <td>email</td>
                            <td>delete</td>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="{{route('user.destroy',$user->id)}}" method="get">
                                        @csrf
                                        @method('DELETE')
                                        <x-button >حزف</x-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
            </div>
                    </div>
        </div>
    </div>
</x-app-layout>

