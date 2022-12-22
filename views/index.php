<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Let us save your Tasks !</title>
  <link rel="icon" type="image/x-icon" href="assets/Web/icons8-todo-list-sf-black-96.png" />
</head>

<body>
  <p id="test"></p>
  <section class="vh-100" style="background-color: #eee">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
              <h4 class="text-center my-3 pb-3">To Do App</h4>

              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
                <div class="col-12">
                  <div class="form-outline">
                    <input type="text" id="form1" class="form-control" placeholder="Title" name="title">
                    <br>
                    <input type="text" id="form2" class="form-control" placeholder="Description" name="description">
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary" id="save">Save</button>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-warning" id="getTasks">
                    Get tasks
                  </button>
                </div>
              </form>

              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Todo item</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($allTasks as $task) {
                    $status = $task["status"] ? "Completed" : "In progress";
                    $text = <<<TEXT
  <tr>
  <th scope="row">{$task["id"]}</th>
  <td>{$task["title"]}</td>
  <td>{$task["description"]}</td>
  <td>$status</td>
  <td>
    <button type="submit" class="btn btn-danger">
      <a href="?delete_task={$task["id"]}">Delete</a>
    </button>
    <button type="submit" class="btn btn-success ms-1">
      <a href="?finish_task={$task["id"]}">Finished</a>
    </button>
  </td>
</tr>
TEXT;
                    echo $text;
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    // let saveBtn = $("#save");
    // let getTasks = $("#getTasks");
    // let title = $("#form1");
    // let description = $("#form2");
    // $(window).ready(function(e) {
    //   saveBtn.click(function(event) {
    //     event.preventDefault();
    //     if (
    //       title.val().trim().length !== 0 &&
    //       description.val().trim().length !== 0
    //     ) {
    //       $.post("localhost/PHPTodoListWithAjax/index.php", {
    //           title: title.val(),
    //           description: description.val()
    //         },
    //         function(result) {
    //           alert(result);
    //         }
    //       );
    //     }
    //   })
    // });
  </script>
</body>

</html>