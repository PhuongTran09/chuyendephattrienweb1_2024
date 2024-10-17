<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/3088.less', 'css/3088.css');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/3088.css" rel="stylesheet" type="text/css"/>
</head>

<body>

    <div class="container mt-5">
       
        <div class="row align-items-start pb-5">
            <div class="col-md-6">
                <p>Showing 1–12 of 23 results</p>
            </div>
            <div class="col-md-6 align-bottom-right">
                <select class="form-select form-select-custom w-auto" aria-label="Default sorting">
                    <option selected>Default sorting</option>
                    <option value="1">Sort by popularity</option>
                    <option value="2">Sort by average rating</option>
                    <option value="3">Sort by latest</option>
                    <option value="4">Sort by price: low to high</option>
                    <option value="5">Sort by price: high to low</option>
                </select>
            </div>
        </div>
                
        <div class="row">
            <div class="col-md-4">
                <div class="card product-card">
                    <span class="badge badge-danger sale-badge">Sale!</span>
                    <img src="images/ip1.png" class="card-img-top" alt="Flying Ninja">
                    <div class="hover-icons">
                        <a href="#" class="icon"><i class="fas fa-heart"></i></a>
                        <a href="#" class="icon"><i class="fas fa-chart-bar"></i></a>
                        <a href="#" class="icon"><i class="fas fa-expand"></i></a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Flying Ninja</h5>
                        <div class="rating">
                            ★★★★☆
                        </div>
                        <p class="card-price">
                            <span class="text-muted original-price">$15.00</span>
                            <span class="sale-price">$12.00</span>
                        </p>
                        <button class="btn btn-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="images/ip2.jpg" class="card-img-top" alt="Happy Ninja">
                    <div class="hover-icons">
                        <a href="#" class="icon"><i class="fas fa-heart"></i></a>
                        <a href="#" class="icon"><i class="fas fa-chart-bar"></i></a>
                        <a href="#" class="icon"><i class="fas fa-expand"></i></a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Happy Ninja</h5>

                        <div class="rating">
                            ★★★★★
                        </div>
                        <p class="card-price">$18.00</p>
                        <button class="btn  btn-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="images/ip3.jpg" class="card-img-top" alt="Happy Ninja Gold">
                    <div class="hover-icons">
                        <a href="#" class="icon"><i class="fas fa-heart"></i></a>
                        <a href="#" class="icon"><i class="fas fa-chart-bar"></i></a>
                        <a href="#" class="icon"><i class="fas fa-expand"></i></a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Happy Ninja Gold</h5>

                        <div class="rating">
                            ★★★☆☆
                        </div>
                        <p class="card-price">$35.00</p>
                        <button class="btn  btn-cart"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
