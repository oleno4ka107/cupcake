<button type="button" class="btn btn-primary btn-lg  btn-colored" data-toggle="modal" data-target="#myModal">
    Додати
</button>
<!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Введіть данні</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="edit.php" method="post" enctype="img/">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Назва</label>
                                                    <input type="text" name="name" pleshoder="Назва">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Тип</label>
                                                    <input type="text" name="type" pleshoder="Тип">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Категорія</label>
                                                    <input type="text" name="categori" pleshoder="Категорія">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Ціна</label>
                                                    <input type="text" name="prise" pleshoder="Ціна">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Додати фото</label>
                                                    <input type="file" id="exampleInputFile"  name="pictures[]">
                                                </div>

                                                <button type="submit" name="send" class="btn btn-default btn-colored">Додати</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-colored" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
require 'phpFunction/add.php';
?>