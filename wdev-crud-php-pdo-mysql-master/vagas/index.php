<?php
   // Em PHP tem como puxar as configuracoes de outros arquivos atraves do (include)
   // Aqui em baixo esta sendo puxado as configuracoes dos arquvios da pasta (includes)

   require __DIR__.'/vendor/autoload.php';

   include __DIR__.'/includes/header.php'; // Ali é um ponto e tem um espaço entre o include e o DIR
   include __DIR__.'/includes/listagem.php';
   include __DIR__.'/includes/footer.php';
?>