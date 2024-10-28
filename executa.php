<?php
$avaliacao = $_POST['avaliacao'];
$corFavorita = $_POST['corFavorita'];
$comentarios = $_POST['comentarios'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$novidades = isset($_POST['novidades']) ? 'Sim' : 'Não';

echo "<h2>Informações Recebidas:</h2>";
echo "<p><strong>Avaliação:</strong> $avaliacao</p>";
echo "<p><strong>Cor Favorita:</strong> $corFavorita</p>";
echo "<p><strong>Comentários:</strong> $comentarios</p>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Telefone:</strong> $fone</p>";
echo "<p><strong>Novidades por e-mail:</strong> $novidades</p>";

$provedorEmail = explode('@', $email)[1];
echo "<p><strong>Seu provedor de e-mail é:</strong> $provedorEmail</p>";

if ($novidades === 'Sim') {
    echo "<p><strong>Enviaremos para você semanalmente todas as novidades.</strong></p>";
}

$palavrasPositivas = ['gostei', 'legal', 'bom', 'interessante', 'feliz'];
foreach ($palavrasPositivas as $palavra) {
    if (stripos($comentarios, $palavra) !== false) {
        echo "<p><strong>Ficamos felizes que você deixou observações positivas sobre nosso site.</strong></p>";
        break;
    }
}

if ($corFavorita === 'Preto') {
    echo "<script>
        alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site: https://cvv.org.br');
    </script>";
}

