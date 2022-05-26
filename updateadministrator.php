<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .update {
        margin-top: 2rem;
    }
</style>

<body>
    <div class="container">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Add ID">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add Username">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Add Email">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">DOB</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add dob">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tele.No</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add Tele.No">
        </div>
        <label for="formGroupExampleInput2" class="form-label">Gender</label>
        <select class="form-select" aria-label="Default select example">
         
  <option selected>Select Gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="3">Other</option>
</select>
        <div class="d-grid gap-2">
            <button class="btn btn-success update" type="button">Update</button>
            <button class="btn btn-secondary" type="button">Cancel</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>