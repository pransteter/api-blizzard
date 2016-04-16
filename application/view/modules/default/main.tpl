{extends file="../../template/main.tpl"}

{block name="content"}
	<label for="id">
		ID: {$usuario->id}
	</label>
	<br>
	<label for="nome">
		Nome: {$usuario->name}
	</label>
	<br>
	<label for="idade">
		Idade: {$usuario->age}
	</label>
{/block}
