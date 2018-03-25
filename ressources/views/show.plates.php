<?php $this->layout('layout') ?>

<!--Card-->
<h1><?=$this->escape($article['title']);?></h1>

<p>Posté le <?=$article['created_at'];?> par <strong>Admin</strong></p>
<div class="card">

    <!--Card image-->
    <img class="img-fluid" src="<?=$article['photo'];?>" alt="Card image cap">

    <!--Card content-->
    <div class="card-body">
        <!--Text-->
        <p class="card-text"><?=$this->escape($article['content']);?></p>
    </div>

</div>
<!--/.Card-->