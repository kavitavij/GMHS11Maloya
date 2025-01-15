<footer class="footer">
  <div class="section">
    <div class="section_bar mb-3">Department Links</div>
    <a href="http://chdeducation.gov.in/" target="_blank" rel="noreferrer">
      Education Department Chandigarh
    </a>
    <br />
    <a href="http://chandigarh.gov.in/" target="_blank" rel="noreferrer">
      Chandigarh Administration
    </a>
  </div>
  <div class="section">
    <div class="section_bar mb-3">Educational Links</div>
    <a href="http://cbse.nic.in/newsite/index.html" target="_blank" rel="noreferrer">
      CBSE Delhi
    </a>
    <br />
    <a href="http://cbse.nic.in/newsite/index.html" target="_blank" rel="noreferrer">
      CBSE Latest Circulars
    </a>
    <br />
    <a href="http://www.cbseguess.com/papers/sample_papers/x/" target="_blank" rel="noreferrer">
      Sample Papers of 10th Class
    </a>
    <br />
    <a href="http://www.cbseguess.com/papers/sample_papers/xii/" target="_blank" rel="noreferrer">
      Sample Papers of 12th Class
    </a>
    <br />
    <a href="http://cbse.nic.in/newsite/index.html" target="_blank" rel="noreferrer">
      CBSE Syllabus
    </a>
    <br />
  </div>

  @foreach ($data as $data)
  <div class="section">
    <div class="section_bar mb-3">School Location</div>
    <iframe src="{{$data->map}}" width="260" height="140" style="border:0" title="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="section">
    <div class="section_bar mb-3">Contact Us</div>
    <div class="contact">

      Contact : <a href="tel:{{$data->phone_number}}">{{$data->phone_number}}</a>
      <br />
      Email :<a href="mailto:{{$data->email}}">{{$data->email}}</a>
    </div>
  </div>
  @endforeach
</footer>