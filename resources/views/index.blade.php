<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 CRUD with Image Upload using jQuery Ajax with SweetAlert and DataTables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <h2 class="text-center">Laravel 10 CRUD with Image Upload using jQuery Ajax with SweetAlert and
                    DataTables</h2>
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Employees</h3>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                                class="bi-plus-circle me-2"></i>Add New
                            Employee</button>
                    </div>
                    <div class="card-body" id="show_all_employees">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModal" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="F">Add New Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 bg-light">
                    Form
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="add_employee_btn" class="btn btn-primary">Add Employee</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(function() {
            //fetch all employee ajax request
            fetchAllEmployees();

            function fetchAllEmployees() {
                $.ajax({
                    url: '{{ route('fetchAll') }}',
                    method: 'get',
                    success: function(response) {
                        $("#show_all_employees").html(response);
                    }
                });
            }
        });
    </script>
</body>

</html>
