@include('includes.headerCss');
<style>
@media (min-width: 768px) {
    .logout-mode{
      margin-left: 40rem;
    }
    .attendance{
      height: 50.3rem;
      margin-top: 3rem;
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
  <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="https://school.rapidentrepreneurs.com/" class="flex ml-2 md:mr-24">
            <img src="./assets/images/r-logo.png " class="bg-hoverText h-10 w-10 rounded-full " alt="">
            <span
              class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Rapid <sub class="text-header md:ml-16 md:block hidden">system</sub></span>
          </a>
          <ul class="logout-mode bg-white flex items-center justify-center space-x-6  md:ml-96">
            <li class="hover:bg-hoverbg rounded-md hover:text-textC ml-4 md:ml-96 p-1 font-semibold text-gray-600"><a href="#">
                
              <span class="link-name mr-12 hidden md:block "> Settings</span>
          </a></li>
            <li class="hover:bg-hoverbg rounded-md hover:text-hoverText p-1 font-bold text-gray-600"><a href="#">
                <i class="uil uil-signout"></i>
                <span class="link-name log-out ">Logout</span>
            </a></li>

         
        </ul>
        </div>
        
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full text-lg bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li class="dashb">
          <a href="./dashboard"
            class=" flex items-center p-2 text-gray-900 rounded-lg text-lg  font-semibold hover:text-blue-400 hover:bg-slate-100 hover:stroke-blue-400">
           <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 13.4976L12.0209 1.64042C12.5617 1.05866 13.4383 1.05866 13.9791 1.64042L25 13.4976M3.76923 10.5182V23.9254C3.76923 24.7481 4.38914 25.415 5.15385 25.415H10.2308V18.9598C10.2308 18.137 10.8507 17.4701 11.6154 17.4701H14.3846C15.1493 17.4701 15.7692 18.137 15.7692 18.9598V25.415H20.8462C21.6109 25.415 22.2308 24.7481 22.2308 23.9254V10.5182M8.38462 25.415H18.5385" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <span class="ml-3">Dashboard</span>
          </a>
        </li>

        <li class="fee-i">
          <a href="invoice"
            class="flex items-center p-2  hover:text-blue-400 hover:stroke-blue-400 text-gray-900 rounded-lg dark:text-white text-lg hover:bg-gray-100 font-semibold dark:hover:bg-gray-700 group">
            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 7.08452H15M13 11.4865H15M5 15.8885H15M5 20.2905H15M19 7.08452H23.5C24.3284 7.08452 25 7.82358 25 8.73526V22.4915C25 24.3148 23.6569 25.793 22 25.793M19 7.08452V22.4915C19 24.3148 20.3431 25.793 22 25.793M19 7.08452V3.23278C19 2.3211 18.3284 1.58203 17.5 1.58203H2.5C1.67157 1.58203 1 2.3211 1 3.23278V22.4915C1 24.3148 2.34315 25.793 4 25.793H22M5 7.08452H9V11.4865H5V7.08452Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Fee Invoice</span>
            
              
          </a>
        </li>
        <li class="fee-str">
          <a href="./structure"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700  hover:text-blue-400 hover:stroke-blue-400 group">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.46447 23.6936C4.41709 25.6633 7.58291 25.6633 9.53553 23.6936L18.0711 15.083M6 25.1709C3.23858 25.1709 1 22.9126 1 20.127V2.47314C1 1.63744 1.67157 0.959961 2.5 0.959961H9.5C10.3284 0.959961 11 1.63744 11 2.47314V7.94979M6 25.1709C8.76142 25.1709 11 22.9126 11 20.127V7.94979M6 25.1709H23.5C24.3284 25.1709 25 24.4934 25 23.6577V16.5962C25 15.7605 24.3284 15.083 23.5 15.083H18.0711M11 7.94979L14.8388 4.07722C15.4246 3.48628 16.3744 3.48628 16.9602 4.07722L21.9099 9.07047C22.4957 9.6614 22.4957 10.6195 21.9099 11.2104L18.0711 15.083M6 20.127H6.01V20.137H6V20.127Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Fee Structure</span>
            
          </a>
        </li>

        <li class="payment-link">
          <a href="./payment"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-400 hover:stroke-blue-400 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 4.77083V11.4961H16M21 11.4961C21 17.0675 16.5228 21.584 11 21.584C5.47715 21.584 1 17.0675 1 11.4961C1 5.92471 5.47715 1.4082 11 1.4082C16.5228 1.4082 21 5.92471 21 11.4961Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Payment-History</span>
          </a>
        </li>
        <li class="studymat">
          <a href="./study"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg  hover:text-blue-400 hover:stroke-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 5.42872V4.14036C5 2.317 6.34315 0.838867 8 0.838867H18C19.6569 0.838867 21 2.317 21 4.14036V5.42872M5 5.42872C5.31278 5.30706 5.64936 5.24086 6 5.24086H20C20.3506 5.24086 20.6872 5.30706 21 5.42872M5 5.42872C3.83481 5.88194 3 7.10486 3 8.54235V9.83071M21 5.42872C22.1652 5.88194 23 7.10486 23 8.54235V9.83071M23 9.83071C22.6872 9.70904 22.3506 9.64284 22 9.64284H4C3.64936 9.64284 3.31278 9.70904 3 9.83071M23 9.83071C24.1652 10.2839 25 11.5068 25 12.9443V21.7483C25 23.5717 23.6569 25.0498 22 25.0498H4C2.34315 25.0498 1 23.5717 1 21.7483V12.9443C1 11.5068 1.83481 10.2839 3 9.83071" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Study Materials</span>
          </a>
        </li>

        <li class="works">
          <a href="./work"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  hover:text-blue-400 hover:stroke-blue-400 hover:bg-gray-100 text-lg dark:hover:bg-gray-700 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.7858 3.66749L17.5858 1.85168C18.3668 1.06376 19.6332 1.06376 20.4142 1.85168C21.1953 2.63959 21.1953 3.91705 20.4142 4.70497L9.08766 16.1311C8.52374 16.6999 7.8282 17.1181 7.06388 17.3478L4.2 18.2084L5.0531 15.3194C5.28077 14.5483 5.6953 13.8467 6.25922 13.2778L15.7858 3.66749ZM15.7858 3.66749L18.6 6.50644M17 13.9042V19.0154C17 20.3526 15.9255 21.4365 14.6 21.4365H3.4C2.07452 21.4365 1 20.3526 1 19.0154V7.71699C1 6.37985 2.07452 5.29589 3.4 5.29589H8.46667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Home Works</span>
          </a>
        </li>

        <li class="notice">
          <a href="./notice"
            class="flex items-center p-2 text-gray-900 rounded-lg   hover:text-blue-400 hover:stroke-blue-400 dark:text-white font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.8876 3.37726C15.5322 2.39934 14.3739 1.68262 13 1.68262H9C7.62605 1.68262 6.46783 2.39934 6.11235 3.37726M15.8876 3.37726C15.9608 3.57863 16 3.79106 16 4.01059V4.01059C16 4.43916 15.6526 4.78658 15.224 4.78658H6.77599C6.34742 4.78658 6 4.43916 6 4.01059V4.01059C6 3.79106 6.03916 3.57863 6.11235 3.37726M15.8876 3.37726C16.7492 3.42775 17.606 3.49148 18.4578 3.56818C19.9252 3.70034 21 4.68208 21 5.82847V19.5304C21 20.8161 19.6569 21.8584 18 21.8584H4C2.34315 21.8584 1 20.8161 1 19.5304V5.82847C1 4.68208 2.07477 3.70034 3.54224 3.56818C4.39396 3.49148 5.25077 3.42775 6.11235 3.37726" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Notice Board</span>
          </a>
        </li>
        <li class="vent">
          <a href="./event"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700  hover:text-blue-400 hover:stroke-blue-400 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.15385 21.2803H19.8462M2.15385 21.2803C1.51659 21.2803 1 20.6028 1 19.7671M2.15385 21.2803H3.69231C4.32956 21.2803 4.84615 20.6028 4.84615 19.7671M1 19.7671V2.61768M1 19.7671V17.7495C1 16.9138 1.51659 16.2363 2.15385 16.2363M21 19.7671V2.61768M21 19.7671C21 20.6028 20.4834 21.2803 19.8462 21.2803M21 19.7671V17.7495C21 16.9138 20.4834 16.2363 19.8462 16.2363M19.8462 21.2803H18.3077C17.6704 21.2803 17.1538 20.6028 17.1538 19.7671M19.8462 1.10449H2.15385M19.8462 1.10449C20.4834 1.10449 21 1.78197 21 2.61768M19.8462 1.10449H18.3077C17.6704 1.10449 17.1538 1.78197 17.1538 2.61768M21 2.61768V4.63525C21 5.47096 20.4834 6.14844 19.8462 6.14844M2.15385 1.10449C1.51659 1.10449 1 1.78197 1 2.61768M2.15385 1.10449H3.69231C4.32956 1.10449 4.84615 1.78197 4.84615 2.61768M1 2.61768V4.63525C1 5.47096 1.51659 6.14844 2.15385 6.14844M2.15385 6.14844H3.69231M2.15385 6.14844C1.51659 6.14844 1 6.82591 1 7.66162V9.6792C1 10.5149 1.51659 11.1924 2.15385 11.1924M3.69231 6.14844C4.32956 6.14844 4.84615 5.47096 4.84615 4.63525V2.61768M3.69231 6.14844C4.32956 6.14844 4.84615 6.82591 4.84615 7.66162V9.6792M4.84615 2.61768V9.6792M4.84615 2.61768C4.84615 1.78197 5.36275 1.10449 6 1.10449H16C16.6373 1.10449 17.1538 1.78197 17.1538 2.61768M18.3077 6.14844H19.8462M18.3077 6.14844C17.6704 6.14844 17.1538 5.47096 17.1538 4.63525V2.61768M18.3077 6.14844C17.6704 6.14844 17.1538 6.82591 17.1538 7.66162V9.6792M19.8462 6.14844C20.4834 6.14844 21 6.82591 21 7.66162V9.6792C21 10.5149 20.4834 11.1924 19.8462 11.1924M17.1538 2.61768V9.6792M6 11.1924H16M6 11.1924C5.36275 11.1924 4.84615 10.5149 4.84615 9.6792M6 11.1924C5.36275 11.1924 4.84615 11.8699 4.84615 12.7056M4.84615 9.6792C4.84615 10.5149 4.32956 11.1924 3.69231 11.1924M17.1538 9.6792C17.1538 10.5149 16.6373 11.1924 16 11.1924M17.1538 9.6792C17.1538 10.5149 17.6704 11.1924 18.3077 11.1924M16 11.1924C16.6373 11.1924 17.1538 11.8699 17.1538 12.7056M4.84615 19.7671V12.7056M4.84615 19.7671C4.84615 20.6028 5.36275 21.2803 6 21.2803H16C16.6373 21.2803 17.1538 20.6028 17.1538 19.7671M4.84615 19.7671V17.7495C4.84615 16.9138 4.32956 16.2363 3.69231 16.2363M17.1538 19.7671V12.7056M17.1538 19.7671V17.7495C17.1538 16.9138 17.6704 16.2363 18.3077 16.2363M17.1538 12.7056V14.7231C17.1538 15.5589 17.6704 16.2363 18.3077 16.2363M17.1538 12.7056C17.1538 11.8699 17.6704 11.1924 18.3077 11.1924M4.84615 12.7056V14.7231C4.84615 15.5589 4.32956 16.2363 3.69231 16.2363M4.84615 12.7056C4.84615 11.8699 4.32956 11.1924 3.69231 11.1924M2.15385 11.1924H3.69231M2.15385 11.1924C1.51659 11.1924 1 11.8699 1 12.7056V14.7231C1 15.5589 1.51659 16.2363 2.15385 16.2363M18.3077 11.1924H19.8462M19.8462 11.1924C20.4834 11.1924 21 11.8699 21 12.7056V14.7231C21 15.5589 20.4834 16.2363 19.8462 16.2363M2.15385 16.2363H3.69231M18.3077 16.2363H19.8462" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Events</span>
          </a>
        </li>
        <li class="time-t">
          <a href="./classt"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg  hover:text-blue-400 hover:stroke-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.15385 21.7021H19.8462M2.15385 21.7021C1.51659 21.7021 1 21.0247 1 20.189M2.15385 21.7021H9.84615C10.4834 21.7021 11 21.0247 11 20.189M1 20.189V3.03955M1 20.189V18.1714C1 17.3357 1.51659 16.6582 2.15385 16.6582M21 20.189V3.03955M21 20.189C21 21.0247 20.4834 21.7021 19.8462 21.7021M21 20.189V18.1714C21 17.3357 20.4834 16.6582 19.8462 16.6582M19.8462 21.7021H12.1538C11.5166 21.7021 11 21.0247 11 20.189M21 3.03955C21 2.20384 20.4834 1.52637 19.8462 1.52637H2.15385C1.51659 1.52637 1 2.20384 1 3.03955M21 3.03955V5.05713C21 5.89284 20.4834 6.57031 19.8462 6.57031M1 3.03955V5.05713C1 5.89284 1.51659 6.57031 2.15385 6.57031M2.15385 6.57031H19.8462M2.15385 6.57031H9.84615C10.4834 6.57031 11 7.24779 11 8.0835M2.15385 6.57031C1.51659 6.57031 1 7.24779 1 8.0835V10.1011C1 10.9368 1.51659 11.6143 2.15385 11.6143M19.8462 6.57031H12.1538C11.5166 6.57031 11 7.24779 11 8.0835M19.8462 6.57031C20.4834 6.57031 21 7.24779 21 8.0835V10.1011C21 10.9368 20.4834 11.6143 19.8462 11.6143M2.15385 11.6143H9.84615M2.15385 11.6143C1.51659 11.6143 1 12.2917 1 13.1274V15.145C1 15.9807 1.51659 16.6582 2.15385 16.6582M11 10.1011V8.0835M11 10.1011C11 10.9368 10.4834 11.6143 9.84615 11.6143M11 10.1011C11 10.9368 11.5166 11.6143 12.1538 11.6143M9.84615 11.6143C10.4834 11.6143 11 12.2917 11 13.1274M12.1538 11.6143H19.8462M12.1538 11.6143C11.5166 11.6143 11 12.2917 11 13.1274M19.8462 11.6143C20.4834 11.6143 21 12.2917 21 13.1274V15.145C21 15.9807 20.4834 16.6582 19.8462 16.6582M2.15385 16.6582H9.84615M11 15.145V13.1274M11 15.145C11 15.9807 10.4834 16.6582 9.84615 16.6582M11 15.145C11 15.9807 11.5166 16.6582 12.1538 16.6582M9.84615 16.6582C10.4834 16.6582 11 17.3357 11 18.1714M11 20.189V18.1714M11 18.1714C11 17.3357 11.5166 16.6582 12.1538 16.6582M12.1538 16.6582H19.8462" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Class Time Table</span>
          </a>
        </li>
        <li class="liveC">
          <a href="./livec"
            class="flex items-center p-2 text-gray-900  hover:text-blue-400 hover:stroke-blue-400 rounded-lg dark:text-white font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.8462 8.79438L19.6868 1.74082C20.1714 1.03471 21 1.53481 21 2.5334V19.5389C21 20.5375 20.1714 21.0376 19.6868 20.3314L14.8462 13.2779M3.30769 21.124H12.5385C13.813 21.124 14.8462 19.6185 14.8462 17.7614V4.31087C14.8462 2.45374 13.813 0.948242 12.5385 0.948242H3.30769C2.03319 0.948242 1 2.45374 1 4.31087V17.7614C1 19.6185 2.03319 21.124 3.30769 21.124Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Live classes</span>
          </a>
        </li>
        <li class="bookiz">
          <a href="./books"
            class="flex items-center p-2 text-gray-900 rounded-lg  hover:text-blue-400 hover:stroke-blue-400 dark:text-white font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 4.16526C9.23081 2.42706 6.89451 1.37012 4.33333 1.37012C3.16455 1.37012 2.0426 1.59023 1 1.99474V19.3754C2.0426 18.9709 3.16455 18.7507 4.33333 18.7507C6.89451 18.7507 9.23081 19.8077 11 21.5459M11 4.16526C12.7692 2.42706 15.1055 1.37012 17.6667 1.37012C18.8355 1.37012 19.9574 1.59023 21 1.99474V19.3754C19.9574 18.9709 18.8355 18.7507 17.6667 18.7507C15.1055 18.7507 12.7692 19.8077 11 21.5459M11 4.16526V21.5459" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Books Issued</span>
          </a>
        </li>
        <li class="examT">
          <a href="./examt"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  hover:text-blue-400 hover:stroke-blue-400 font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">.+-
                <path d="M7.66667 0.774414V20.9502M14.3333 0.774414V20.9502M2.25 20.9502H19.75C20.4404 20.9502 21 20.2727 21 19.437V2.2876C21 1.45189 20.4404 0.774414 19.75 0.774414H2.25C1.55964 0.774414 1 1.45189 1 2.2876V19.437C1 20.2727 1.55964 20.9502 2.25 20.9502Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Exams Time Table</span>
          </a>
        </li>
        <li class="admit">
          <a href="./admit"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  hover:text-blue-400 hover:stroke-blue-400 font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 6.22266H21M1 7.23145H21M4.07692 14.293H10.2308M4.07692 17.3193H7.15385M3.30769 21.3545H18.6923C19.9668 21.3545 21 19.9995 21 18.3281V4.20508C21 2.53366 19.9668 1.17871 18.6923 1.17871H3.30769C2.03319 1.17871 1 2.53366 1 4.20508V18.3281C1 19.9995 2.03319 21.3545 3.30769 21.3545Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Admit Card</span>
          </a>
        </li>
        <li class="resultt">
          <a href="./examr"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  hover:text-blue-400 hover:stroke-blue-400 font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.05178 12.1397C0.982806 11.8609 0.98274 11.5591 1.05159 11.2802C2.4377 5.6664 6.36838 1.61816 11.0009 1.61816C15.6312 1.61816 19.5604 5.66263 20.9482 11.2724C21.0172 11.5512 21.0173 11.853 20.9484 12.1319C19.5623 17.7457 15.6316 21.7939 10.9991 21.7939C6.36878 21.7939 2.43961 17.7495 1.05178 12.1397Z" stroke="#A2A9B4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.9952 11.7061C13.9952 13.9346 12.6542 15.7412 11.0001 15.7412C9.3459 15.7412 8.00493 13.9346 8.00493 11.7061C8.00493 9.4775 9.3459 7.6709 11.0001 7.6709C12.6542 7.6709 13.9952 9.4775 13.9952 11.7061Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Exams Result</span>
          </a>
        </li>
       <!--
        <li class="cert">
          <a href="./cert"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  hover:text-blue-400 hover:stroke-blue-400 font-semibold text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.55626 8.71561C3.29427 11.1306 3.13513 13.5845 3.0843 16.0708C5.86917 17.4719 8.51791 19.1875 11 21.1807C13.482 19.1875 16.1307 17.4719 18.9156 16.0708C18.8648 13.5845 18.7056 11.1306 18.4436 8.71565M3.55626 8.71561C2.71415 8.37452 1.86184 8.06023 1 7.77357C4.12087 5.13751 7.46827 2.86433 11 1.00488C14.5317 2.86434 17.8791 5.13752 21 7.77358C20.1381 8.06025 19.2858 8.37455 18.4436 8.71565M3.55626 8.71561C6.1404 9.76229 8.62837 11.0613 11 12.5883C13.3716 11.0613 15.8595 9.76233 18.4436 8.71565M5.95138 14.3396C6.3497 14.3396 6.6726 13.9505 6.6726 13.4705C6.6726 12.9906 6.3497 12.6015 5.95138 12.6015C5.55306 12.6015 5.23015 12.9906 5.23015 13.4705C5.23015 13.9505 5.55306 14.3396 5.95138 14.3396ZM5.95138 14.3396V10.0805C7.57796 8.86259 9.26289 7.7472 11 6.74177M4.26144 20.1251C5.38806 18.7675 5.95138 16.9881 5.95138 15.2087V13.4705" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Certifications</span>
          </a>
        </li>-->
        <li class="attend">
          <a href="./attend"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold  hover:text-blue-400 hover:stroke-blue-400 text-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.1532 18.9348C17.407 18.9587 17.6638 18.9709 17.9231 18.9709C18.9983 18.9709 20.0306 18.7613 20.9902 18.3759C20.9967 18.2828 21 18.1887 21 18.0937C21 16.1558 19.6224 14.5849 17.9231 14.5849C17.2793 14.5849 16.6818 14.8103 16.1878 15.1957M17.1532 18.9348C17.1532 18.9468 17.1532 18.9589 17.1532 18.9709C17.1532 19.2341 17.1405 19.4938 17.1158 19.7495C15.314 20.9284 13.2257 21.6025 10.9993 21.6025C8.77298 21.6025 6.6847 20.9284 4.88288 19.7495C4.85814 19.4938 4.84543 19.2341 4.84543 18.9709C4.84543 18.9589 4.84546 18.9469 4.84551 18.9349M17.1532 18.9348C17.1471 17.5587 16.7937 16.2763 16.1878 15.1957M16.1878 15.1957C15.0946 13.2459 13.1793 11.9533 10.9993 11.9533C8.81961 11.9533 6.90458 13.2456 5.81128 15.195M5.81128 15.195C5.31747 14.81 4.72026 14.5849 4.07695 14.5849C2.3776 14.5849 1 16.1558 1 18.0937C1 18.1887 1.00331 18.2828 1.00981 18.3759C1.96944 18.7613 3.00172 18.9709 4.07695 18.9709C4.33576 18.9709 4.59209 18.9588 4.84551 18.9349M5.81128 15.195C5.20514 16.2757 4.85157 17.5585 4.84551 18.9349M14.0763 4.93559C14.0763 6.87346 12.6987 8.44442 10.9993 8.44442C9.29998 8.44442 7.92238 6.87346 7.92238 4.93559C7.92238 2.99772 9.29998 1.42676 10.9993 1.42676C12.6987 1.42676 14.0763 2.99772 14.0763 4.93559ZM20.2302 8.44442C20.2302 9.89783 19.197 11.076 17.9225 11.076C16.648 11.076 15.6148 9.89783 15.6148 8.44442C15.6148 6.99102 16.648 5.8128 17.9225 5.8128C19.197 5.8128 20.2302 6.99102 20.2302 8.44442ZM6.38391 8.44442C6.38391 9.89783 5.35071 11.076 4.0762 11.076C2.80168 11.076 1.76849 9.89783 1.76849 8.44442C1.76849 6.99102 2.80168 5.8128 4.0762 5.8128C5.35071 5.8128 6.38391 6.99102 6.38391 8.44442Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            <span class="flex-1 ml-3 whitespace-nowrap">Attendance</span>
          </a>
        </li>
        <li class="req">
          <a href="./req"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg  hover:text-blue-400 hover:stroke-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
              </svg>
              
            <span class="flex-1 ml-3 whitespace-nowrap">Leave Request</span>
          </a>
        </li>
        <li class="req block md:hidden">
          <a href="./"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white font-semibold text-lg  hover:text-blue-400 hover:stroke-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
            </svg>
            
              
            <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="dash-content mt-2 py-5   bg-white shadow-md  ">
        <div class="title space-y-3">
            
            <span class="inner-name text bg-slate-50 font-extrabold text-textHover m-3 my-10  p-3 rounded-md">Certifications</span>
        </div>
       
          <!--certificates-->
          <div class=" certs"><div class=" mt-9 "><div class="flex"><div class="w-10 h-10 bg-red-400 border-2 text-center  rounded-full border-red-400 font-black text-white text-2xl">!</div><span class="font-black text-gray-900 text-3xl mt-2 ml-2 ">There is no Certificate.</span></div>

        </div></div>
       </div>
            
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="./index.js"></script>
</body>

</html>