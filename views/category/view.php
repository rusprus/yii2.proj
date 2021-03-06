<?php

use app\widgets\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<section id="advertisement">
    <div class="container">
        <img src="/images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>

                    <ul class="catalog category-products">
                        <?php echo MenuWidget::widget(['tpl' => 'menu']); ?>
                    </ul>

                    <!--brands_products-->
<!--                    <div class="brands_products">-->
<!--                        <h2>Brands</h2>-->
<!--                        <div class="brands-name">-->
<!--                            <ul class="nav nav-pills nav-stacked">-->
<!--                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>-->
<!--                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>-->
<!--                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>-->
<!--                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>-->
<!--                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>-->
<!--                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>-->
<!--                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--/brands_products-->

                    <!--price-range-->
                    <div class="price-range">
                       <h2>Диапазон цен</h2>
                       <div class="well">
                           <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                           <b>$ 0</b> <b class="pull-right">$ 600</b>
                       </div>
                    </div>
                    <div> <a class="btn btn-fefault cart " onclick="getPrice()" style="margin: center" >Применить фильтр</a> </div>
                    <!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                
                
                    <h2 class="title text-center " ><?php echo $category->name ?></h2>
                <div class="category-id dump" data-id="<?php echo $category->id ?>">
                    <?php if (!empty($products)): ?>
                    <?php $i = 0 ;foreach ($products as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?php echo Html::img("{$product->getImage()->getUrl('250x250')}", ['alt' => $product->name]) ?>

                                
                                    <h2>$<?php echo $product->price ?></h2>
                                    <p> <a href="<?php echo Url::to(['product/view', 'id'=> $product->id]); ?>"><?php echo $product->name ?></a></p>
                                    <a href="#" data-id="<?php echo $product->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                </div>
                                <?php if ($product->new) :?>
                                    <?php echo Html::img("@web/images/home/new.png", ['alt'=>'Новинка', 'class'=>'new']) ?>
                                <?php endif; ?>
                                <?php if ($product->sale) :?>
                                    <?php echo Html::img("@web/images/home/sale.png", ['alt'=>'Распродажа', 'class'=>'new']) ?>
                                <?php endif; ?>
                            </div>
<!--                            <div class="choose">-->
<!--                                <ul class="nav nav-pills nav-justified">-->
<!--                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>-->
<!--                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <?php $i++ ?>
                     <?php if ($i % 3 == 0) : ?>
                            <div class="clearfix"></div>
                     <?php endif; ?>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                    <?php echo
                        LinkPager::widget([
                            'pagination' => $pages,
                        ]); ?>
                    <?php else :?>
                    <h2>Здесь товаров нет</h2>

                    <?php endif; ?>

                </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>