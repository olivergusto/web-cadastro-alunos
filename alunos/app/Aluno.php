<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
   
    public $timestamps = false;

    public $fillable = ['nome','cpf','data_nasc','nome_responsavel','grau_parentesco','endereco','bairro',
    'cidade','uf','fone1','fone2','validade','situacao','arquivo','transporte','qrcode'];

    public function setDataNascAttribute($value){

        $data = explode('/',$value);

        $nova_data = $data[2] . '-' . $data[1] . '-' . $data[0];
        $this->attributes['data_nasc'] = $nova_data;


    }

    public function getDataNascAttribute(){

        //$data = explode('-', $this->data_nasc);

        //$nova_data = $data[2] . '/' . $data[1] . '/' . $data[0];
        return date('d/m/Y', strtotime($this->attributes['data_nasc']));
    }

    public function setValidadeAttribute($value) {
        
        $data = explode('/',$value);

        $nova_data = $data[2] . '-' . $data[1] . '-' . $data[0];
        $this->attributes['validade'] = $nova_data;

    }

    public function getValidadeAttribute(){

        //$data = explode('-', $this->data_nasc);

        //$nova_data = $data[2] . '/' . $data[1] . '/' . $data[0];
        return date('d/m/Y', strtotime($this->attributes['validade']));
    }
    

    public function getCpfAttribute(){

        $cpf = $this->attributes['cpf'];

        return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 7, 3) . '-' . substr($cpf, -2);


    }

    public function getFone1Attribute(){

        $fone1 = $this->attributes['fone1'];

        return "(" . substr($fone1, 0, 2) . ")" . substr($fone1, 2, 5) . "-" . substr($fone1, -4);
        

    }

    public function getFone2Attribute(){

        $fone2 = $this->attributes['fone2'];

        return "(" . substr($fone2, 0, 2) . ")" . substr($fone2, 2, 5) . "-" . substr($fone2, -4);
        

    }
    
    
}
