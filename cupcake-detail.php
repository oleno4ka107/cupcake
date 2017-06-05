<?php require 'header.php'; ?>
    <!-- SECTION 1 - HERO TITLE -->
    <section class="hero-title">
        <div class="container">
            <div class="row">
                <h2>Опис виробу
                    <small>Знайди щось для себе</small>
                </h2>
            </div><!-- // .row -->
        </div><!-- // .container -->
    </section>
    <!-- // SECTION 1 -->

    <!-- SECTION 2 - POST -->
    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel gallery-slider ">
                        <!-- SLIDE -->
                        <?php
                        $id_c = $_GET['id_c'];
                        $dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");

                        $query="Select id,name,type,prise,date_time,category from Products where id='$id_c'";
                        $result = mysqli_query($dbc, $query) OR die("err bin");
                        $arrp=mysqli_fetch_array($result);
                        $id = $arrp['id'];
                        $name = $arrp['name'];
                        $category = $arrp['category'];
                        $date_time = $arrp['date_time'];
                        $prise = $arrp['prise'];
                        echo " <div >
                        <img src='img/cupcake$id_c.png' alt='About the image' class='center-block' >
                    </div>

                    <!-- SLIDE -->
                    <div>
                        <img src='img/cupcake$id_c.png' alt='About the image' class='center-block'>
                    </div>

                    <!-- SLIDE -->
                    <div>
                        <img src='img/cupcake$id_c.png' alt='About the image' class='center-block'>
                    </div>";
                        ?>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <?php
                    echo " <h3>Про виріб</h3>
                   <h5>Назва</h5>
                    <p> $name</p>
                    <p>Aliquam hendrerit a augue in suscipit. Pellentesque id erat quis sapien dignissim sollicitudin.
                        Nulla mattis tortor sit amet dolor sollicitudin aliquam. Integer viverra odio lectus sedisro
                        mattis placerat. Vivamus sed risus et erat placerat auctort cursus massa at urnaaculis estie.
                        Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis. Praesent mauris ante,
                        elementum et, bibendum at, posuere sit amet nib Duis tincidunt lectus quis dui viverra
                        vestibulum.</p>



                    <h5>Датa</h5>
                    <p>$date_time</p>

                    <h5>Категорія</h5>
                    <p>$category</p>
                    <h5>Ціна</h5>
                    <p> $prise</p>
                    ";
                     require  'phpFunction/script.php';
                    ?>



                    <button class='btn btn-default btn-colored' data-toggle='modal' data-target='#myModal'>
                        Замовити
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Оформити заказ</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="cupcake-detail.php?id_c=<?php echo  $id_c; ?>"" method="post" id="order_form">

                                        <input type="text" class="form-control" name="name" placeholder="Ваше имя"/><br>
                                        <input type="text" class="form-control"  name="phone" placeholder="Ваш телефон"/><br>
                                        <input type="text" class="form-control"  name="email" placeholder="Ваш e-mail"/><br>
                                        <input type="text" style="display: none" class="form-control"  name="id" value="<?php echo  $id_c; ?>"/><br>
                                        <input type="submit"  class="btn btn-default btn-colored" value="Сделать заказ"/>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- //  SECTION 2 -->
    <!--order-->


    <!--endorder-->

<?php require 'footer.php'; ?>