    <style>
        .hidden{
            display: none;
        }
    </style>
    
    
    <div class="col-sm-12 right-col-fix">
        <div>
            <div class="list-group">
                <div class="list-group-item hidden">
               
                    </div>
                @if (isset($data_output_category) && isset($data_output_category['id']))
                
                <a href="{{ route('department-profile', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item ">Profile</a>
                <a href="{{ route('department-vision-mission', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Vision Mission</a>
                <a href="{{ route('department-laboratories-information', ['id' => $data_output_category['id']]) }}"
                class="list-group-item active-rp-link">Laboratories Information</a>
                <a href="{{ route('department-faculty', ['id' => $data_output_category['id']]) }}"
                class="list-group-item active-rp-link">Faculty</a>

                {{-- <div class="list-group-item ">
                    <a style="display: none;"></a>
                    <h6 class="dropdown-toggle" style="font-size: 17px; color:white;">Faculty</h6>
                    <a href="{{ route('department-faculty', ['id' => $data_output_category['id']]) }}" class="list-group-item "> Teaching</a>
                    <a href="{{ route('department-nonteaching-faculty', ['id' => $data_output_category['id']]) }}" class="list-group-item "> Non - Teaching</a>
                </div> --}}
                {{-- <a href="{{ route('department-syllabus', ['id' => $data_output_category['id']]) }}"
                class="list-group-item active-rp-link">Syllabus</a> --}}

                <a href="{{ route('department-time-table', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Time Table</a>
                <a href="{{ route('department-mentor', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Mentor</a>
                <a href="{{ route('department-achievements-awards', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Achievements And Awards</a>
                <a href="{{ route('department-activities-events', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Activities And Events</a>
                <a href="{{ route('department-students-association', ['id' => $data_output_category['id']]) }}"
                    class="list-group-item active-rp-link">Students Association</a>
                <a href="{{ route('department-plan', ['id' => $data_output_category['id']]) }}" class="list-group-item active-rp-link">Syllabus</a>
                <a href="{{ route('department-curriculum', ['id' => $data_output_category['id']]) }}" class="list-group-item active-rp-link">Curriculum</a>
                <a href="{{ route('department-newsletter', ['id' => $data_output_category['id']]) }}" class="list-group-item active-rp-link">Newsletter</a>
                


                
                @else
                <p> Data not available</p>
                @endif
                
            </div>

        </div>
    </div>