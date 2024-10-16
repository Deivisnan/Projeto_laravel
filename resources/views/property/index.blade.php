@extends('property.master')

@section('content')
    <div class="container">
    <h1 class="titulo">Listagem de Imóveis</h1>


    @if (!empty($properties))
        <table class="property-table">
           <thead class="bg-primary text-white">
            <tr>
                    <th>Título</th>
                    <th>Valor de Locação</th>
                    <th>Valor de Compra</th>
                    <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>R$ {{ number_format($property->rental_price, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($property->sale_price, 2, ',', '.') }}</td>
                    <td>
                        <a class="action-button view" href="{{ url('/imoveis/' . $property->name) }}">Ver mais</a>
                        <a class="action-button edit" href="{{ url('/imoveis/editar/' . $property->name) }}">Editar</a>
                        <form class="form-container" action="{{ url('/imoveis/remover/' . $property->name) }}" method="POST" style="display:inline;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="action-button remove">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum imóvel cadastrado.</p>
    @endif
    </div>
@endsection

