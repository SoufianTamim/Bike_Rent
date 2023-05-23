<!--================ S-FIND-BIKE ================-->
<section class="s-find-bike">
    <div class="container">
        <form class="find-bike-form" action="{{ route('product-filter') }}" method="get" >
            <h2 class="title">find the bike</h2>
            <ul class="form-wrap">
                <li>
                    <label>Type</label>
                    <select class="nice-select" name="category">
                        <option></option>
                        <option>Road Bike</option>
                        <option>Mountain Bike</option>
                        <option>BMX Bike</option>
                        <option>City Bike</option>
                        <option>Hybrid Bike</option>
                        <option>Electric Bike (E-bike)</option>
                        <option>Cyclocross Bike</option>
                        <option>Folding Bike</option>
                        <option>Touring Bike</option>
                        <option>Gravel Bike</option>
                        <option>Fat Bike</option>
                        <option>Triathlon/Time Trial Bike</option>
                        <option>Kids Bike</option>
                        <option>Cruiser Bike</option>
                        <option>Tandem Bike</option>
                        <option> accessories & clothing</option>
                        <option> safety and Locks</option>
                    </select>
                </li>
                <li>
                    <label>Wheel Size</label>
                    <select class="nice-select" name="size">
                                <option></option>
                                <option>12</option>
                                <option>14</option>
                                <option>16</option>
                                <option>18</option>
                                <option>20</option>
                                <option>22</option>
                                <option>24</option>
                                <option>26</option>
                                <option>27.5</option>
                                <option>29</option>
                            </select>
                </li>
                <li>
                    <label>Brand</label>
                    <select class="nice-select" name="brand">
                        <option></option>
                        <option>Pinarello</option>
                        <option>Eddy Merckx</option>
                        <option>Specialized</option>
                        <option>Giant</option>
                        <option>Trek</option>
                        <option>BMC</option>
                    </select>
                </li>
                <li><button  type="submit"  class="btn"><span>search</span></button></li>
            </ul>
        </form>
    </div>
</section>
<!--============== S-FIND-BIKE END ==============-->
