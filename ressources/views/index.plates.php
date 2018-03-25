<?php $this->layout('layout') ?>
            
<!--Section: Blog v.1-->
<section class="py-4 text-center text-lg-left">

    <!--Section heading-->
    <h1 class="h1 font-weight-bold text-center mb-5 pt-4">Les derniers Articles</h1>
    <!--Section description-->
    <p class="text-center mb-5 pb-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <?php foreach($articles as $article): ?>
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 col-xl-5 pb-3">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-2">
                <img src="<?=$article['photo'];?>" alt="Sample image for first version of blog listing"
                    class="img-fluid">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-7 col-xl-7">
            <!--Excerpt-->
            <a href="" class="green-text">
                <h6 class="font-weight-bold pb-1">
                    <i class="fa fa-cutlery"></i> Catégorie</h6>
            </a>
            <h3 class="mb-4 font-weight-bold dark-grey-text">
                <strong><?=$this->escape($article['title']);?></strong>
            </h3>
            <p><?=$this->escape($article['content']);?></p>
            <p>par
                <a>
                    <strong>Admin</strong>
                </a>, <?=$article['created_at'];?></p>
            <a href="/show/<?=$article['id'];?>" class="btn btn-success btn-md mb-3">En savoir plus ...</a>
        </div>
        <!--Grid column-->
        </div>
    <!--Grid row-->
    <hr class="mb-5 mt-5 pb-3">
<?php endforeach; ?>
    </section>

