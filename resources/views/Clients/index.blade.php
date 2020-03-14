@extends('Layouts.LayoutFull')
@push('css')
@endpush

@section('conteudo')


  <div style='text-align:left; margin: 10px'>
      <a class='btn btn-info fa fa-th-large text-white' href="{{route('client.create')}}">
              Adicionar
      </a>
  </div>
  <br>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">CPF</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
          @foreach($clients as $client)
          <tr>
              <th scope="row">{{$client->id}}</th>
              <td>{{$client->name}}</td>
              <td>{{$client->email}}</td>
              <td>{{$client->cpf}}</td>
              <td>
                  <a href="{{ route('client.edit',[ $client->id]) }}" class='btn btn-success fa fa-pencil text-white' aria-hidden="true" >
                    <span class='d-none d-md-inline'>
                      Editar
                    </span>
                  </a>
                  <span data-url="{{route('client.destroy',[ $client->id]) }}" data-idClients='{{ $client->id}}' class="btn btn-danger text-white deleteButton">
                    <i class="fal fa-trash"></i>
                    <span class='d-none d-md-inline'>
                      Deletar
                    </span>
                  </span>
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

    <script>
      $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idClient = $(this).data('idClient');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idClient': idClient,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
      });

    </script>
@endpush