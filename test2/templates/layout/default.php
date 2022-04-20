<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='robots' content='noindex, nofollow' />
    <?= $this->Html->css('autoptimize_eddb8674f08e9b46ce74837540c2e8b8') ?>
    <?= $this->Html->css("autoptimize_541e2ced151704f4ff1844c6de47ec02") ?> 
    <?= $this->Html->css('autoptimize_single_3feb36a4065e5b90eacc07e6b634b8a2')?>
    <?= $this->Html->css('autoptimize_single_3a732fd74109c033571fae931fb45e01')?>
    <?= $this->Html->css('autoptimize_single_8d0fde9454c8dc488c8fb7b10b66cc9a')?>
    <?= $this->Html->css('autoptimize_single_22f380df166119ead98710c83a6c78ca')?>
    
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('autoptimize_single_3a113ec0c0d312f33a1749be0030d40a') ?>
    <?= $this->Html->script('autoptimize_single_83eab1d149b6cf6f57240cd129ef2ccb')?>
    <?= $this->Html->script('autoptimize_single_cfb428c02811f0cbe515d5f3dca61de6')?>
    <?= $this->Html->script('jquery.prettyPhoto.min') ?>
    <?= $this->Html->script('jquery.selectBox.min') ?>

    
    <title>Minterio &#8211; Interior Design WordPress Theme &#8211; Just another WordPress site
        <?=$this->fetch('title')?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- navbar -->
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>
</html>
