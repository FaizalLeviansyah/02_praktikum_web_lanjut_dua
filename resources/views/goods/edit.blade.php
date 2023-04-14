<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" href="https://unpkg.com/neoncss/dist/neon.min.css">
    <style>
  .container {
    width: 80%;
    margin: 0 auto;
    padding: 50px;
    background-color: #0e0e0e;
    color: #fff;
  }

  h1 {
    margin-bottom: 30px;
    font-size: 48px;
    text-align: center;
    text-transform: uppercase;
  }

  label {
    display: block;
    font-size: 24px;
    margin-bottom: 10px;
  }

  input[type="text"],
  input[type="email"],
  input[type="tel"],
  textarea {
    border: none;
    border-radius: 0;
    border-bottom: 2px solid #fff;
    background-color: transparent;
    color: #fff;
    font-size: 24px;
    padding: 10px 0;
    width: 100%;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="tel"]:focus,
  textarea:focus {
    outline: none;
    border-bottom-color: #18ffff;
  }

  button {
    margin-top: 30px;
    font-size: 24px;
    padding: 10px 30px;
    background-color: #18ffff;
    color: #0e0e0e;
    border: none;
    border-radius: 0;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0e0e0e;
    color: #18ffff;
    cursor: pointer;
    justify-content: center;
  }
</style>

</head>
<body>
<div class="container">
  <h1>Edit Product</h1>
  <form action="/goods/{{$goods->id_goods}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group"> <br><br>
      <label for="goods_code">Code</label>
      <input type="text" name="goods_code" value="{{$goods->goods_code}}" id="goods_code" class="form-control" placeholder="Enter the code of goods">
    </div>
    <div class="form-group"> <br><br>
      <label for="goods_name">Name</label> 
      <input type="text" name="goods_name" value="{{$goods->goods_name}}" id="goods_name" class="form-control" placeholder="Enter the name of goods">
    </div>
    <div class="form-group"> <br><br>
      <label for="goods_category">Category</label>
      <input type="text" name="goods_category" value="{{$goods->goods_category}}" id="goods_category" class="form-control" placeholder="Enter the category of goods">
    </div>
    <div class="form-group"> <br><br>
      <label for="price">Price</label>
      <input type="tel" name="price" value="{{$goods->price}}" id="price" class="form-control" placeholder="Enter the price of goods">
    </div>
    <div class="form-group"> <br><br>
      <label for="stock_quantity">Stock - Quantity</label>
      <input type="tel" name="stock_quantity" value="{{$goods->stock_quantity}}" id="stock_quantity" class="form-control" placeholder="Enter the stock of goods">
    </div>
    <button type="submit" class="btn btn-primary">Confirm Edit</button>
  </form>
</div>
</body>
</html>