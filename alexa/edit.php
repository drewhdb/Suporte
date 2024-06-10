<?php
    include_once "../verifica_sessao.php";
    include_once "../dao/alexaDao.php";

    $dados = getCliente($_GET['cliente']);
    $devices = getDevicesClientes($_GET['cliente']);
    $queryes = getQueryesClientes($_GET['cliente']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>edição</title>
    <?php include_once "../padroes/head2.html"; ?>
    <link rel="stylesheet" href="../css/device.css">
</head>
<body>
    <form action="./daoUpdate.php" method="get">
    <header>
        <div>
            <a  title="Voltar" href="../alexa.php"><ion-icon name="arrow-back"></ion-icon></a>
        </div>
        <div>
            <a title="Excluir" href="./daoDelete.php?cliente=<?= $_GET['cliente']; ?>" style="margin-right: 1em;"><ion-icon class="icon50" name="close"></ion-icon></a>
            <button title="Salvar" type="submit"><ion-icon class="icon50" name="checkmark"></ion-icon></button>
        </div>
    </header>
    <container>
        <fieldset><legend>Cliente:</legend>
            <input type="text" class="input-content disabled" value="<?= $_GET['cliente']; ?>" id="cliente" name="cliente" title="CLIENTE" readonly>
            <input type="checkbox" class="custom-checkbox" id="bloqueado" name="bloqueado" title="BLOQUEADO" <?php if ($dados['bloqueado'] == '1'){?> checked <?php }; ?>> Bloqueado
        </fieldset>
        <fieldset><legend>Host:</legend>
            <input type="text" class="input-content" id="host" name="host" placeholder="000.000.000.000" title="IP" required value="<?= $dados['host']?>">
        </fieldset>
        <fieldset><legend>Porta:</legend>
            <input type="text" class="input-content" id="port" name="port" value="3306" title="PORTA" required value="<?= $dados['port']?>">
        </fieldset>
        <fieldset><legend>Usuário:</legend>
            <input type="text" class="input-content" id="user" name="user" value="root" title="USUÁRIO" required value="<?= $dados['user']?>">
        </fieldset>
        <fieldset><legend>Senha:</legend>
            <input type="password" class="input-content" id="pass" name="pass" title="SENHA" required value="<?= $dados['pass']?>">
        </fieldset>
    </container>
    <p style="text-align: center;">DEVICES</p>
    <hr>
    <container style="grid-template-columns: 1fr;">
    <?php foreach ($devices as $device) { ?>
        <div class="device">
            <a href=""><fieldset>
                <input type="text" class="input-content" value="<?= $device['descricao']; ?>" title="DESCRIÇÃO" readonly>
            </fieldset></a>
            <fieldset>
                <input type="text" class="input-content" value="<?= $device['data_criacao']; ?>" title="CRIAÇÃO" readonly>
            </fieldset>
            <fieldset style="width: 40%;">
                <input type="text" class="input-content" value="<?= $device['deviceId']; ?>" title="DEVICE" readonly>
            </fieldset>
            <a href="./daoDeleteDevice.php?device=<?= $device['deviceId']?>&cliente=<?= $device['cliente']?>"><ion-icon name="trash" class="icon40"></ion-icon></a>
        </div>
    </form>
    <?php }; ?>
    </container>    
    <p style="text-align: center;">QUERYES</p>
    <hr>
    <container style="grid-template-columns: 1fr;">
    <?php foreach ($queryes as $query) { ?>
        <div class="device">
            <a href=""><fieldset style="width: 60%;">
                <input type="text" class="input-content" value="<?= $query['query']; ?>" title="QUERY" readonly>
            </fieldset></a>
            <fieldset>
                <input type="text" class="input-content" value="<?= $query['grupo']; ?>" title="GRUPO" readonly>
            </fieldset>
            <a href="./daoDeleteDevice.php?device=<?= $device['deviceId']?>&cliente=<?= $device['cliente']?>"><ion-icon name="trash" class="icon40"></ion-icon></a>
        </div>
    </form>
    <?php }; ?>
    <a href="./insertQuery.php" title="ADICIONAR QUERY"><div class="device">
        <fieldset style="width: 100%;">
            <ion-icon class="icon40" name="add"></ion-icon>
        </fieldset>
    </div></a>

    </container>    

    <?php include_once "../padroes/footer2.html"; ?>
</body>
</html>