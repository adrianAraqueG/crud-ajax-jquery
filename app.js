$(function(){
    console.log('jQuery is working');

    //Edit variable
    let edit = false;

    $('#task-result').hide();
    fetchTasks();

    // Search
    $('#search').keyup(function(e){
        if($('#search').val()){
            let search = $('#search').val();

            $.ajax({
                url: 'task-search.php',
                type: 'POST',
                data: { search },
                success: function(response){
                    let task = JSON.parse(response);
                    let template = '';

                    task.forEach( task=> {
                        template += `
                        <li>${task.name}</li>
                        `
                    });

                    $('#container').html(template);
                    $('#task-result').show();
                }
            })
        }else if($('#search').val() == ''){
            $('#task-result').hide();
        }
    });


    // Save Task
    $('#task-form').submit(function(e){
        e.preventDefault();

        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#taskId').val()
        }

        let url = edit === true ? 'task-edit.php' : 'task-add.php';

        $.post(url, postData, function(response){
            console.log(response);

            fetchTasks();
            $('#task-form').trigger('reset');
            edit = false;
        });
    });


    // Get all Tasks
    function fetchTasks(){
        $.ajax({
            url: 'task-all.php',
            type: 'GET',
            success: function(response){
                let task = JSON.parse(response);
                let template = '';
    
                task.forEach(task => {
                    template += `
                        <tr taskId="${task.id}">
                            <td>${task.id}</td>
                            <td>
                                <a href="#" class="task-item text-dark">${task.name}</a>
                            </td>
                            <td>${task.description}</td>
                            <td>
                                <buttom class="task-delete btn btn-danger btn-sm">delete</buttom>
                            </td>
                        </tr>
                    `;
                }); 
                
                $('#tasks').html(template);
            }
        });
    }

    // Delete Task
    $(document).on('click', '.task-delete', function(){
        if(confirm('Are you sure?')){
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('taskId');
            
            $.post('task-delete', {id}, function(response){
                fetchTasks();
                console.log(response);
            });
        }
    });


    // Edit Task
    $(document).on('click', '.task-item', function(){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('taskId');

        $.post('task-one.php', {id}, function(response){
            let task = JSON.parse(response);
            console.log(task[0].name);
            
            $('#name').val(task[0].name);
            $('#description').val(task[0].description);
            $('#taskId').val(task[0].id);
            edit = true;
        });
    });
    
});