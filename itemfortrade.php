<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/item_for_trade.css">
    <link rel="stylesheet" href="css/tag.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
    <title>Item For Trade</title>
</head>

<body>
    <div class="container">
        <div class="contents">
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
                <div class="wrapper">

                    <div class="content">
                        <p>Press enter or after each tag</p>
                        <ul><input type="text" id="inputs" spellcheck="false"></ul>
                    </div>
                    <div class="details">
                        <p><span>5</span> tags are remaining</p>
                        <button>Remove All</button>
                    </div>
                </div>
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
    <script>
        const ul = document.querySelector("ul"),
            input = document.getElementById("inputs"),
            tagNumb = document.querySelector(".details span");
        let maxTags = 5,
            tags = ["Books", "Pens"];
        countTags();
        createTag();

        function countTags() {
            input.focus();
            tagNumb.innerText = maxTags - tags.length;
        }

        function createTag() {
            ul.querySelectorAll("li").forEach(li => li.remove());
            tags.slice().reverse().forEach(tag => {
                let liTag = `<li>${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
                ul.insertAdjacentHTML("afterbegin", liTag);
            });
            countTags();
        }

        function remove(element, tag) {
            let index = tags.indexOf(tag);
            tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
            element.parentElement.remove();
            countTags();
        }

        function addTag(e) {
            if (e.key == "Enter") {
                let tag = e.target.value.replace(/\s+/g, ' ');
                if (tag.length > 1 && !tags.includes(tag)) {
                    if (tags.length < 5) {
                        tag.split(',').forEach(tag => {
                            tags.push(tag);
                            createTag();
                        });
                    }
                }
                e.target.value = "";
            }
        }
        input.addEventListener("keyup", addTag);
        const removeBtn = document.querySelector(".details button");
        removeBtn.addEventListener("click", () => {
            tags.length = 0;
            ul.querySelectorAll("li").forEach(li => li.remove());
            countTags();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>

</html>