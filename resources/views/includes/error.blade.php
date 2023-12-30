@if (Session::has('success'))
          <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif

          @if (Session::has('fail'))
              <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
          @endif