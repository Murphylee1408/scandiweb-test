<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel='stylesheet' href='styles.css'/>
</head>
<body>
    <div class="box">
        <form id='product_form' action="addprocess.php" method="POST">
            <div class='section header'>
                <div class='logo'><h2>Product Add</h2></div>
                <input id="submit-btn" type="submit" name="sender" value="Save" />
                <a id='delete-product-btn' href='index.php'>Cancel</a>

            </div>
            <hr>
            <div class='section container'>
                <div class="add_form">
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" id="sku" name="sku" maxlength="7" placeholder="Input SKU" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Input Product Name"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="price">Price ($)</label>
                        <input type="number" id="price" name="price" placeholder="Input Product Price"><br><br>
                    </div>    
                    <label>Type Switcher</label>
                    <select class = "form-group" name="productType" id="productType" onChange="handleSelection(value)" style="width:200px; height:35px;">
                        <option value = "">Type Switcher</option>
                        <option value = "DVD" name = "dvd">DVD-disc</option>
                        <option value = "Book" name = "book">Book</option>
                        <option value = "Furniture" name = "furniture">Furniture</option>
                    </select><br><br>
                    <div id="book-info" style="display: none;">
                        <label for="weight">Weight (KG)</label>
                        <input type="number" name="weight" id="weight" placeholder="product size in weight KG"><br><br>
                        <h3>Please, provide weight in KG</h3>
                    </div>
                    <div id="dvd-info" style="display: none;">
                        <label for="size">Size (MB)</label>
                        <input type="text" name="size" id="size" placeholder="product size in MB"><br><br>
                        <h3>Please, provide size in MB</h3>
                    </div>
                    <div id="furniture-info" style="display: none;">
                        <label for="height">Height (CM)</label>
                        <input type="number" name="height" id="height" placeholder="product size in height CM"><br><br>
                        <label for="width">Width (CM)</label>
                        <input type="number" name="width" id="width" placeholder="product size in width CM"><br><br>
                        <label for="length">Length (CM)</label> 
                        <input type="number" name="lenght" id="length" placeholder="product size in length CM"><br><br>
                        <h3>Please, provide dimensions in HxWxL format</h3>
                    </div>            
                </div>                
            </div>
            <hr>
            <div class='section footer'>Scandiweb Test Assignment</div>
        </form>
    </div>

</body>
<script src="typeSwitcher.js"></script>
</html>



  