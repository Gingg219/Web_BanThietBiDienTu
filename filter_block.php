<div class="col" style="width: 100%">
    <div class="block-filter">
        <div class="filter__block-list-sort">
            <div class="filter__box-title">
                <p>Săp xếp theo</p>
            </div>
            <div class="box-list-filter">
                <div class="list-filter">
                    <form method="POST">
                        <input class="filter-value"type="hidden" name="sale" value="1">
                        <button class="item-filter" type="submit" name="sub">
                            <i class="fa-solid fa-arrow-down-short-wide"></i>Giá thấp - cao
                        </button>
                    </form>
                    <form method="POST">
                        <input class="filter-value" type="hidden" name="sale" value="2">
                        <button class="item-filter" type="submit" name="sub">
                            <i class="fa-solid fa-arrow-up-wide-short"></i>Giá cao - thấp
                        </button>
                    </form>
                    <button class="item-filter btn--active">
                        <input class="filter-value" type="hidden" name="sale" value="3">
                        <i class="fa-solid fa-percent "></i>Khuyến mãi
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
