<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your products</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
 
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of your craft soda drink</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">Required fields</span>
            </div>
        </div>
          
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Craft Soda Co">Craft Soda Co</option>
                        <option value="Artisan Brew">Artisan Brew</option>
                        <option value="Botanical Soda">Botanical Soda</option>
                    </select>
                </div>
 
                <!-- 1. Flavor Profile (Ganti Condition) -->
                <div class="col-md-3">
                    <label for="flavor_profile" class="form-label">Flavor Profile <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="flavor_profile" id="flavor_profile" class="form-select" required>
                        <option value="">Select Profile</option>
                        <option value="Fruity & Sweet">Fruity & Sweet</option>
                        <option value="Herbal & Floral">Herbal & Floral</option>
                        <option value="Spicy & Tangy">Spicy & Tangy</option>
                        <option value="Citrus & Zesty">Citrus & Zesty</option>
                    </select>
                </div>
 
                <!-- 2. Bottle Size / Volume (Ganti Manufacturing Year) -->
                <div class="col-md-3">
                    <label for="volume" class="form-label">Bottle Size <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_volume" id="volume" class="form-select" required>
                        <option value="">Select Size</option>
                        <option value="250ml">250ml Glass Bottle</option>
                        <option value="330ml">330ml Standard Bottle</option>
                        <option value="500ml">500ml Sharing Bottle</option>
                    </select>
                </div>
                  
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>

                <!-- 3. Sugar Level (Ganti Image Filename yang tak logik) -->
                <div class="col-md-3">
                    <label for="sugar_level" class="form-label">Sugar Level <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="sugar_level" id="sugar_level" class="form-select" required>
                        <option value="">Select Sugar Level</option>
                        <option value="Low Sugar">Low Sugar</option>
                        <option value="Normal">Normal Sugar</option>
                        <option value="Less Sweet">More Sugar</option>
                        <option value="Unsweetened">Unsweetened / Zero Sugar</option>
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
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 20 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td><img src="strawbasil.jpg" alt="Strawberry Basil" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Strawberry Basil Craft Soda</td>
                        <td>$12.50</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P002</td>
                        <td><img src="rasberipudina.jpg" alt="Raspberry Mint" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Raspberry Mint Craft Soda</td>
                        <td>$12.50</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td><img src="blueberrythyme.jpg" alt="Blueberry Thyme" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Blueberry Thyme Craft Soda</td>
                        <td>$13.00</td>
                        <td>Artisan Brew</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P004</td>
                        <td><img src="peachrosemary.jpg" alt="Peach Rosemary" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Peach Rosemary Craft Soda</td>
                        <td>$12.50</td>
                        <td>Artisan Brew</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P005</td>
                        <td><img src="mangocilantro.jpg" alt="Mango Cilantro" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Mango Cilantro Craft Soda</td>
                        <td>$13.00</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P006</td>
                        <td><img src="lavendarlemon.jpg" alt="Lavender Lemonade" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Lavender Lemonade Craft Soda</td>
                        <td>$14.00</td>
                        <td>Botanical Soda</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P007</td>
                        <td><img src="grapehibiscus.jpg" alt="Grapefruit Hibiscus" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Grapefruit Hibiscus Craft Soda</td>
                        <td>$13.50</td>
                        <td>Botanical Soda</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P008</td>
                        <td><img src="bloodorange.jpg" alt="Blood Orange Cardamom" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Blood Orange Cardamom Craft Soda</td>
                        <td>$14.00</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P009</td>
                        <td><img src="limemint.jpg" alt="Lime Mint" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Lime Mint (Mojito Style) Craft Soda</td>
                        <td>$12.00</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P010</td>
                        <td><img src="yuzueldefflower.jpg" alt="Yuzu Elderflower" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Yuzu Elderflower Craft Soda</td>
                        <td>$15.00</td>
                        <td>Botanical Soda</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P011</td>
                        <td><img src="fieryginger.jpg" alt="Fiery Ginger Ale" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Fiery Ginger Ale Craft Soda</td>
                        <td>$13.00</td>
                        <td>Artisan Brew</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P012</td>
                        <td><img src="gingerhibiscus.jpg" alt="Ginger Hibiscus" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Ginger Hibiscus Craft Soda</td>
                        <td>$13.50</td>
                        <td>Botanical Soda</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P013</td>
                        <td><img src="applecider.jpg" alt="Spiced Apple Cider" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Spiced Apple Cider Craft Soda</td>
                        <td>$13.50</td>
                        <td>Artisan Brew</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P014</td>
                        <td><img src="vanillachai.jpg" alt="Vanilla Chai Spice" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Vanilla Chai Spice Craft Soda</td>
                        <td>$14.00</td>
                        <td>Artisan Brew</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P015</td>
                        <td><img src="smokevanilla.jpg" alt="Smoked Vanilla Cola" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Smoked Vanilla Cola Craft Soda</td>
                        <td>$14.50</td>
                        <td>Artisan Brew</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P016</td>
                        <td><img src="passionkelapa.jpg" alt="Passionfruit Coconut" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Passionfruit Coconut Craft Soda</td>
                        <td>$13.50</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P017</td>
                        <td><img src="pineapplejalapeno.jpg" alt="Pineapple Jalapeno" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Pineapple Jalapeño Craft Soda</td>
                        <td>$13.00</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P018</td>
                        <td><img src="laicirose.jpg" alt="Lychee Rose" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Lychee Rose Craft Soda</td>
                        <td>$14.00</td>
                        <td>Botanical Soda</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P019</td>
                        <td><img src="pomegratemola.jpg" alt="Pomegranate Molasses Lime" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Pomegranate Molasses Lime Craft Soda</td>
                        <td>$14.50</td>
                        <td>Botanical Soda</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P020</td>
                        <td><img src="tamarindcili.jpg" alt="Tamarind Chili Lime" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Tamarind Chili Lime Craft Soda</td>
                        <td>$13.50</td>
                        <td>Craft Soda Co</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
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