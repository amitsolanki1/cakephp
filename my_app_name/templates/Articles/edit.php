
<h1>Edit Article</h1>

<?php
echo $this->Form->create($article);
echo $this->Form->Control('title',['type'=>'text']);
echo $this->Form->control('body',['type'=>'text']);
echo $this->Form->button("Update");
echo $this->Form->end();
?>