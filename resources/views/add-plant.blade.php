<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Plants guide</span>
            </div>
        </nav>
    </header>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1>Add a plant</h1>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('save-plant') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Plant name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Category" class="form-label">Category</label>
                        <select id="Category" name="category" class="form-select" aria-label="Default select example">
                            <option value="Indoor palm plants">Indoor palm plants</option>
                            <option value="Cactus house plants">Cactus house plants</option>
                            <option value="Bulb house plants">Bulb house plants</option>                    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" rows="3" class="form-control" id="Description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image file name</label>
                        <input type="text" name="image" class="form-control" id="img" required>
                    </div><br>
                    <button type="submit" class="btn btn-success">Add</button>
                    <a href="{{ url('plants-list') }}" class="btn btn-secondary" role="button">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
