<?php
if(!empty($data)){
    //<!-- temporario
    $size = count($data->fetch());
    $count  = 0;
    // temporario !-->
    foreach($data->fetch() as $key=>$item){
        if($count <= $size) $count++;
        ?>
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="update-btn"></span>
            </div>
            <div class="image">
                <img src="images/item-<?=$count?>.png" alt="" />
            </div>
            <div class="description">
                <span>Test Item</span>
                <span>Always available</span>
            </div>
            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="images/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="<?=$item['qnt']?>">
                <button class="minus-btn" type="button" name="button">
                    <img src="images/minus.svg" alt="" />
                </button>
            </div>
            <div class="total-price"><?=number_format($data->subtotal($item), 2, ',', '.')?></div>
        </div>
        <?php
    }
}
?>
