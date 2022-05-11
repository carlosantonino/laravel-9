    {{-- Importando template --}}
    
    @extends('layouts.app')

    @section('title', 'Listagem dos Usuários')

    @section('content')

    {{-- Conteudo dinâmico --}}

    <h1>
        Listagem de Usuários
        (<a href="{{ route('users.create')}}">+</a>)

    </h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - 
                {{ $user->email }}
            </li>
            
        @endforeach
    </ul>

    @endsection
    
   