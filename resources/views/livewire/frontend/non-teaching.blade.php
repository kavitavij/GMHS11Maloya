<div>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <div class="table_container">
    <h3 class="pt-4 mr-lg-5" style="color: #F65314; "> Non Teaching </h3>
    <table class="gallery_detail" id="myTable">
      <thead>
        <tr style="background-color: #214674; color: #fff">
          <th>Name</th>
          <th>Designation</th>
          <th>Content</th>
        </tr>
      </thead>
      <tbody>
        @if(count($nonTeacherdata) > 0)
        @foreach ($nonTeacherdata as $data)

        <tr style=" background-color: #eee">
          <th>{data.name}</th>
          <th>{data.designation}</th>
          <th>{data.contact}</th>
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