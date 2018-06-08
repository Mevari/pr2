<div class="container">
    <div class="row cart_title">
        <h5>Оформление заказа:</h5>
    </div>
    <?php   if (isset($_SESSION['products'])) {
    foreach ($cart_items as $value) {


        ?>
    <div class="row order_row">

        <div class="col-lg-3 col-md-3 col-sm-6 photo_order_items">
            <img src="/<?php echo $value->Img;?>" alt="img_items">
        </div>
        <div class="col-lg-3 col-md-3 items_order">
            <p><?php echo $value->Name;?></p>
        </div>
        <div class="col-lg-2 col-md-2 items_order">
           <p >Количество:<br><br>
                <a href="#" class="target_plus">
                    <span class="glyphicon glyphicon-plus"  >
                    </span>
                </a>
            <span class="count_items" > <?php echo $_SESSION['products'][$value->id]; ?> </span>

                <a href="#" class="target_minus">
                    <span class="glyphicon glyphicon-minus" >
                    </span>
                </a>

                </p>

        </div>

        <div class="col-lg-3 col-md-3 items_price">
            <p>Стоимость:<br><br><span class="items_pric" data-id="<?php echo $value->Price?>"><?php echo $value->Price*$_SESSION['products'][$value->id];?></span> BYN</p>
        </div>
        <div class="col-lg-1 col-md-1">
            <a href="/cart/delete_cart/<?php echo $value->id; ?>">
                <span class="glyphicon glyphicon-remove" id="<?php echo $value->id; ?>"></span>
            </a>
        </div>
    </div>
<?php } } ?>
    <div class="row">
        <div class="line_summa">
           <h5>Сумма: <span id="id_summa"><?php echo $summa?></span> BYN</h5>
        </div>
    </div>
</div>
<div class="container info_user">
    <div class="cart_info">
        <form>
        <div class="form-group">
            <label for="example-text-input">ФИО</label>
            <input type="text" class="form-control" name="First_name"  placeholder="Введите ФИО" required>
        </div>

        <div class="form-group">
            <label for="example-text-input">Адрес</label>
            <input type="text" class="form-control"  name="contry" placeholder="Введите адрес">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">

        </div>
        <div class="form-group">
            <label for="example-text-input">Телефон</label>
            <input name="phone" size="30" class="form-control" value="" placeholder="+375 (00) 000-00-00" type="text"required>
        </div>
        <div class="form-group">
            <label for="example-text-input">Коментарий</label>
            <textarea class="form-control" name="commit" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    </div>
</div>