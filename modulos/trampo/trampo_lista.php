<link href="../util/estilos.css" rel="stylesheet" type="text/css" />
<table width="521" border="1px" cellspacing="2" class="borda_tabela">
  <tr  class="titulos_lista_pesquisa">
    <td colspan="4" align="left"><h2 align="center">Lista de Cidades</h2>
      <form id="form_pesquisa" name="form_pesquisa" method="post" 
      action="index.php?tabela=cidade&acao=listar">
        <label for="pesquisa">Pesquisa.: </label>
        <input name="pesquisa" type="text" id="pesquisa" size="50" />
        <input type="submit" name="button" id="button" value="Pesquisar" />
      </form>
    <p>&nbsp;</p></td>
  </tr>
  <tr class="ordenacao_novo_registro">
    <td width="193"><a href="index.php?tabela=cidade&acao=listar&ordem=cid_descricao">Descrição</td>
    <td width="70"><a href="index.php?tabela=cidade&acao=listar&ordem=cid_uf">UF</td>
    <td colspan="2" align="center"><a href="index.php?tabela=cidade&acao=incluir">Novo Registro</a></td>
  </tr>
<?php
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObj())
	{
?>
  <tr onmouseover="muda_cor_over(this)" onmouseout="muda_cor_out(this)" >
    <td class="itens_tabela_banco"><?php echo $oquefazer->registros->cid_descricao;?></td>
    <td class="itens_tabela_banco"><?php echo $oquefazer->registros->cid_uf;?></td>
    <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';" onMouseOut="this.className='alterar_excluir';" width="83">
        <a href="index.php?tabela=cidade&acao=alterar&codigo=<?php echo $oquefazer->registros->cid_codigo;?>">Alterar</a>
    </td>
    <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';" onMouseOut="this.className='alterar_excluir';" width="107">
    	<a href="javascript:if(confirm('Deseja exlcuir esse registro?')){location='index.php?tabela=cidade&acao=excluir&codigo=<?php echo $oquefazer->registros->cid_codigo;?>';}">Excluir</a>
    </td>
  </tr>
  <?php } ?>
  <tr class="titulos_lista_pesquisa">
    <td colspan="4"><p>Nro de registros: <?php echo $oquefazer->total_registros(); ?></p>
    <p>e-mail: zicadopv@gmail.com</p></td>
  </tr>
</table>