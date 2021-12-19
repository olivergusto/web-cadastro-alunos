@extends('adminlte::page')

@section('title', 'Novo Aluno')

@section('content_header')
   <!-- <h1>Novo Aluno</h1> -->
@stop

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro do Aluno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                   {{ csrf_field() }}
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" class="form-control" name="nome_form">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CPF</label>
                  <input type="text" class="form-control" name="cpf_form">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Data de Nascimento</label>
                  <input type="text" class="form-control" name="data_nasc_form" data-mask="00/00/0000" data-mask-selectonfocus="true" placeholder="00/00/0000">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nome do Responsável</label>
                    <input type="text" class="form-control" name="nome_responsavel_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Grau Parentesco</label>
                    <input type="text" class="form-control" name="grau_parentesco_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Endereço</label>
                    <input type="text" class="form-control" name="endereco_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Bairro</label>
                    <input type="text" class="form-control" name="bairro_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cidade</label>
                    <input type="text" class="form-control" name="cidade_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">UF</label>
                    <input type="text" class="form-control" name="uf_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fone 1</label>
                    <input type="text" class="form-control" name="fone1_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fone 2</label>
                    <input type="text" class="form-control" name="fone2_form">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Validade</label>
                    <input type="text" class="form-control" name="validade_form" data-mask="00/00/0000" data-mask-selectonfocus="true" placeholder="00/00/0000">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Situação</label>
                  <select class="form-control" name="situacao_form">
                      <option>-</option>
                      <option>Ativo</option>
                      <option>Inativo</option>
                     
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Utiliza Transporte ?</label>
                    <select class="form-control" name="transporte_form">
                        <option>-</option>
                        <option>Sim</option>
                        <option>Não</option>                        
                      </select>
                  </div>


                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Código QrCode</label>
                  
                  <input type="text" class="form-control" name="qrcode_form"> 
                </div>             --}}

                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="arquivo"  name="arquivo_form">
                  <label class="custom-file-label" for="arquivo">Anexar Foto</label>
                </div>
               
                
                  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>    
@stop