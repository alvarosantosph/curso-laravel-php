@extends('site.layout')

@section('title', 'Curso Laravel')

@section('conteudo')

    <div class="row container">

        @foreach ($produtos as $produto)
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produto->imagem }}">

                        @can('verProduto', $produto)
                            <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">remove_red_eye</i></a>
                        @else

                        @endcan

                         {{-- @can('verProduto', $produto)
                         @else
                         @endcannot --}}

                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ Str::limit($produto->nome, 20) }}</span>
                        <p>{{ Str::limit($produto->descricao, 20) }}</p>
                    </div>
                </div>
            </div>
        @endforeach



    </div>

    <div class="row center">
        {{ $produtos->links('custom.pagination') }}
    </div>

   {{-- @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso'])
    @component('components.sidebar')
        @slot('paragrafo')
            Texto Qualquer vindo do Slot
        @endslot
    @endcomponent --}}

    {{-- Isso é um comentário --}}

    {{-- isset($nome) ? 'existe' : 'não existe' --}}

    {{-- $teste ?? 'padrão' --}}

    {{-- @if ($nome === 'Alvaro')
        true
    @else
        false
    @endif --}}

    {{-- Verificar se usuário está autenticado --}}

    {{-- @auth
        Autenticado
    @endauth

    @guest
        Não autenticado
    @endguest --}}

    {{-- @foreach ($frutas as $item)
        {{ $item }}
    @endforeach --}}

    {{-- @forelse ($frutas as $item)
        {{ $item }}
    @empty
        O array está vazio
    @endforelse --}}

@endsection
