<h1>lista</h1>

<?php
foreach($lista as $item){
    echo "Nome: ".  utf8_encode($item['nome'])."<br>";
}
