<?php


$content = $_POST; /* receiving SimpleCart order array */
$body = ''; /* declaring the email body */

$firstname = 'nome'; /* extra field variable */
$email_from = 'email'; /* extra field variable */
$empresa = 'empresa'; /* extra field variable */
$date = 'data'; /* extra field variable */
$telefone = 'telefone'; /* extra field variable */
$celular = 'celular'; /* extra field variable */
$cidade = 'cidade'; /* extra field variable */
$estado = 'estado'; /* extra field variable */
$date = 'data'; /* extra field variable */
$comments = 'comments'; /* extra field variable */
$dataPedido = date('d/m/y');

$body .= '=================================='."\n";
$body .= "Primeiro Nome: ".$content[$firstname]."\n"; /* using extra field variable */
$body .= "Empresa: ".$content[$empresa]."\n"; /* using extra field variable */
$body .= "Email: ".$content[$email_from]."\n"; /* using extra field variable */
$body .= "Telefone: ".$content[$telefone]."\n"; /* using extra field variable */
$body .= "Celular: ".$content[$celular]."\n"; /* using extra field variable */
$body .= "Cidade: ".$content[$cidade]."\n"; /* using extra field variable */
$body .= "Estado: ".$content[$estado]."\n"; /* using extra field variable */
$body .= "Observações: ".$content[$comments]."\n"; /* using extra field variable */
$body .= "Data Do Evento: ".$content[$date]."\n"; /* using extra field variable */
$body .= 'Fez o pedido:'."\n";
$body .= "\n";
$body .= '=================================='."\n";

$to = 'contato@suporteventos.com.br'; /* your shop's email */
$subject = $content[$email_from]; /* your desired subject to be displayed on the sent email */

/* starting the loop to get all orders from the stored array */
$products = "";

for($i=1; $i < $content['itemCount'] + 1; $i++) {
$pos = strpos($content[$name],'(');
if($pos!=-1){
    $product_code = substr($content[$name], $pos+1);
    $product_code = str_replace(')', '', $product_code);
    $products .= $product_code.' | ';
}

$name = 'item_name_'.$i; /* product name variable */
$quantity = 'item_quantity_'.$i; /* product quantity variable */
$price = 'item_price_'.$i; /* product price variable */
$total = $content[$quantity]*$content[$price]; /* product total price variable (price*quantity) */
$grandTotal += $total; /* accumulating the total of all items */
$body .= 'Produto #'.$i.': '.$content[$name]."\n".'Quantidade x '.$content[$quantity].' --- Unit Price $'.number_format($content[$price], 2, '.', '')."\n".'Subtotal $'.number_format($total, 2, '.', '')."\n"; /* creating a semantic format for each ordered product */
$body .= '=================================='."\n";
}

/* ending the loop to get all orders from the stored array */

$body .= 'Pedido Total: $'.number_format($grandTotal, 2, '.', '')."\n"; /* total amount of the order */
$body .= '=================================='."\n";
$body .= "\n";
$body .= "Observações: ".$content[$comments]."\n"; /* using extra field variable */
$headers = 'From: ' . 'atendimento@suporteventos.com.br' . "\r\n" .
'Reply-To: ' . 'atendimento@suporteventos.com.br'."\r\n" .
'X-Mailer: PHP/' . phpversion() .
'MIME-Version: 1.0\r\n'.
'Content-Type: text/html; charset=ISO-8859-1\r\n'; /* essential if you're using HTML tags on your mail */

$ok = mail($to, $subject, $body, $headers); /* building the mail() function */

if ($ok){
    $fp = fopen("wp-content/themes/suporte-eventos/relatorio/relatorio.csv", "a+");
    fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
    // Escreve "exemplo de escrita" no bloco1.txt
    $escreve = fwrite($fp, "$dataPedido;$content[$firstname];$content[$email_from];$content[$empresa];$content[$date];$content[$telefone];$content[$celular];$content[$cidade];$content[$estado];$products\n");
    // Fecha o arquivo
    fclose($fp);
}

Header('Location: http://suporteventos.com.br/orcamento-efetuado'); /* declaring the page to redirect if the mail is sent successfully */
?>