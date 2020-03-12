@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')

<div style='text-align:left; margin: 10px'>
    <a class='btn btn-info'>
            Adicionar
    </a>
</div>
 <br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
        @foreach($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->cpf}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>
                <a class='btn btn-success'>
                    Enviar
                </a>
                <a class='btn btn-danger'>
                    Cancelar
                </a>
            </td>
        </tr>
        @endforeach
  </tbody>
</table>

@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>$(".cpf-mask").mask('000.000.000-00');</script>
    @endpush