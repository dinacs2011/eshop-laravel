
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="<?php echo e(route('admin.index')); ?>"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
                    <li><a href="<?php echo e(route('product.create')); ?>">Add Product</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Category
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(route('category.index')); ?>">Add Category</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="<?php echo e(route('offer.index')); ?>">
                    <i class="glyphicon glyphicon-list"></i> Offers
                    <span class="caret pull-right"></span>
                </a>
               
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(route('offer.create')); ?>">Add Offers</a></li>
                </ul>
                <ul>
                    <li><a href="<?php echo e(route('offer.index')); ?>">All Offers </a></li>
                </ul>
            </li>
           
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->