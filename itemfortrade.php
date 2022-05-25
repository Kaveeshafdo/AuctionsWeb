<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/item_for_trade.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Item For Trade</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="image">
                <div class="img"> <img src="images/undraw_moments_0y20.svg" alt=""></div>

                <div class="button">
                    <p>You Can Add 10 Photos</p>
                    <button class="btns">Add Photos</button>
                </div>

            </div>
            <div class="description">
                <h3>Post Your Item</h3>

                <input name="name" type="text" class="feedback-input" placeholder="Title" />
                <input name="name" type="text" class="feedback-input" placeholder="Add Location" />
                <textarea name="text " class="feedback-input " placeholder="Description  "></textarea>
                <div class="form-group"> <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Select Category</option>
                    <option>Alaska</option>
                    <option>California</option>
                    
                </select> </div>
                <!-- /.form-group -->
                <div class="buttons">
                    <button class="btns1">Cancel</button>
                    <button class="btns2">Submit</button>
                </div>

            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                closeOnSelect: false
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>

</html>