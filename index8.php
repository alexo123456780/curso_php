<?php

/*Array Multidimensional ejemplo1

$products = 
[
    ["name" => "laptop" , "price" => 10500 , "stok" => 3 ],
    ["name" => "smartphone", "price" => 5600, "stok" => 7],
    ["name" => "console", "price" => 10800, "stok" => 5]
];


echo $products[2]["name"];*/


/*Task 1
$products = 
[
    ["name" => "laptop" , "price" => 10500 , "stok" => 3 ],
    ["name" => "smartphone", "price" => 5600, "stok" => 7],
    ["name" => "console", "price" => 10800, "stok" => 5]
];


foreach($products as $key => $element){

    echo "Product Name:  ".$element["name"]. "  Product Price:  ".$element["price"]."pesos <br><br>";

}*/



/*Task 2 array_map()

$products = 
[
    ["name" => "laptop" , "price" => 10500 , "stok" => 3 ],
    ["name" => "smartphone", "price" => 5600, "stok" => 7],
    ["name" => "console", "price" => 10800, "stok" => 5]
];

$incrementPrice = array_map(function($element1){

    $element1["price"] *= 1.1;

    return $element1;

},$products);



foreach($incrementPrice as $key => $element){

    echo "product name:  ".$element["name"]." price increment:  ".$element["price"]."<br><br>";

}*/



//Task 3 array_filter()

$products = 
[
    ["name" => "laptop" , "price" => 10500 , "stok" => 3 ],
    ["name" => "smartphone", "price" => 5600, "stok" => 70],
    ["name" => "console", "price" => 10800, "stok" => 30]
];



$stokUnits = array_filter($products,function($element1){

    return $element1["stok"] > 20;
});


foreach($stokUnits as $product){

echo "Product Name: ".$product["name"].", "."Stok:  ".$product["stok"]."<br><br>";

};























?>