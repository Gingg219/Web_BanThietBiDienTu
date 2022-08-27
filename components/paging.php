<div class="pagination home-product__pagination">
    <a class="pagination-item__link" href="?page=<?php if($page>1){$page--;} ; echo $page; ?>&search=<?php echo $search?>">Prev</a>
    <div class="pagination-item">
        <?php
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        for($i=1;$i<=$all_page;$i++){?>
                <a href="?page=<?php echo $i; ?>&search=<?php echo $search?>" class="<?php
                    if($page==$i){
                        echo 'pagination-item__link pagination-item--active';
                    }
                    else{
                        echo 'pagination-item__link';
                    }
                    ?>">
                    <?php echo $i?>
                </a>
        <?php } ?>
    </div>
    <a class="pagination-item__link " href="?page=<?php if($page<$all_page){$page++;} ; echo $page; ?>&search=<?php echo $search?>">Next
    </a>
</div>                 