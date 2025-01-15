<div>
  <div class="middle_container">
    <div class="left_content">
      <h3>Certificates</h3>
      <table class="gallery_detail">
        <thead>
          <tr style="background-color: #247583 ; color: #fff;">
            <th>Admission No</th>
            <th>Name of Student</th>
            <th>Class last studied upto</th>
            <th>Certificate Issue Date</th>
            <th>Download Certificate</th>
          </tr>
        </thead>
        <tbody>
          @if(count($certificatedata) > 0)
          @foreach ($certificatedata as $data)
          <tr style="background-color: #eee">
            <td>{{$data->admission_number}}</td>
            <td>{{$data->student_name}}</td>
            <td>{{$data->class_last_studied_upto}}</td>
            <td>{{$data->certificate_issue_date}}</td>
            <td>
              <a href="{{ asset('public/storage/files/' .$data['file'] ) }}" class="tender_link">
                <i class="bi bi-file-earmark-arrow-down-fill"></i>
              </a>
            </td>
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
  </div>
</div>