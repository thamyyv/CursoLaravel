@extends('Layouts.LayoutFull')
@push('css')
@endpush
@section('conteudo')

<form action=''>
        <div style='text-align:center; margin: 70px'>
        <h1>Cadastre-se <span class="badge badge-secondary"span></h1>
        <br><br>
            <div clas="form-group">
                <label>
                    Nome Completo:
                </label>
                <input type= 'text' class="form-control shadow-lg bg-black rounded mx-auto col-md-6">
            </div>
            <br>
            <div class="form-group">
                <label>
                    E-mail:
                </label>
                <input type= 'text' class="form-control shadow-lg bg-black roundedv mx-auto col-md-6">
            </div>
            <div class="form-group">
                <label>
                    CPF:
                </label>
                <input id='cpf' name='cpf' type= 'text' class='cpf-mask form-control shadow-lg bg-black rounded mx-auto col-md-6'>
            </div>
            <div class="form-group">
                <label>
                    Cidade-UF:
                </label>
                <input type= 'text' class="form-control shadow-lg bg-black rounded mx-auto col-md-6">
            </div>
            <div clas="form-group">
                <label>
                    CEP:
                </label>
                <input type= 'text'  class="form-control shadow-lg bg-black rounded mx-auto col-md-6">
            </div>
            <br>
            <div>
                <label>
                    Bairro:
                </label>
                <input type= 'text'class="form-control shadow-lg bg-black rounded mx-auto col-md-6">
            </div>
            <br>
            <div class="form-group">
                <label>
                    Logradouro:
                </label>
                <input type= 'text' class="form-control shadow-lg bg-black rounded mx-auto col-md-6">
            </div>
            <button class='btn btn-success'>
                Enviar
            </button>
            <button class='btn btn-danger'>
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