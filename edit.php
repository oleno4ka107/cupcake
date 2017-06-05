<?php

session_start ();
if (!$_SESSION['admin']) die ( Запрещено );

require 'header.php';

?>
    <section class="hero-title">
        <div class="container">
            <div class="row">
                <h2>Адміністрвтивна панель
                </h2>
            </div><!-- // .row -->
        </div><!-- // .container -->
    </section>
    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Вироби</a></li>
        <li><a href="#profile" data-toggle="tab">Замовлення</a></li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content ">
        <div class="tab-pane fade in active admin-tab" id="home">
            <section class="post">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10">
                            <?php
                            $dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");
                            echo "<table class='table'>
                    <tr>
                        <th>№</th>
                        <th>Назва</th>
                        <th>Тип</th>
                        <th>Категоря</th>
                        <th>Дата</th>
                        <th>Ціна</th>
                        <th>Видалити</th>
                    </tr>";

                            $query="Select id,name,type,prise,date_time,category from Products ";

                            $result=mysqli_query($dbc,$query) OR die("err bin");
                            while ($next=mysqli_fetch_array($result)) {

                                $id = $next['id'];
                                $namet = $next['name'];
                                $type = $next['type'];
                                $priset = $next['prise'];
                                $category=$next['category'];
                                $time=$next['date_time'];
                                echo "<tr>
                        <td>$id</td>
                        <td>$namet</td>
                        <td>$type</td>
                        <td>$type</td>              
                        <td>$time</td>
                        <td> $priset</td>
                        <td><a href='edit.php?id=$id'>Видалити</a></td>
                    </tr>";
                            }
                            echo "</table>";
                            require 'phpFunction/bel.php';
                            mysqli_close($dbc);
                            require 'addProd.php';
                            ?>


                        </div>
                    </div><!-- // .row -->
                </div><!-- // .container -->
            </section>

        </div>

        <div class="tab-pane fade" id="profile">
            <section class="post">
                <div class="container ">
                    <div class="row">
                        <div class="col-xs-10">
                            <?php
                            $dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");
                            echo "<table class='table'>
                    <tr>
                        <th>Ім'я</th>
                        <th>Номер телефону</th>
                        <th>Email</th>
                        <th>Товар</th>
                        <th>Ціна</th>
                    </tr>";

                            $query="SELECT Orders_cake.name,phone,email,Products.name,Products.prise FROM Orders_cake INNER JOIN Products ON  Orders_cake.id_prod=Products.id  ";


                            $result=mysqli_query($dbc,$query) OR die("err bin");

                            while ($next=mysqli_fetch_array($result)) {

                                $name=$next['0'];
                                $phone=$next['phone'];
                                $email=$next['email'];
                                $namep=$next['name'];
                                $prise=$next['prise'];
                                echo "<tr>
                        <td>$name</td>
                        <td>$phone</td>
                        <td>$email</td>
                        <td>$namep</td>
                        <td> $prise</td>
                    </tr>";
                            }
                            echo "</table>";
                            ?>
                        </div>
                    </div><!-- // .row -->
                </div><!-- // .container -->
            </section>
        </div>

    </div>
                </div>
    </div>
    </div>
        </div>
    </section>




<?php require 'footer.php'; ?>