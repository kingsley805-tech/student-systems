@include('includes.headerCss')
<style>
@media (min-width: 768px) {
    .logout-mode{
      margin-left: 40rem;
    }
    
}
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #60A5FA;
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb {
    background: #F9FAFB;
}
</style>
<body>
  @extends('includes.menu')

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="dash-content mt-2 py-5   bg-white shadow-md  ">
        <div class="title space-y-3">
         
            <span class="inner-name text bg-slate-50 font-extrabold text-textHover m-3   p-3 rounded-md">Dashboard</span>
            <br>
            @if (Session::has('success'))
            <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
            @endif
  
            @if (Session::has('fail'))
                <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
            @endif
  
        </div>
        <div class="displayS  items-center justify-center flex flex-col py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
          <div class="grid md:grid-cols-3   gap-9 items-center justify-center ">
            <!-- First Container -->
            <!-- Content for the first container -->
        
            
            <!-- first Container -->
            <div class="bg-white p-4 py-7 md:w-80 md:h-96 border-gray-300 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3 border mt-4">
              <!-- Transportation Details -->
              <div class="text-3xl  font-semibold text-textC">Student Details</div>
              <div class="text-2xl font-semibold text-textC">Your Details</div>
              <div class="">
                <p class="font-semibold my-2 text-textC"><strong>Student Name:</strong>{{ $add->FirstName}} {{ $add->LastName}}</p>
                        <p class="font-semibold my-2 text-textC"><strong>Admission Date:</strong>{{ $add->AdmissionDate}}</p>
                        <p class="font-semibold my-2 text-textC"><strong>Index Number:</strong>{{ $add->IndexNumber}}</p>
                        <p class="font-semibold my-2 text-textC"><strong>Class ID:</strong>{{ $add->classroom_id}}</p>
                        <p class="font-semibold my-2 text-textC"><strong>Identity Number:</strong>{{ $add->IdentityNumber }}</p>
                        <p class="font-semibold my-2 text-textC"><strong>Phone:</strong>{{ $add->StudentNumber}}</p>
              </div>
              <p class="font-semibold text-textC text-xl">Father's Name: <span class="father-name font-normal text-textC">{{$fada->	FatherName}}</span></p>
              <p class="font-semibold text-textC text-xl">Father's Contact: <span class="father-name font-normal text-textC">{{$fada->	FatherContact}}</span></p>
             
            </div>
            <!-- second Container -->
            <div class="bg-white md:w-80 md:h-96 p-4 border-gray-300 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3 border mt-4">
              <!-- Transportation Details -->
              <div class="text-3xl py-5 font-semibold text-textC">Total Invoice:</div>
              <div class="mt-2">
                <p class="font-semibold my-6 text-textC text-xl">Invoice Title: <span class="route-name font-normal">{{$vow->Description}}</span></p>
                <p class="font-semibold my-5 text-textC text-xl">Invoice Number: <span class="vehicle-number font-normal">{{$vow->InvoiceNumber}}</span></p>
                <p class="font-semibold my-6 text-textC text-xl ">Status: <span class="fare font-normal bg-blue-400 p-2 rounded-md text-white font-bold">{{$vow->PaymentStatus}}</span></p>
                <p class="font-semibold my-5 text-textC text-xl">Due: <span class="driver-name font-normal">{{$vow->DateDue}}</span></p>
                <p class="font-semibold my-5 text-textC text-xl">Date Issued: <span class="driver-mobile font-normal">{{$vow->DateIssued}}</span></p>
              </div>
            </div>
            <!-- Third Container -->
            <div class="bg-white md:w-80 md:h-96 p-4 border-gray-300 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover-bg-gray-700 mb-3 border mt-4">
              <!-- Transportation Details -->
              <div class="text-3xl py-5 font-semibold text-textC">Transportation Details</div>
              <div class="mt-2">
                <p class="font-semibold my-2 text-textC text-xl">Route Name: <span class="route-name font-normal">{{$buz->routeName}}</span></p>
                <p class="font-semibold my-2 text-textC text-xl">Vehicle Number: <span class="vehicle-number font-normal">{{$buz->busNumber}}</span></p>
                <p class="font-semibold my-2 text-textC text-xl">Fare: <span class="fare font-normal">{{$buz->fare}}</span></p>
                <p class="font-semibold my-5 text-textC text-xl">Driver's Name: <span class="driver-name font-normal">{{$cars->driverName}}</span></p>
                <p class="font-semibold my-5 text-textC text-xl">Driver's Mobile: <span class="driver-mobile font-normal">{{$cars->driverNumber}}</span></p>
              </div>
            </div>
          </div>
        
          <!-- Fourth Container -->
          
                  <div class="bg-gray-50 attendance dark:bg-gray-800 border border-gray-200  hover:bg-gray-100  dark:border-gray-700 dark:hover-bg-gray-700 rounded-lg p-3   mb-8">
                    <div class="text-3xl font-semibold pt-7 text-textC">Your Attendance</div>
                    <p class="font-semibold my-6 text-textC text-6xl">20</p>
                    <p class="font-semibold my-4 text-textC text-xl">Payable: <span class="payable"></span></p>
                    <p class="font-semibold my-2 text-textC text-xl">Total Paid: <span class="total-paid"></span></p>
                    <div class="my-7">
                      <p class="font-semibold my-2 text-textC text-xl">Note:</p>
                      <p class="font-normal my-2 text-textC text-xl tracking-tight">Total paid shows all payments made by the student. Payable will only show the current session fee type amount estimate.</p>
                      @foreach($note as $no)
                      <div class="text-2xl mt-4 font-semibold my-2 text-textC te">Notice Board</div>
                      <div class="bg-blue-500 w-4 h-4 rounded-full font-semibold my-5 text-textC not1"></div><p class="font-semi-bold text-blue-600">{{$no->	title}}</p>
                      <div class="bg-blue-500 w-4 h-4 rounded-full mt-1 font-semibold my-5 text-textC not2"></div><span>{{$no->description}}</span>
                      <div class="bg-blue-500 w-4 h-4 rounded-full mt-1 font-semibold my-5 text-textC not3"></div><span class="text-green-400 font-bold ">{{$no->status}}</span>
                      <div class="bg-blue-600 w-4 h-4 rounded-full mt-1 font-semibold my-5 text-textC not3"></div><span><a href="{{$no->url}}"target='blank'class='text-white bg-blue-300 hover:bg-gray-400 p-2.5 rounded-md font-bold'>View</a></span>
                      @endforeach
                    </div>
                </div>
                </div>
          
        
         </div>
            
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="./index.js"></script>
</body>

</html>