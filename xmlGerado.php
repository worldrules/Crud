<?


print_r($_POST);
#Se tiver setado os valores e apertar o botão submit , informa o XML
//if (isset($_POST['submit'])) {

////    $nome = ($_POST['name']);
////    $estado = ($_POST['estado']);
////    $email = ($_POST['email']);
////    $valor = ($_POST['valor']);
//
//#Encoding XML e Versão
//    $dom = new DOMDocument("1.0", "ISO-8859-1");
//
//#Retirar os espaços em Branco
//    $dom->preserveWhiteSpace = false;
//
//#Gera o código
//    $dom->formatOutput = true;
//
//#Criando um Node Principal
//    $root = $dom->createElement("agenda");
//
//#Criando um Node Normal abaixo da Agenda
//    $contato = $dom->createElement("contato");
//
//#Coloca nome nos elementos e chama as variáveis
//    $nome = $dom->createElement("nome", $nome);
//    $estado = $dom->createElement("telefone", $estado);
//    $email = $dom->createElement("email", $email);
//    $valor = $dom->createElement("valor", $valor);
//
//#Cria todos os childs e coloca dentro do contato
//    $contato->appendChild($nome);
//    $contato->appendChild($estado);
//    $contato->appendChild($email);
//    $contato->appendChild($valor);
//
//#Adiciona o Node Contato em (ROOT)
//    $root->appendChild($contato);
//    $dom->appendChild($root);
//
//# Para salvar o arquivo, descomente a linha
//$dom->save("XMLGerados/contatos.xml");
//
//#cabeçalho da página
//    header("Content-Type: text/xml");
//# imprime o xml na tela
//    print $dom->saveXML();
//
//
//}

?>