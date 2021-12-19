@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
   <h1>Alunos</h1>
   
     
                    
     
                    
@stop

@section('content')
   
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
               <tbody>
                <tr>
                <div class="visible-print text-center">
	                
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Data de Nascimento</th>
                  <!--<th>Nome do Responsável</th>
                  <th>Grau Parentesco</th>
                  <th>Endereço</th>
                  <th>Bairro</th>
                  <th>Cidade</th>
                  <th>UF</th> -->
                  <th>Fone 1</th>
                  <th>Fone 2</th>
                  <!--<th>Validade da Carteirinha</th>
                  <th>Situação</th>
                  <th>Utilização do Transporte</th>
                  <th>Código QrCode</th>
                  <th>Foto</th> -->

                  <th>Opções</th>
                </tr>
                
                @foreach ($alunos as $alu)
                    <tr>
                    


                        <td>{{ $alu->nome}}</td>
                        <td>{{ $alu->cpf}}</td>
                        <td>{{ $alu->data_nasc}}</td> 
                      <!--  <td>{{ $alu->nome_responsavel}}</td>
                        <td>{{ $alu->grau_parentesco}}</td>
                        <td>{{ $alu->endereco}}</td>
                        <td>{{ $alu->bairro}}</td>
                        <td>{{ $alu->cidade}}</td>
                        <td>{{ $alu->uf}}</td> -->
                        <td>{{ $alu->fone1}}</td>
                        <td>{{ $alu->fone2}}</td>
                        <!--<td>{{ $alu->validade}}</td>
                        <td>{{ $alu->situacao}}</td>
                        <td>{{ $alu->transporte}}</td>
                        <td>{{ $alu->qrcode}}</td>
                        <td>{{ $alu->arquivo}}</td> -->
                        
                    <td> 
                        <a class="btn btn-success btn-xs" href="visualizar/{{ $alu->id}}">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="gerarPdf/{{ $alu->id}}">Gerar Carteira</a>
                        <a class="btn btn-info btn-xs" href="editar/{{ $alu->id}}">Editar</a> 
                        {{-- <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger" >
                          Excluir
                        </button> --}}
                        <a class="btn btn-danger btn-xs" href="excluir/{{ $alu->id}}" >Excluir</a>
                        {{-- <div class="modal modal-danger fade" id="modal-danger" style="display: none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Alerta</h4>
                              </div>
                              <div class="modal-body">
                                <p>Confirma exclusão?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-outline"  >Excluir</button>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div> --}}
                        
                        
                    </td>  
                    </tr>                  
                @endforeach
                <!--
                <tr>
                  <td>Teste nome</td>
                  <td>Teste telefone</td>
                  <td>Teste Idade</td>
                  <td>Teste email</td>
                  <td>Teste Opções</td>
                </tr>
                -->
               </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      

@stop
