<div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <?php
          $footer_tt = $lt_chung->Random(10);
          ?>
          @foreach($footer_tt as $lt)
          <li><a class="tomtat" href="{{ asset('')}}loaitin/{{ $lt->id }}/{{ $lt->tenkhongdau }}.html">{{ $lt->ten }}</a></li>
          @endforeach
          
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2017 The News Reporter Tin Viet Online. All rights reserved | Design by <a target="_blank" rel="nofollow" href="#" style="color:red;">Quỷnh is</a></p>
        {{-- <p>Tất cả các tin tức trong trang web chỉ được lấy từ các trang báo lá cải</p> --}}
      </div>
    </div>
   
