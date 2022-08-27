<div class="col" style="width: 100%">
    <div class="block-filter">
        <div class="filter__block-list-sort">
            <div class="filter__box-title">
                <p>Sắp xếp theo</p>
            </div>
            <div class="box-list-filter">
                <div class="list-filter">
                    <form method="POST">
                        <input class="filter-value"type="hidden" name="sale" value="2">
                        <button class="item-filter <?php if(isset($_POST['sale'])&&$_POST['sale']==='2') {echo 'btn--active';}?>" type="submit" name="sub">
                            <i class="fa-solid fa-arrow-down-short-wide"></i>Giá thấp - cao
                        </button>
                    </form>
                    <form method="POST">
                        <input class="filter-value" type="hidden" name="sale" value="1">
                        <button class="item-filter <?php if(isset($_POST['sale'])&&$_POST['sale']==='1') {echo 'btn--active';}?>" type="submit" name="sub">
                            <i class="fa-solid fa-arrow-up-wide-short"></i>Giá cao - thấp
                        </button>
                    </form>
                    <form method="POST">
                    <button class="item-filter <?php if(empty($_POST['sale'])||$_POST['sale']==='3') {echo 'btn--active';}?>">
                        <input class="filter-value" type="hidden" name="sale" value="3">
                        <i class="fa-solid fa-percent "></i>Khuyến mãi
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
