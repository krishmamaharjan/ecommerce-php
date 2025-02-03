<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-6  m-auto border border-primary mt-3">

    <form action="insert.php" method="POST"  enctype="multipart/form-data">
    <div class="mb-3">
        <p class="text-center fq-bold fs-3">Product Detail</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="Pname" class="form-control"  placeholder="Enter product Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Product Price</label>
        <input type="text" name="Pprice" class="form-control"  placeholder="Enter product price">
    </div>
    <div class="mb-3">
        <label class="form-label">Product Detail</label>
        <input type="text" name="Pdetail" class="form-control"  placeholder="Enter product detail">
    </div>
    <div class="mb-3">
        <label class="form-label">Add Product Image</label>
        <input type="file" name="Pimage" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Select Page Category</label>
        <select class="form-select" name="Pages">
            <option selected value="Home">Home</option>
            <option value="Guitar">Guitar</option>
            <option value="Drum">Drum</option>
            <option value="KeyBoard">keyBoard</option>
        </select>
    </div>
    <button name="submit" class="fs-4 fw-bold my-3 form-control text-black" >Upload</button>


    </form>
    </div>
    </div>
    </div>
</body>
</html>