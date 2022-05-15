                    <div class="paging">
                        <?php for($i=1;$i<=$all_page;$i++){?>
                                <a href="?page=<?php echo $i; ?>&search=<?php echo $search?>" class="<?php
                                    if($_GET['page']==$i){
                                        echo 'current';
                                    }
                                    ?>">
                                    <?php echo $i?>
                                </a>
                         <?php } ?>
                        <a href="?page=<?php if($page<$all_page){$page++;} ; echo $page; ?>&search=<?php echo $search?>">Next</a>
                    </div>