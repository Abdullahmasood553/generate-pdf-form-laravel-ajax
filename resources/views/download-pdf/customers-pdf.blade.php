<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <div class="col-md-6"><label><strong>Customer Details</strong></label></div>
        &nbsp;
        &nbsp;
            <table class="table table-bordered text-center ">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $fname }}</td>
                        <td>{{ $lname }}</td>
                        <td>{{ $email }}</td>
                    </tr>
                </tbody>
            </table>
    </div>
    <div class="col-md-3"></div>
    <div class="clearfix"></div>
</div>