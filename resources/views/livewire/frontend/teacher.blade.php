<div>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    
    <div class="table_container">
        <h3 class="ms-lg-2" style="color: #F65314; "> Staff Details </h3>
        <table class="gallery_detail" id="myTable">
            <thead>
                <tr style="background-color: #214674; color: #fff">
                    <th>Teacher Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                @if(count($teacherdata) > 0)
                @foreach ($teacherdata as $data)
                <tr style="background-color: #eee">
                    <td>{{$data->teacher_name}}</td>
                    <td>{{$data->designation}}</td>
                    <td>{{$data->qualification}}</td>
                </tr>
                @endforeach
                @else
                <td colspan="7" align="center">
                    No Data Found.
                </td>
                @endif
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</div>