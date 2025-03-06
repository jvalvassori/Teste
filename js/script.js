$(document).ready(function () {
    function loadTasks() {
        $.get("list.php", function (data) {
            $("#taskList").html(data);
        });
    }
    loadTasks();
    
    $("#addTask").click(function () {
        let task = $("#task").val();
        if (task.trim() !== "") {
            $.post("add.php", { description: task }, function () {
                $("#task").val("");
                loadTasks();
            });
        }
    });
    
    $(document).on("change", ".toggleTask", function () {
        let id = $(this).data("id");
        $.post("toggle.php", { id: id }, function () {
            loadTasks();
        });
    });
    
    $(document).on("click", ".deleteTask", function () {
        let id = $(this).data("id");
        $.post("delete.php", { id: id }, function () {
            loadTasks();
        });
    });
});