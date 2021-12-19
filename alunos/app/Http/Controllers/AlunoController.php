<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Facades\Storage;

use Milon\Barcode\DNS2D;

class AlunoController extends Controller
{
    public function index(){
       $aluno = Aluno::orderBy('nome', 'asc')->get();
       
       $array_alunos = array('alunos'=>$aluno);
     
       return view('home', $array_alunos);
       

    }

    public function gerarPdf($id){

    $alunos = Aluno::find($id);

    $dados = [
        'nome' => $alunos->nome,
        'nome_responsavel' => $alunos->nome_responsavel,
        'endereco' => $alunos->endereco,
        'bairro' => $alunos->bairro,
        'fone1' => $alunos->fone1,
        'fone2' => $alunos->fone2,
        'situacao' => $alunos->situacao,
        'arquivo' => $alunos->arquivo
    ];

    //  dd($dados);
    
    $barcode = DNS2D::getBarcodeHTML(\json_encode($dados), "QRCODE",2,2);

    $alunos->barcode=$barcode;


    // return dd($alunos);
       
    return view('emitirCart', compact('alunos'));
 
    // return \PDF::loadView('emitirCart', compact('alunos'))
    //             // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
    //             ->stream('nome-arquivo-pdf-gerado.pdf');
                
     
    }

   

    

    public function novo(){

        return view('novo');

    }

    public function editar($id){

        $aluno = Aluno::find($id);
    //    $aluno->arquivo = $request->file('arquivo_form')->storeAs('imagens', $aluno->cpf.".png"); 

        return view('editar', $aluno);
    }

    public function excluir($id){

        $aluno = Aluno::find($id);

        // public function destoy{
        //     $aluno = Aluno::find($request->arquivo_form);
        //     if(isset($aluno)){
        //         $arquivo = $post->arquivo;
        //         Storage::disk('imagens')->delete($arquivo);
        //         $aluno->delete();
        // }
        // return redirect('/');
        // }
        

        $aluno->delete();
        return redirect('/')->with('success', 'Aluno excluido com sucesso!');
    }

    public function visualizar($id){


        $aluno = Aluno::find($id);
        // dd($aluno->arquivo);
        

        
        return view('visualizar', $aluno);
    }

    public function voltar(){
       

        return redirect('/');
       
    }

    public function adicionar(Request $request){
       
        

        //return dd($request->all());
        try{
        $aluno = new Aluno;

        $aluno->nome = $request->nome_form;
        $aluno->cpf = $request->cpf_form;
        //$data = explode('/',$request->data_nasc_form);

       // $nova_data = $data[2] . '-' . $data[1] . '-' . $data[0];
            
        // $path = $request->file('arquivo_form')->adcionar('imagens','public'); 
        

        $aluno->data_nasc = $request->data_nasc_form;
        $aluno->nome_responsavel = $request->nome_responsavel_form;
        $aluno->grau_parentesco = $request->grau_parentesco_form;
        $aluno->endereco = $request->endereco_form;
        $aluno->bairro = $request->bairro_form;
        $aluno->cidade = $request->cidade_form;
        $aluno->uf = $request->uf_form;
        $aluno->fone1 = $request->fone1_form;
        $aluno->fone2 = $request->fone2_form;
        $aluno->validade = $request->validade_form;
        $aluno->situacao = $request->situacao_form;
        $aluno->arquivo = $request->file('arquivo_form')->storeAs('imagens', $aluno->cpf.".png");
        // dd($aluno->arquivo);
        
        
         
        
        $aluno->transporte = $request->transporte_form;

        
        

        

        $aluno->save();

        return back()->with('success', 'Aluno cadastrado com sucesso!');
        } catch(\Exception $erro)  {
          
          
            return $erro->getMessage();
            //  return back()->with('error', 'Ocorre um erro ao cadastrar!');
        }  
    }

    // public function store(Request $request) {

    //     $path = $request->file('arquivo_form')->store('imagens','public');

    //     $aluno = new Aluno();
    //     $aluno->arquivo = $path;
    //     $aluno->save();
        
    //     return redirect('/');
    // }


    public function update(Request $request){

        $aluno = Aluno::find($request->id_form);

        $aluno->nome = $request->nome_form;
        $aluno->cpf = $request->cpf_form;
        $aluno->data_nasc = $request->data_nasc_form;
        $aluno->nome_responsavel = $request->nome_responsavel_form;
        $aluno->grau_parentesco = $request->grau_parentesco_form;
        $aluno->endereco = $request->endereco_form;
        $aluno->bairro = $request->bairro_form;
        $aluno->cidade = $request->cidade_form;
        $aluno->uf = $request->uf_form;
        $aluno->fone1 = $request->fone1_form;
        $aluno->fone2 = $request->fone2_form;
        $aluno->validade = $request->validade_form;
        $aluno->situacao = $request->situacao_form;
        $aluno->arquivo = $request->file('arquivo_form')->storeAs('imagens', $aluno->cpf.".png");
        $aluno->transporte = $request->transporte_form;

        
        // {
        //     $aluno = Aluno::find($request->arquivo_form);
        //     if(isset($aluno)){
        //         $arquivo = $post->arquivo;
        //         Storage::disk('imagens')->delete($arquivo);
        //         $aluno->delete();
        // }
        // return redirect('/');
        // }
        

        $aluno->save();

        return redirect('/')->with('success', 'Aluno editado com sucesso!');


    }

}
