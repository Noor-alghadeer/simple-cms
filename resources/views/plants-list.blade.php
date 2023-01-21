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

    <main>

        <section class="py-5 text-center" style="background-image: url('\images\background.jpg')">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Plants care guide</h1>
                    <p class="lead text-muted">Which plants require less time on care and maintenance?<br> Or how do I
                        bring a plant back to life? You may be asking!<br>
                        This resource and house plants information guide provides you with how-to-guides, details about
                        each plant, and instructions about how to care for them as they care for us.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <nav class="pb-5">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Indoor palm plants</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Cactus house plants</button>
                        <button class="nav-link me-auto" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Bulb house plants</button>
                        <div>
                            <a href="{{url('add-plant')}}" class="btn btn-success" role="button">Add a plant</a>
                        </div>

                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                @if (Session::has('success'))
                    <div class="alert alert-dismissible fade show alert-success" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab"tabindex="0">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($palm as $plant)
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" src="\images\{{ $plant->image }}"
                                            width="100%" height="225" />

                                        <div class="card-body">
                                            <h5 class="card-title">{{ $plant->name }}</h5>
                                            <p class="card-text">{{ $plant->description }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{url('edit-plant/'.$plant->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <a href="{{url('delete-plant/'.$plant->id)}}" class="btn btn-sm btn-outline-secondary">Delete</a>                
                                                </div>
                                                <small class="text-muted"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab"tabindex="0">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($cactus as $plant)
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" src="\images\{{ $plant->image }}"
                                            width="100%" height="225" />

                                        <div class="card-body">
                                            <h5 class="card-title">{{ $plant->name }}</h5>
                                            <p class="card-text">{{ $plant->description }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{url('edit-plant/'.$plant->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <a href="{{url('delete-plant/'.$plant->id)}}" class="btn btn-sm btn-outline-secondary">Delete</a>                
                                                </div>
                                                <small class="text-muted"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab"tabindex="0">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($blup as $plant)
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img class="bd-placeholder-img card-img-top" src="\images\{{ $plant->image }}"
                                            width="100%" height="225" />

                                        <div class="card-body">
                                            <h5 class="card-title">{{ $plant->name }}</h5>
                                            <p class="card-text">{{ $plant->description }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{url('edit-plant/'.$plant->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <a href="{{url('delete-plant/'.$plant->id)}}" class="btn btn-sm btn-outline-secondary">Delete</a>                
                                                </div>
                                                <small class="text-muted"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
</div>
                    </div>
                </div>


            </div>
        </div>

    </main>

    <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>           
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
