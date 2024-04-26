<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <title>Profile</title>
</head>
<style>body {
    background: rgb(99, 39, 120);
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}
.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<body>
    <form action="{{route('profile,change')}}" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-6">
        @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                     <!-- <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section">
            <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p>
            <button class="btn button border"><b>Upload</b></button name="image" name="image">
        </div> -->
        <input type="file"  value="{{ Auth::user()->image }}" name="image">
                    <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="name" class="bg-light form-control" placeholder="" value="{{ Auth::user()->name }}" name="name"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="name" class="bg-light form-control" placeholder="" value="{{ Auth::user()->email }}" name="email"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button">Save Profile</button>
                        <a href="{{url('home')}}" class="btn border profile-button">Cancel</a>
                    </div>
                </div>
        </div>
    </div>
    </form>
</body>
</html>