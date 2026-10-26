<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Orders</h2>
        <p class="text-muted mb-0">Manage and track all your orders</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
 
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Order Form
                </h5>
                <small class="text-muted">Fill in the details of an order</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">Required fields</span>
            </div>
        </div>
         
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="order_num" class="form-label">Order ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="order_num" id="order_num" type="text" class="form-control" placeholder="Enter Order ID" value="" required>
                </div>
                <div class="col-md-4">
                    <label for="staff_num" class="form-label">Staff <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="staff_num" id="staff_num" class="form-select" required>
                        <option value="">Select Staff</option>
                        <option value="S001">S001 - Siti Aminah</option>
                        <option value="S002">S002 - Ahmad Ali</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="customer_num" class="form-label">Customer <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="customer_num" id="customer_num" class="form-select" required>
                        <option value="">Select Customer</option>
                        <option value="C001">C001 - Ali bin Abu</option>
                        <option value="C002">C002 - Nurul Ain</option>
                    </select>
                </div>
            </div>
             
            <hr class="mt-4 mb-3">
             
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
 
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Order List
                </h5>
                <small class="text-muted">View and manage all orders</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Staff ID</th>
                        <th>Customer ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ORD001</td>
                        <td>S001</td>
                        <td>C001</td>
                        <td>

                            <a href="orderdetails.php" class="btn btn-sm btn-info text-white" title="Order details"><i class="bi bi-list"></i></a>
                            <a href="invoice.php" class="btn btn-sm btn-success" title="View invoice"><i class="bi bi-receipt"></i></a>
                            
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center">No orders found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>