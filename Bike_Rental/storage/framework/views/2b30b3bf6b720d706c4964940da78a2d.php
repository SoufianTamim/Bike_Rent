<!--==================== FOOTER ====================-->
<footer>
    <div class="container">
        <div class="row footer-item-cover">
            <div class="footer-subscribe col-md-7 col-lg-8">
                <h6>subscribe</h6>
                <p>Subscribe us and you won't miss the new arrivals, as well as discounts and sales.</p>
                <form class="subscribe-form">
                    <i class="fa fa-at" aria-hidden="true"></i>
                    <input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
                    <button type="submit" class="btn btn-form"><span>send</span></button>
                </form>
            </div>
            <div class="footer-item col-md-5 col-lg-4">
                <h6>info</h6>
                <ul class="footer-list">
                    <li><a href="<?php echo e(route('bikes')); ?>">FAQ</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Contact</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Term of Use</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Exchanges</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Catalog</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Returns</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Search</a></li>
                </ul>
            </div>
        </div>
        <div class="row footer-item-cover">
            <div class="footer-touch col-md-7 col-lg-8">
                <h6>stay in touch</h6>
                <ul class="footer-soc social-list">
                    <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
                <div class="footer-autor">Questions? Please write us at: <a href="mailto:soufiantamim22@gmail.com">soufiantamim22@gmail.com</a></div>
            </div>
            <div class="footer-item col-md-5 col-lg-4">
                <h6>shop</h6>
                <ul class="footer-list">
                    <li><a href="<?php echo e(route('bikes')); ?>">Road Bike</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">City Bike</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Mountain Bike</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">Kids Bike</a></li>
                    <li><a href="<?php echo e(route('bikes')); ?>">BMX Bike</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copyright"><a target="_blank" href="https://soufian.com/">Soufian</a> © 2019. All Rights Reserved.</div>
            <ul class="footer-pay">
                <li><a href="#"><img src="../img/footer-pay-1.png" alt="img"></a></li>
                <li><a href="#"><img src="../img/footer-pay-2.png" alt="img"></a></li>
                <li><a href="#"><img src="../img/footer-pay-3.png" alt="img"></a></li>
                <li><a href="#"><img src="../img/footer-pay-4.png" alt="img"></a></li>
            </ul>
        </div>
    </div>
</footer>
<!--================== FOOTER END ==================-->
<!--===================== TO TOP =====================-->
<a class="to-top" href="#home">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
</a>
<!--=================== TO TOP END ===================-->
<!--==================== SCRIPT	====================-->
<?php
use Illuminate\Support\Facades\Route;
$routeName = Route::currentRouteName();
?>
<?php if($routeName === 'index'): ?>
<script src="<?php echo e(asset('/js/jquery-2.2.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery.nice-select.js')); ?>"></script>
<script src="<?php echo e(asset('/js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('/js/rx-lazy.js')); ?>"></script>
<script src="<?php echo e(asset('/js/scripts.js')); ?>"></script>
<?php elseif($routeName === 'sbike' || $routeName === 'gallery' ): ?>
<script src="<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.nice-select.js')); ?>"></script>
<script src="<?php echo e(asset('js/isotope.pkgd.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
<?php else: ?>
    <script src="<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/isotope.pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.fancybox.js')); ?>"></script>
    <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.nice-select.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('js/rx-lazy.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
<?php endif; ?>
</body>
</html><?php /**PATH C:\Users\soufian tamim\Desktop\Bike_Rent\Bike_Rental\resources\views/layout/footer.blade.php ENDPATH**/ ?>