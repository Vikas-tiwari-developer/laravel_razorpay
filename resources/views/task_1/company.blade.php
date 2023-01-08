<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<style>
    .mt-100 {
    margin-top: 100px
}

body {
    color: #000;
    min-height: 100vh
}
</style>
</head>
<body>

<div class="row d-flex justify-content-center mt-100">
    <div class="col-md-6"> 
        <form action="{{ route('emp') }}" method="post">
            @csrf
        <select id="choices-multiple-remove-button" name="company[]" placeholder="Please Select a Company" multiple>
            @foreach ($companies as $company)
            <option value="{{ $company }}">{{ $company }}</option>
            @endforeach    
        </select>
        <button type="submit">Fetch Employee</button> 

</from>

<div class="employee_data">
    @if(isset($employee))
       @foreach ($employee as $emp)
           <p>{{ $emp->employee_name }}</p>
       @endforeach
    @endif
</div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
    });


});
</script>
</body>
</html>


