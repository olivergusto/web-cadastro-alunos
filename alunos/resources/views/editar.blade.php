@extends('adminlte::page')

@section('title', 'Editar Aluno')

@section('content_header')
    <h1>Editar Aluno</h1> 
@stop

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro do Aluno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST">
              <div class="box-body">
                   {{ csrf_field() }}


                <div class="form-group">
                    <label for="exampleInputPassword1">ID</label>
                <input type="text" class="form-control" name="id_form" value="{{ $id }}" readonly>
                </div>

                <div class="form-group">
                  <label>Nome do Aluno</label>
                  <input type="text" class="form-control" name="nome_form" value="{{ $nome }}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CPF</label>
                  <input type="text" class="form-control" name="cpf_form" value="{{ $cpf }}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Data de Nascimento</label>
                  <input type="text" class="form-control" name="data_nasc_form" placeholder="00/00/0000" value="{{ $data_nasc }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nome do Responsável</label>
                    <input type="text" class="form-control" name="nome_responsavel_form" value="{{ $nome_responsavel }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Grau Parentesco</label>
                    <input type="text" class="form-control" name="grau_parentesco_form" value="{{ $grau_parentesco }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Endereço</label>
                    <input type="text" class="form-control" name="endereco_form" value="{{ $endereco }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bairro</label>
                    <input type="text" class="form-control" name="bairro_form" value="{{ $bairro }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cidade</label>
                    <input type="text" class="form-control" name="cidade_form" value="{{ $cidade }}" required>
                 </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">UF</label>
                    <input type="text" class="form-control" name="uf_form" value="{{ $uf }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fone 1</label>
                    <input type="text" class="form-control" name="fone1_form" value="{{ $fone1 }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fone 2</label>
                    <input type="text" class="form-control" name="fone2_form" value="{{ $fone2 }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Validade</label>
                    <input type="text" class="form-control" name="validade_form" value="{{ $validade }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Situação</label>
                    <select class="form-control" name="situacao_form" value="{{ $situacao }}">
                        <option>-</option>
                        <option>Ativo</option>
                        <option>Inativo</option>
                       
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Utiliza Transporte ?</label>
                <select class="form-control" name="transporte_form" value="{{ $transporte }}">
                    <option>-</option>
                    <option>Sim</option>
                    <option>Não</option>                        
                </select>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Código QrCode</label>
                <input type="text" class="form-control" name="qrcode_form" value=" {{ $qrcode }}"  >
                </div> --}}


                

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="arquivo" name="arquivo_form" value="{{ $arquivo }}" required>
                  <label class="custom-file-label" for="arquivo">Anexar Foto</label> 
                </div>            
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>    
@stop