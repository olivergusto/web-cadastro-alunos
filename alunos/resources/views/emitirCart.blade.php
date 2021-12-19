<!DOCTYPE html>
<html>
<style>
 
body{
	
	margin: 0px;
	padding-top: 10px;
	background-repeat: repeat-x;
}
body, input, select, option{
	font-size:12px;
	font-family:"Courier New", Courier, monospace;
	
	
}
input, select {
	border:1px solid #003;
	color:#33F;
	text-transform:uppercase;
	
}
label{
	font-weight:bold;
}

#apDiv1 {
	position:absolute;
	left:5px;
	top:5px;
	width:184px;
	height:39px;
	z-index:1;
}
.FONTE {
	font-size: 18px;
}
	
</style>


<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Emissão de Carteirinha</title>

</head> 
    <body>
    <table width="400" height="251" border="0" align="center" cellpadding="0" cellspacing="0" background="../../image/fundo.jpg" cols="0" hspace="0" vspace="10">
          <tr>
            <td height="34" colspan="5" align="center" bgcolor="#FFCC00">SECRETARIA MUNICIPAL DA EDUCAÇÃO              <br> LAMBARI-MG<br>        
            TRANSPORTE ESCOLAR</td>
          </tr>
          <tr>
            <td width="2" align="center" valign="middle" bgcolor="#000000">&nbsp;</td>
            <td width="87" align="center" valign="middle"><h6><img src="/storage/{{$alunos->arquivo}}" width="97" height="120"></h6></td>
            <!--<td width="87" align="center" valign="middle"><h6> <img src="{{ url('{$alunos->arquivo}') }}" width="62" height="72"></h6></td>-->

            <!-- <img src="{!! asset('img/logomarca-c.svg') !!}"> -->
            <td width="152" align="left" valign="middle"> Aluno: {{$alunos->nome}} <br>
CPF: {{ $alunos->cpf}}<br>
End: {{ $alunos->endereco}}<br>
Bairro: {{$alunos->bairro}}

<p></p></td>
            <td width="97" align="center" valign="middle">{!! $alunos->barcode !!} </td>
            <td width="2" height="155" align="center" valign="middle" bgcolor="#000000">&nbsp;</td>
          </tr>
          <tr>
            <td height="45" colspan="5" align="center" valign="baseline" bgcolor="#FFCC00"><h5>E IMPRESCINDÍVEL A APRESENTAÇÃO DA <br> CARTEIRA               DE EMBARQUE PARA               USO DO TRANSPORTE ESCOLAR <br>
            VALIDADE: 31/12/2019</h5>
            
      </tr>
    </table>
        

               
 
</body>
</html>