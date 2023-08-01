<x-app-layout>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn">Sair</button>
    </form>
</x-app-layout>
