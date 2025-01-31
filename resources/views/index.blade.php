<x-layout>
    @auth
     <ul>
        <li>Name : {{auth('web')->user()->name}}</li>
        <li>Name : {{auth('web')->user()->email}}</li>
    </ul>   
    <form action="{{route('logout')}}">
        @csrf
        <button class="py-2 px-5 font-semibold rounded bg-slate-700 text-slate-200 w-1/2 mx-auto">Logout</button>
    </form>
    @else
    <a href="/login" class="text-blue-600 hover:underline">Login</a>
    @endauth
</x-layout> 