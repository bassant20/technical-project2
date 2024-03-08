<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    * {
      box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      padding: 10px;
      height: 300px;
      /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 400px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .price {
      color: grey;
      font-size: 22px;
    }

    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }
  </style>
</head>

<body>
<h1>Product List</h1>
    <ul id="productList"></ul>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('http://127.0.0.1:8000/api/getProducts')
                .then(response => response.json())
                .then(products => {
                    const productList = document.getElementById('productList');
                    
                    products.forEach(product => {
                        const listItem = document.createElement('li');
                        listItem.textContent = ${product.name} - ${product.price};
                        productList.appendChild(listItem);
                    });
                })
                .catch(error => console.error('Error fetching products:', error));
        });
    </script>

  <h2>Products</h2>

  @foreach ($product as $row)
  <div class="column">
    <div class="card">
      <h1>{{ $row['title'] }}</h1>
      <p class="price"></p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Add to Cart</button></p>
    </div>
  </div>
  @endforeach

  </div>


</body>

</html>