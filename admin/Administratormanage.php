<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user Manage</title>
    <style>
        .tab {
            width: 80%;
        }
        
        .td {
            text-align: center;
        }
        
        td.a:hover {
            color: red;
        }
    </style>
    <script src="https://kit.fontawesome.com/9d5313112d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-dark table-striped tab">
            <thead>
                <tr>
                <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tele.No</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Manage</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Mark</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>

                    <td> <button type="button" class="btn btn-danger"><i class="fas fa-times"></i>Remove</button>
                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i>Update</button></td>
                    
                </tr>


            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>