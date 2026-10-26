<?php
ob_start();
?>
 
<!-- Banner / Hero Section -->
<div class="p-5 mb-4 bg-primary text-white rounded-3 shadow">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold mb-3">Welcome to SODADAYAH System</h1>
        <p class="col-md-8 fs-4">
            Manage your inventory, track customer orders, monitor staff performance, and generate sales invoices seamlessly from one central dashboard.
        </p>
        <hr class="my-4 bg-white">
        <p class="mb-3">Get started by selecting a module below or checking recent updates:</p>
        <a class="btn btn-light btn-lg text-primary fw-bold me-2" href="orders.php" role="button">
            <i class="bi bi-cart-check me-1"></i> Manage Orders
        </a>
        <a class="btn btn-outline-light btn-lg" href="products.php" role="button">
            <i class="bi bi-box-seam me-1"></i> View Products
        </a>
    </div>
</div>

<!-- Quick Access / Summary Cards Grid -->
<div class="row g-4 mb-4">
    <!-- Products Card -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 border-top border-4 border-primary h-100">
            <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">
                    <i class="bi bi-box-seam"></i>
                </div>
                <h5 class="card-title">Products</h5>
                <p class="card-text text-muted small">Track inventory, pricing, stock levels, and brands.</p>
                <a href="products.php" class="btn btn-sm btn-outline-primary stretched-link">Go to Products</a>
            </div>
        </div>
    </div>

    <!-- Customers Card -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 border-top border-4 border-success h-100">
            <div class="card-body text-center">
                <div class="display-4 text-success mb-3">
                    <i class="bi bi-people"></i>
                </div>
                <h5 class="card-title">Customers</h5>
                <p class="card-text text-muted small">Manage client information and registration history.</p>
                <a href="customers.php" class="btn btn-sm btn-outline-success stretched-link">Go to Customers</a>
            </div>
        </div>
    </div>

    <!-- Staff Card -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 border-top border-4 border-warning h-100">
            <div class="card-body text-center">
                <div class="display-4 text-warning mb-3">
                    <i class="bi bi-person-badge"></i>
                </div>
                <h5 class="card-title">Staffs</h5>
                <p class="card-text text-muted small">View employee directory, contacts, and assignments.</p>
                <a href="staffs.php" class="btn btn-sm btn-outline-warning stretched-link">Go to Staff</a>
            </div>
        </div>
    </div>

    <!-- Orders Card -->
    <div class="col-md-3">
        <div class="card shadow-sm border-0 border-top border-4 border-info h-100">
            <div class="card-body text-center">
                <div class="display-4 text-info mb-3">
                    <i class="bi bi-cart-check"></i>
                </div>
                <h5 class="card-title">Orders</h5>
                <p class="card-text text-muted small">Process order details, add items, and print invoices.</p>
                <a href="orders.php" class="btn btn-sm btn-outline-info stretched-link">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>