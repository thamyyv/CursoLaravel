@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')
@if ($errors->any())
    <div class='alert alert-danger'>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method='POST' action="{{route('client.store')}}" class="form-horizontal form-validate">
    {{csrf_field() }}
        
        <div style='text-align:center; margin: 70px'>
            <h1>Cadastre seu livro <span class="badge badge-secondary"span></h1> <br><br>
            <div clas="form-group">
                <label>
                    Nome do livro:
                </label>
                <input id='name' name='name' type= 'text' class="form-control shadow-lg bg-black rounded mx-auto col-md-6" value="{{old('name')}}">
            </div>
            <br>
            <div class="form-group">
                <label>
                    Autor:
                </label>
                <input id='write' name='write' type= 'text' class="form-control shadow-lg bg-black roundedv mx-auto col-md-6" value="{{old('write')}}">
            </div>
            <div class="form-group">
                <label>
                    Paginas:
                </label>
                <input id='page_number' name='page_number' type= 'text' class='cpf-mask form-control shadow-lg bg-black rounded mx-auto col-md-6' value="{{old('cpage_number')}}">
            </div>
            <button type='Submit' class='btn btn-success'>
                Enviar
            </button>
        </div>
    </form>
    
@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>$(".cpf-mask").mask('000.000.000-00');</script>
@endpush