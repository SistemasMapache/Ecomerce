<?php //ecomerce.php

$xml= simplexml_load_file("/Users/Ricardo/Sites/ecomerce/xml/ecomerce.xml");
$dom= simplexml_import_dom($xml);

$numprodutos= $dom->count();



for ($i=0; $i<$numprodutos; $i++){
	
	$dentro= $dom->produto[$i];
	
	$tipoproduto=$dentro->tipoproduto;
	$nomeproduto=$dentro->nomeproduto;
	$marcaproduto=$dentro->marcaproduto;
	$descricaoproduto=$dentro->descricaoproduto;
	$especificacoesproduto=$dentro->especificacoesproduto;
	$precoproduto=$dentro->precoproduto;
	$idproduto=$dentro->idproduto;
	
	echo <<< _END

    </br>
	Tipo: $tipoproduto
	</br>
	Nome: $nomeproduto
	</br>
	Marca: $marcaproduto
	</br>
	Descrição: $descricaoproduto
	</br>
	Especificações: $especificacoesproduto
	</br>
	Preço R$:$precoproduto
	</br>
	ID: $idproduto
	</br>
_END;


	
	
}




?>