<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

        <a href="" class="navbar-brand">Tasks App</a>

        <ul class="navbar-nav ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <input type="search" id="search" class="form-control mr-2" placeholder="Search task">
                <button class="btn btn-success my-2 my-sm-0" type="submit">
                    SEARCH
                </button>
            </form>
        </ul>

    </nav>


    <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form class="task-form" id="task-form">
                            <input type="hidden" id="taskId">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="task-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="description" cols="30" rows="10" placeholder="task description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block text-center">
                                Save Task
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card my-4" id="task-result">
                    <div class="card-body">
                        <ul id="container">

                        </ul>
                    </div>
                </div>

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody id="tasks">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>