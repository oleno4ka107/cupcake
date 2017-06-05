<?php require 'header.php';

?>
<!-- SECTION 1 - HERO TITLE -->
<section class="hero-title">
    <div class="container">
        <div class="row">
            <h2>Наші вироби
                <small>зроблені власноруч</small>
            </h2>
        </div><!-- // .row -->
    </div><!-- // .container -->
</section>

<div class="sort col-md-12 text-center ">
    <div class="col-md-6">
    Сортувати за
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Вибрати <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a class="sort" href="?action=cupcakes&id_s=priseA">Збільшенням ціни</a></li>
            <li><a class="sort" href="?action=cupcakes&id_s=prise">Зменшенням ціни</a></li>
            <li><a class="sort" href="?action=cupcakes&id_s=date">Датою</a></li>

        </ul>
    </div>

    </div>


<div id="fon"></div>

<!-- // SECTION 1 -->

<!-- SECTION 2 - ITEMS -->
<?php
require_once 'phpFunction/dbOutput.php';

echo "<section class='space '>
    <div class='container'>
        <div class='row' >";
while ($next = mysqli_fetch_array($result)) {
    $id = $next['id'];
    $name = $next['name'];
    $type = $next['type'];
    $prise = $next['prise'];
    echo " <div class='col-md-4'>
                <a href='?action=cupcake-detail&id_c=$id' class='view'>
                    <figure class='item'>
                        <div class='item-img text-center'>


                            <img src='img/cupcake$id.png' alt='About the image'  >
                        </div>
                        <figcaption class='text-center'>
                            <h4>$name</h4>
                            <p>$type</p>
                            <p>$prise</p>
                        </figcaption>
                    </figure>
                </a>
            </div>";
}
echo "</div>
    </div>";
mysqli_close($dbc);

?>
<!-- // SECTION 2 -->

<?php require 'footer.php'; ?>
