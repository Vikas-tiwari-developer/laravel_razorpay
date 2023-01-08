<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
</head>
<body>
    
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Name</th>
                <th>Age</th>
                <th>Qualification</th>
                <th>Email</th>
                <th> Phone No</th>
                <th>Address</th>
                <th>Bank Name</th>
                <th>Account No</th>
                <th>IFSC</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $emp)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $emp->name }}</td>
                    <td>{{ $emp->age }}</td>
                    <td>{{ $emp->qualifications }}</td>
                    <td>{{ $emp->personal->email ?? '' }}</td>
                    <td>{{ $emp->personal->phone ?? '' }}</td>
                    <td>{{ $emp->personal->address ?? '' }}</td>
                    <td>{{ $emp->financial->bank_name ?? '' }}</td>
                    <td>{{ $emp->financial->acc_no ?? '' }}</td>
                    <td>{{ $emp->financial->acc_no ?? '' }}</td>
                   
                    
                </tr>
            @endforeach
            
          
        </tbody>
        
    </table>














<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>