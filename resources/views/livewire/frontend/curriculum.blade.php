<div>
    <div class="middle_container">
        <div class="left_content">
                <span>
                    <h3>Curriculum </h3>
                    @if(count($CurriculumData) > 0)
                    @foreach ($CurriculumData as $data)
                   
                    <a  class="tender_link"  href="{{ asset('public/storage/files/' .$data['file'] ) }}">
                        <i class="fas fa-arrow-circle-right" style="color: #eb511e"></i>
                        {{$data->file_name}}
                    </a>
                    <br />
                    @endforeach
                    @else
                    <td colspan="2" align="center">
                        No Data Found.
                    </td>
                    @endif
                </span>
        </div>
    </div>
</div>