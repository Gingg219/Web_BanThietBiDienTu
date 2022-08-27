<div class="block-filter-subcate">
    <div class="filter__block-list-subcate">
        <div class="box-list-subcate">
            <div class="list-subcate">
                <?php
                    require_once 'admin/control.php';
                    $sql="SELECT * FROM manufacturers where id_category=1";
                    $result=mysqli_query($conn, $sql);
                    foreach($result as $manuf):
                ?>
                <a class="item-subcate" href="tablet.php?search=<?php echo $manuf['name'] ?>">
                    <img class="icons-subcate" src="<?php echo $manuf['image'] ?>" alt="">
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>