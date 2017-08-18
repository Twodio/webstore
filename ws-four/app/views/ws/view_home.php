<h2>Catalogue</h2>
<ul class="products">
    <?php
        if(!empty($data)){
            //<!-- temporario 
            $size = count($data);
            $count  = 0;
            foreach($data as $item){
            if($count <= $size){
                $count++;
                if($count >= 4){
                    $count = 1;
                }
            }
            // temporadio !-->
            ?>
            <li>
                <a href="#">
                    <img src="images/item-<?=$count?>.png" alt="" />
                    <h4><?=$item['name']?></h4>
                    <p><?=number_format($item['price'], 2, ',', '.')?></p>
                </a>
                <input type="hidden" name="sku" value="<?=$item['code'];?>">
                <a href="javascript:void(0);" class="adicionar-btn">adicionar</a>
            </li>
            <?php
            }
        }
    ?>
</div>
