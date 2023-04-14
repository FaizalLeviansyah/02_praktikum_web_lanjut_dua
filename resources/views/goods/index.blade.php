<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 50px;
            background-color: gray;
        }
        .table_bordered {
            border-color: black;
        }

        
  .add {
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

  .add:hover {
    background-color: #0e0e0e;
    color: #18ffff;
    cursor: pointer;
    justify-content: center;
    outline: none;
    border-bottom-color: #18ffff;
  }
    </style>
</head>
<body style="background: black">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h2><i>Faizal Leviansyah</i></h2>
                        <h2>MIDTERM CRUD (Create, Read, Update, Delete)</h2><br>
                        <form  action="/goods/search" class="inline" method="GET">
                            <input class="form-control" type="search" name="search" 
                            placeholder="Search By it's Name....">
                            <button class="btn btn-md btn-info mb-3" type="submit">Search</button>
                        </form> <br>
                    <a href="/goods/create" id="add" class="btn btn-md btn-info mb-3">ADD</a>

                                <table class="table table-bordered" bordercolor="#0f0f0f">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">CODE</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">CATEGORY</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">STOCK QUANTITY</th>
                                            <th scope="col">ACTIONS</th>
                                        </tr>
                                    </thead> 
                                        @foreach ($goods as $g)
                                    <tbody>
                                        <tr>
                                            <td><?php echo e($g->id_goods); ?></td>
                                            <td><?php echo e($g->goods_code); ?></td>
                                            <td><?php echo e($g->goods_name); ?></td>
                                            <td><?php echo e($g->goods_category); ?></td>
                                            <td><?php echo e($g->price); ?></td>
                                            <td><?php echo e($g->stock_quantity); ?></td>
                                            <td><a href="/goods/{{$g->id_goods}}/edit" class="btn btn-md btn-info mb-3">EDIT</a>
                                            <form action="goods/{{$g->id_goods}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" name="submit" value="DELETE" class="btn btn-md btn-info mb-3">
                                            </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    </body>
</html>