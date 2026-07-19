<?php 
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
require __DIR__ . '/../vendor/autoload.php';
$conteudo = file_get_contents('item_db_etc.yml');
include 'traducao.php';

$ymlParsed = Yaml::parse($conteudo);  

$itens = [];

foreach ($ymlParsed['Body'] as $card) {

    if (isset($card['Type']) && $card['Type'] == "Card" ){
        if (!isset($card['SubType']) && isset($card['Weight']) && $card['Weight'] == "10"){
         $itens[] = $card ;
         
    }

  }
        
}


$busca = $_GET['buscar'] ?? ''; 

$resultado = [];

foreach ($itens as $item){
   
    if (($item['Type'] ?? '') !== 'Card'){
      continue;
    }
    if ($busca && stripos($item['Name'], $busca) === false){
      continue;
    }
    $resultado[] = $item ;
}





?> 





<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database de Cartas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <h1>Database de Cartas</h1>
  <p>Catálogo visual para cartas de Ragnarok. Busca por nome, ID, AegisName, local de equipamento e efeitos.</p>
</header>

<main class="container">

  <section class="search-box" >
  <form method="GET">
  
    <input type="text" name="buscar" placeholder="Buscar por nome..." value="<?= $_GET['buscar'] ?? '' ?>">
    

     <button type = "submit" > buscar </button>
  

    
  </section>

  <section class="info-row">
    <span></span>
    <span>Clique em uma carta para ver detalhes.</span>
  </section>

  <section class="cards-grid">
<?php foreach ($resultado as $item): ?>
    <article class="card">
      <div class="card-image">
        <div class="placeholder">   <?php
            $imagem = "/rodb/public/images/cards/{$item['Id']}.png";

            if (file_exists(__DIR__ . "/../public/images/cards/{$item['Id']}.png")) {
                echo "<img src='{$imagem}' width='150'>";
            } else {
                echo "<div class='placeholder'>Sem imagem</div>";
            }
        ?></div>
      </div>

      <div class="card-content">
        <h2><?php echo $item['Name']; ?></h2>
        <p><?php echo $item['Id']; ?></p>
        <p><?php echo $item['AegisName'];?></p>

        <div class="tags">
          <span><?php if (isset($item['Script'])):?>
           <?=  traduzirScript($item['Script'])?> 
           <?php endif; ?>
          </span> 
          
        </div>
      </div>
    </article>
    <?php endforeach; ?> 
  </section>

</main>

</body>
</html>