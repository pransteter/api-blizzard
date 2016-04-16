{extends file="../main.tpl"}

{block name="content"}
	<label for="id">
		{$usuario.id}
	</label>
	<br>
	<label for="nome">
		{$usuario.nome}
	</label>
	<br>
	<label for="idade">
		{$usuario.idade}
	</label>
{/block}
