
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ler o número do último chamado do arquivo (se existir)
  $ultimoChamado = 0;
  if (file_exists('ultimo_chamado.txt')) {
      $ultimoChamado = (int) file_get_contents('ultimo_chamado.txt');
  }
  
  // Incrementar o número do chamado
  $novoChamado = $ultimoChamado + 1;

  // Trabalhando na montagem do texto
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  // Montando o texto com melhor formatação, incluindo o número do chamado
  $texto = "Chamado #$novoChamado\nTítulo: $titulo\nCategoria: $categoria\nDescrição: $descricao\n\n";

  // Abrindo o arquivo
  $arquivo = fopen('arquivo.txt', 'a');

  // Escrevendo texto
  fwrite($arquivo, $texto);

  // Atualizando o número do último chamado
  file_put_contents('ultimo_chamado.txt', $novoChamado);

  // Fechando o arquivo
  fclose($arquivo);

  header('Location: abrir_chamado.php');
}

?>
