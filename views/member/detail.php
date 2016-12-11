<html>
<head>
    <?php require_once('views/parts/head-front.php'); ?>
</head>
<body>
<?php require_once('views/parts/header-front.php'); ?>

<?php require_once('views/parts/left.php'); ?>

<div id="content">
    <div class="row">

        <div class="col-sm-12">
            <div class="post">
                <div class="row">
                    <div id="wrap-content">
                        <div class="col-sm-12">
                            <div class="content-heading">
                                <h3>Detail</h3>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href="">
                                <div class="post-content">
                                    <img src="<?=base?>/img/<?=$book->BookPhoto?>">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="">
                                <div>
                                    <h1><?=$book->BookTitle?></h1>
                                    <h2><?=$book->category->CategoryName?></h2>
                                    <p>Penulis <?=$book->BookAuthor?></p>
                                    <p>Penerbit <?=$book->publisher->PublisherName?></p>
                                    <p><?=$book->BookDescripton?></p>
                                    <?php
                                    if(isset($member)){
                                        $item = $book->items()->where('ItemStatus','available')->get()->count();
                                        echo "<p>Tersedia : $item</p>";
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <h5>copyright@yusufeka</h5>
</div>
</body>
</html>