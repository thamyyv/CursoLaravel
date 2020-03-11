@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')
<form action=''>
        <div style='text-align:center;'>
            <label>
                Nome:
            </label>
            <input type= 'text'>
            <label>
                CPF:
            </label>
            <input id='cpf' name='cpf' type= 'int' class='cpf-mask'>
            <br> <br>
            <label>
                Endereço:
            </label>
            <input type= 'text'>
            <label>
                Bairro:
            </label>
            <input type= 'text'>
            <br><br>
            <label>
                Cidade-UF:
            </label>
            <input type= 'text'>
            <label>
                CEP:
            </label>
            <input type= 'int'>
            <br><br>
            <button class='btn btn-primary'>
                Enviar
            </button>
            <button class='btn btn-primary'>
                Cancelar
            </button>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script>$(".cpf-mask").mask('000.000.000-00');</script>
    @endpush