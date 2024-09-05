
function Task() {
  const taskInput = document.getElementById("taskInput");
  const taskList = document.getElementById("taskList");
  const taskValue = taskInput.value;
  if (taskValue.trim() === "") {
    alert("Sorry,please input a task");
    return;
  }

  const task = document.createElement("div");
  task.className = "task";

  const taskText = document.createElement("span");
  taskText.innerText = taskValue;

  const deleteButton = document.createElement("button");
  deleteButton.innerText = "Delete";
  deleteButton.onclick = function () {
    taskList.removeChild(task);
  };

  task.appendChild(taskText);
  task.appendChild(deleteButton);

  taskList.appendChild(task);
  taskInput.value = "";
}
