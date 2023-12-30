@include('includes.headerCss')


    <style>
      .first-button {
        width: 18.1rem;
        padding: 0.5rem;
        margin:20px 0 40px 34px;
      }
      @media (min-width: 768px) {
        .first-button {
          width: 24rem;
          margin:20px 0 40px 80px;
        }
      }
      
      
    </style>
  </head>
  <body>
   
    

    <div class="spinner h-screen flex items-center justify-center ">
      <div role="status">
        <svg aria-hidden="true" class="inline w-10 h-10 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
    </div>
    <!--main-container-->
    <div class="main-container bg-white flex flex-col items-center justify-center pb-20">
      <!--header-->
      <header class="bg-header w-screen h-16">
        <!--logo-->
        <div class=" w-24 "><img src="./assets/images/r-logo.png" alt=""  loading="lazy"></div>
      </header>
      <!--logins prompt container-->
      <div class="flex space-x-10 my-10 md:space-x-52">
        <!--login as student-->
        <div
          class="students-prompt  bg-loghead border-header border-l-4  border-b-mainBorder rounded-sm border-b px-2 md:mr-4"
        >
          <div
            class="student-op bg-loghead w-7 font-bold pr-0.5 border-header text-blue-500 border-2 text-center m-2 rounded-full"
          >
            !
          </div>
          <span class="tracking-tight text-htext font-bold"
            >Logins for Students:</span
          >
          <div class="flex">
            <span class="tracking-tight text-htext font-bold">Username:</span
            ><span class="tracking-tight ml-1 text-htext font-normal">KB2020</span>
          </div>
          <div class="flex">
            <span class="tracking-tight text-htext font-bold">Password:</span
            ><span class="tracking-tight ml-1 text-htext font-normal">123456789</span>
          </div>
        </div>
        <!--Login as parent-->
        <div
          class="parents-prompt bg-loghead px-2 border-b-mainBorder border-b rounded-sm  border-header border-r-4 md:mr-4"
        >
          <div
            class="parent-op bg-loghead w-7 font-bold pr-0.5 border-header text-blue-500 border-2 text-center m-2 rounded-full"
          >
            !
          </div>
          <span class="tracking-tight text-htext font-bold"
            >Logins for Parents:</span
          >
          <div class="flex">
            <span class="tracking-tight text-htext font-bold">Username:</span
            ><span class="tracking-tight ml-1 text-htext font-normal">KB2020</span>
          </div>
          <div class="flex">
            <span class="tracking-tight  text-htext font-bold">Password:</span
            ><span class="tracking-tight ml-1 text-htext font-normal">123456789</span>
          </div>
        </div>
      </div>
      <!--logins form container-->
      <div class="form-container bg-white border m-auto  border-mainBorder border-t-loghead rounded-lg">
        <!--parents and students login container-->
        <div class="flex flex-row  ">
          <button
            class="student-log py-3 px-8 bg-loghead border-b-2 rounded-tl-md  font-semibold text-htext  md:px-20  "
          > 
            Login as Student
            
          </button>
          <button
            class="parent-log  px-8 bg-loghead border-b-2 rounded-tr-md   border-b-header border-l  font-semibold text-htext  md:px-20  "
          > 
            Login as Parent
            
          </button>
          
        </div>
        <!--Username-->
        @if ($errors->has('userName'))
        <span class="text-red-500">{{ $errors->first('userName') }}</span>
       @endif

       @if (Session::has('success'))
       <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
       @endif

       @if (Session::has('fail'))
           <span style="background-color: rgb(226, 42, 42); color:black">{{Session::get('fail')}}</span>
       @endif
         <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-8">
        @csrf
        <div class="flex mr-2 items-center justify-center md:space-x-40 space-x-16 "><h1 class=" pt-4 pb-2 static mr-7  font-semibold text-gray-900">Username</h1><span class="check-username   font-semibold tracking-tighter text-white ">---------- --- --------</span></div>
        <!--Username input-->
        <input
          type="username"name="userName"
          class="user-input focus:outline-none ring-gray-200 font-semibold text-htext  caret-blue-700 border-2   rounded-md  w-4/5 h-11 ml-8 bg-loghead border-mainBorder  md:w-96 md:ml-20"
        />
        <!--Password-->
        <div class="flex items-center justify-center mr-2 space-x-16 md:space-x-40"><h1 class=" pt-4 pb-2 static mr-7  font-semibold text-gray-900">Password</h1><span class="check-password    font-semibold  tracking-tighter text-white">--------- --- --------</span></div>
        <!--Password input-->
        <input
          type="password"name="password"
          class="password-input border-2 font-semibold text-htext ring-gray-200  rounded-md focus:outline-none caret-blue-700  border-mainBorder  bg-loghead w-4/5 h-11 ml-8 md:w-96 md:ml-20"
        />
      
        <!--rember me or checkbox and forgot password container-->
        <div class="flex items-center justify-center  md:space-x-14 pt-2 pb-2 ">
          <div class="tracking-tighter ml-3 mr-6 md:mr-16  font-semibold text-gray-900">
            <input type="checkbox" class="checkbox mr-1 md:mr-1 text-blue-300 " />Remember me
          </div>
          <button class="forgot">
            <a href="" class="tracking- forgott  mr-3 font-semibold text-gray-900 hover:text-blue-400 md:mr-5">Forgot your password?</a>
          </button>
        </div>
        <!--button for login-->
        <button
          class="bg-blue-500 focus:outline-none hover:bg-blue-400 first-button ml-7 mb-10 mt-5 md:w-96 md:ml-20 font-extrabold text-white rounded-md shadow-lg"
        >
          LOG IN
        </button>
      </form>
        
    </div>
    </div>
  </body>
</html>
