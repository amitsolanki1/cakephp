<h1>Articles</h1>
<!-- add custom css file -->
<?= $this->Html->css(['custom.css'])?>

<a href="<?= $this->Url->build(['controller'=>'articles','action'=>'add']) ?>" class='btn-primary'> Add New Article</a>  

<hr>
<table>
    <tr class='btn'>
        <th>Title</th>
        <th>Created</th>
        <th>Details</th>
        <th>Action</th>
    </tr>
<?php
    foreach($articles as $ar):
    ?>
        <tr>
            <!-- action view means it goes to view function in ArticlesController file and if function is find then it goes to templates folder and check if view.php file is present in Articles folder or not  -->
        <td><?= $ar->title?></td>
        <td><?php if($ar->created==''){echo $ar->created;}else{echo $ar->created->format(DATE_RFC850);} ?></td>
        <td><?= $this->Html->link('view more',['action'=>'view',$ar->slug])?></td>
        <td><?php echo $this->Html->link('Edit',
                                        ['action'=>'edit',$ar->slug],['class' => 'edit']
                                        );?>
                                         || 
            <?php echo $this->Form->postLink("Delete",
                                        ['action'=>'delete',$ar->slug],
                                        ['class'=>'dlt'],
                                        ['confirm'=>'Are you sure?']);?>
        </td>
        </tr>
        <?php
        endforeach;
?>

</table>