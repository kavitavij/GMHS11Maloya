<div>
    <div class="middle_container">
        <div class="left_content">
                <span>
                    <h3 style="color: #F65314;">Mandatory Disclosure </h3>
                    @if(count($mandatorydata) > 0)
                    @foreach ($mandatorydata as $data)
                    <a class="tender_link" href="{{ asset('public/storage/files/' .$data['file'] ) }}" target="_blank">
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