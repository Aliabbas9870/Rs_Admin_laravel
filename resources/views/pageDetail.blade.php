<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-file-alt"></i> Page Details</h4>
            </div>
            <div class="card-body">

                <!-- Page Type ID & Developer ID -->
                <div class="row">
                    <div class="col-md-6"><strong>Page Type ID:</strong> 101</div>
                    <div class="col-md-6"><strong>Developer ID:</strong> 202</div>
                </div>
                <hr>

                <!-- Name & Slug -->
                <div class="row">
                    <div class="col-md-6"><strong>Page Name:</strong> Sample Page</div>
                    <div class="col-md-6"><strong>Slug:</strong> sample-page</div>
                </div>
                <hr>

                <!-- Images & Video -->
                <div class="row">
                    <div class="col-md-4">
                        <strong>Banner Image:</strong>
                        <img src="banner.jpg" class="img-fluid rounded mt-2" alt="Banner">
                    </div>
                    <div class="col-md-4">
                        <strong>About Image:</strong>
                        <img src="about.jpg" class="img-fluid rounded mt-2" alt="About">
                    </div>
                    <div class="col-md-4">
                        <strong>About Video:</strong>
                        <video class="w-100 mt-2" controls>
                            <source src="about.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <hr>

                <!-- Contact Details -->
                <div class="row">
                    <div class="col-md-4"><strong>Phone:</strong> +123456789</div>
                    <div class="col-md-4"><strong>WhatsApp:</strong> +987654321</div>
                    <div class="col-md-4"><strong>Email:</strong> example@email.com</div>
                </div>
                <hr>

                <!-- Payment Plan & Map -->
                <div class="row">
                    <div class="col-md-6"><strong>Payment Plan:</strong> Monthly</div>
                    <div class="col-md-6">
                        <strong>Map Image:</strong>
                        <img src="map.jpg" class="img-fluid rounded mt-2" alt="Map">
                    </div>
                </div>
                <hr>

                <!-- Floor Images -->
                <div class="row">
                    <div class="col-md-2">
                        <strong>Floor 1:</strong>
                        <img src="floor1.jpg" class="img-fluid rounded mt-2" alt="Floor 1">
                    </div>
                </div>
                <hr>

                <!-- Additional Info -->
                <div><strong>Nearby:</strong> Mall, Park, School</div>
                <div><strong>Community Amenities:</strong> Pool, Gym, Playground</div>
                <hr>

                <!-- Content Info -->
                <div><strong>Points:</strong> Well-connected, Affordable, Modern Design</div>
                <div><strong>Content Info:</strong> This is a sample page providing all necessary details.</div>
                <hr>

                <!-- Status & Show -->
                <div class="row">
                    <div class="col-md-6"><strong>Status:</strong> <span class="badge bg-success">Active</span></div>
                    <div class="col-md-6"><strong>Show on Frontend:</strong> <span class="badge bg-success">Yes</span></div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
