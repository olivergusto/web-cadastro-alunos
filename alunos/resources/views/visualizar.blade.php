@extends('adminlte::page')

@section('title', 'Aluno')

@section('content_header')
    <h1>Informações do Aluno</h1> 
@stop

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro do Aluno</h3>
            </div class>
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                   {{ csrf_field() }}


              <img class="profile-user-img img-responsive img-circle" src="/storage/{{$arquivo}}">
              
                  <label>Nome do Aluno</label>
                  <input type="text" class="form-control" name="nome_form" value="{{ $nome }}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CPF</label>
                  <input type="text" class="form-control" name="cpf_form" value="{{ $cpf }}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Data de Nascimento</label>
                  <input type="text" class="form-control" name="data_nasc_form" placeholder="00/00/0000" value="{{ $data_nasc }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nome do Responsável</label>
                    <input type="text" class="form-control" name="nome_responsavel_form" value="{{ $nome_responsavel }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Grau Parentesco</label>
                    <input type="text" class="form-control" name="grau_parentesco_form" value="{{ $grau_parentesco }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Endereço</label>
                    <input type="text" class="form-control" name="endereco_form" value="{{ $endereco }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bairr</label>
                    <input type="text" class="form-control" name="bairro_form" value="{{ $bairro }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cidade</label>
                    <input type="text" class="form-control" name="cidade_form" value="{{ $cidade }}" readonly>
                 </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">UF</label>
                    <input type="text" class="form-control" name="uf_form" value="{{ $uf }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fone 1l</label>
                    <input type="text" class="form-control" name="fone1_form" value="{{ $fone1 }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fone 2</label>
                    <input type="text" class="form-control" name="fone2_form" value="{{ $fone2 }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Validade</label>
                    <input type="text" class="form-control" name="validade_form" value="{{ $validade }}" readonly>
                </div>
                <div class="form-group">
                        <label for="exampleInputPassword1">Situação</label>
                        <input type="text" class="form-control" name="situacao_form" value="{{ $situacao }}" readonly>
                </div>
                <div class="form-group">
                        <label for="exampleInputPassword1">Utiliza Transporte</label>
                        <input type="text" class="form-control" name="transporte_form" value="{{ $transporte }}" readonly>
                </div>

               
               
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Código QrCode</label>
                   
                <input type="text" class="form-control" name="qrcode_form" value=" {{ $qrcode }}" readonly>
                </div> --}}


                {{-- <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                <input type="text" class="form-control"  name="arquivo_form" value="{{ $arquivo }}" readonly>                  
                </div>   
                 --}}


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="back" class="btn btn-primary">Voltar</button>
              </div>
              {{-- <a class="btn btn-warning btn-xs" href="gerarPdf/{{ $alu->id}}">Gerar Carteira</a> --}}
            </form>
          </div>    
@stop