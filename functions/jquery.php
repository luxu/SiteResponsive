<?php

//setTimeout(function(){$("#retorno").fadeOut("slow") }, 1500);
function ajaxjQuery($arquivo, $idFocus, $tipo=null, $idForm='form') {
   $tipo = $tipo != null && is_string($tipo) ? $tipo : '$("#' . $idFocus . '").focus();';
   $ret = '
	<script>' . "\n";
   $ret .= '$(function(){' . "\n";
   $ret .= '    $("#' . $idFocus . '").focus();' . "\n";
   $ret .= '	$("#' . $idForm . '").submit(function(e){' . "\n";
   $ret .= '      e.preventDefault();' . "\n";
   $ret .= '      $("#load").show();' . "\n";
   $ret .= '      $("#retorno").empty().hide();' . "\n";
   $ret .= '      $.post("' . $arquivo . '", $("#' . $idForm . '").serialize(), function(retorno){' . "\n";
   $ret .= '         ret = retorno.split("+");' . "\n";
   $ret .= '         classe = (ret[0]=="sucess") ? "sucess" : "errors";' . "\n";
   $ret .= '         if(classe == "sucess"){ ' . "\n";
   $ret .= '				$("#limpar").trigger("click");' . "\n";
   $ret .= '				setTimeout(function(){' . "\n";
   $ret .= '                   $("#retorno").empty().fadeOut("slow");' . "\n";
   $ret .= '                   '. $tipo . ';' . "\n";
   $ret .= '                   },150);}' . "\n";
   $ret .= '                 $("#load").hide();' . "\n";
   $ret .= '                 $("#retorno").show().html("<span class=\'"+classe+"\'>"+ret[1]+"</span>");' . "\n\n";
   $ret .= '		});' . "\n\n";
   $ret .= '	});' . "\n\n";
   $ret .= '});' . "\n";
   $ret .= '</script>' . "\n";
   echo $ret;
}

function DataTable() {
   $ret = '
	<script>' . "\n";
   $ret .= '$(document).ready( function() {' . "\n";
   $ret .= '   oTable = $("#example").dataTable({' . "\n";
   $ret .= '      "bPaginate": true,' . "\n";
   $ret .= '      "aaSorting": [[ 0, "desc" ]],' . "\n";
   $ret .= '      "iDisplayLength" : 10,' . "\n";
   $ret .= '      "bJQueryUI": true,' . "\n";
   $ret .= '      "sPaginationType": "full_numbers",' . "\n";
   $ret .= '      "oLanguage": {' . "\n";
   $ret .= '            "sInfo": "_START_/_END_=_TOTAL_",' . "\n";
   $ret .= '            "sInfoEmpty": "Nenhum registro para exibir",' . "\n";
   $ret .= '            "sLengthMenu": "_MENU_",' . "\n";
   $ret .= '            "sInfoFiltered": "(filtrando de _MAX_ registros)",' . "\n";
   $ret .= '            "sLoadingRecords": "Carregando...", ' . "\n";
   $ret .= '            "sSearch" : "",' . "\n";
   $ret .= '            "sInfoFiltered" : ""' . "\n";
   $ret .= '       }' . "\n";
   $ret .= '   })' . "\n";
   $ret .= '});' . "\n";
   $ret .= '</script>' . "\n";

   echo $ret;
}

function datapicker($id) {
  $ret = '
	<script>' . "\n";
  $ret .= 'jQuery(function(){' . "\n";
  $ret .= '$("#' . $id . '").datapicker();'. "\n";
  $ret .= 'return;'. "\n";
  $ret .= '});' . "\n";
  $ret .= '</script>' . "\n";
  echo $ret;
}
 
function QtdRodada() {
   $ret = '
	<script>' . "\n";
   $ret .= '$(document).ready( function() {' . "\n";
   $ret .= '$("#valor1, #valor2").blur(function(){' . "\n";
   $ret .= '    var valor1 = $("#valor1").val();' . "\n";
   $ret .= '    var valor2 = $("#valor2").val();' . "\n";
   $ret .= '    $("#total").val(parseInt(valor1)+parseInt(valor2));' . "\n";
   $ret .= '})' . "\n";
   $ret .= '});' . "\n";
   $ret .= '</script>' . "\n";

   echo $ret;
}

function botaoNovo($arquivo) {
	$ret = '
		<script>' . "\n";
	$ret .= '$("#novo").live("click", function() {' . "\n";
	$ret .= 'var url = "'.$arquivo.'";' . "\n";
	$ret .= '$(location).attr("href",url);' . "\n";
	$ret .= '}); ' . "\n";
	$ret .= '</script>' . "\n";
	echo $ret;
}

function botaoProducao($arquivo) {
	$ret = '
		<script>' . "\n";
	$ret .= '$("#producao").live("click", function() {' . "\n";
	$ret .= 'var url = "'.$arquivo.'";' . "\n";
	$ret .= '$(location).attr("href",url);' . "\n";
	$ret .= '}); ' . "\n";
	$ret .= '</script>' . "\n";
	echo $ret;
}
