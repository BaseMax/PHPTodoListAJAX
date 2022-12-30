$(window).ready(function () {
  let saveBtn = $("#save");
  let getTasksBtn = $("#getTasks");
  let titleInp = $("#form1");
  let descriptionInp = $("#form2");
  let tbody = $("#tbody");

  saveBtn.click(function (event) {
    event.preventDefault();
    if (
      titleInp.val().trim().length > 0 &&
      descriptionInp.val().trim().length > 0
    ) {
      let title = titleInp.val().trim();
      let description = descriptionInp.val().trim();
      $.ajax({
        type: "POST",
        url: "controllers/add-task.php",
        data: { title: title, description: description },
        success: function (response) {
          show(response, tbody, titleInp, descriptionInp);
        },
        error: function (response) {
          console.log(response);
        },
      });
    }
  });

  getTasksBtn.click(function (event) {
    event.preventDefault();
    $.ajax({
      type: "GET",
      url: "controllers/get-tasks.php",
      success: function (response) {
        show(response, tbody, titleInp, descriptionInp);
      },
      error: function (response) {
        console.log(response);
      },
    });
  });
});

function setEmpty(inp) {
  inp.val("");
}

function show(response, tbody, titleInp, descriptionInp) {
  let resultHTML = null;
  console.log(response);
  response = JSON.parse(response);
  response.forEach((task) => {
    let status = task.status ? "Completed" : "In progress";
    resultHTML += `<tr> <th scope="row">${task.id}</th> <td>${task.title}</td> <td>${task.description}</td> <td>${status}</td> <td> <button type="submit" class="btn btn-danger"> <a href="?delete_task=${task.id}">Delete</a> </button> <button type="submit" class="btn btn-success ms-1"> <a href="?finish_task=${task.id}">Finished</a> </button> </td> </tr>`;
  });
  tbody.html(resultHTML);
  setEmpty(titleInp);
  setEmpty(descriptionInp);
  resultHTML = null;
}
