<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/create-book">Create</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-category">Create Category</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="m-5">
        <h1 class="text-center">Create Book</h1>
        <form action="/store-book" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="Name">
            </div>
            <div class="mb-3">
              <label for="exampleInputDate" class="form-label">Publication Date</label>
              <input type="date" class="form-control" id="exampleInputDate" name="PublicationDate">
            </div>
            <div class="mb-3">
                <label for="exampleInputStock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputStock" name="Stock">
            </div>
            <div class="mb-3">
                <label for="exampleInputAuthor" class="form-label">Author</label>
                <input type="text" class="form-control" id="exampleInputAuthor" name="Author">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputAuthor" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="CategoryName">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->CategoryName); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\testcrud2\resources\views/createBook.blade.php ENDPATH**/ ?>