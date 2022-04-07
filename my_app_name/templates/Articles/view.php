<!-- h() represent htmlspecialchars -->

<h3><?= h($article->title) ?></h3>
<p><?= h($article->body)?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?> </small></p>
<br>
<?= $this->Html->link('Edit',['action'=>'edit',$article->slug]) ?>