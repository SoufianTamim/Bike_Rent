<!--============== S-CATEGORY-BICYKLE ==============-->
<section class="s-category-bicycle">
    <div class="container">
        <div class="slider-categ-bicycle">
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="../img/categ-2.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title">mountain <br>& road bikes</h4>
                          <form class="find-bike-form" action="{{ route('product-filter') }}" method="get" > 
                            <input type="hidden" name="category" value="Road Bike">
                            <button type="submit" class="btn"><span>view more</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="../img/categ-3.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title">bicycle <br>spare parts</h4>
                          <form class="find-bike-form" action="{{ route('product-filter') }}" method="get" > 
                            <input type="hidden" name="category" value="spare parts">
                            <button type="submit" class="btn"><span>view more</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="../img/categ-1.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title">accessories <br>& clothing</h4>
                          <form class="find-bike-form" action="{{ route('product-filter') }}" method="get" > 
                            <input type="hidden" name="category" value="accessories & clothing">
                            <button type="submit" class="btn"><span>view more</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="../img/categ-3.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title">bicycle <br>spare parts</h4>
                        <a href="{{ route('bikes') }}" class="btn"><span>view more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============ S-CATEGORY-BICYKLE END ============-->