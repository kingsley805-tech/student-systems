document.addEventListener("DOMContentLoaded", () => {
  // References
  const studentsPrompt = document.querySelector(".students-prompt");
  const studentOp = document.querySelector(".student-op");
  const parentsPrompt = document.querySelector(".parents-prompt");
  const parentOp = document.querySelector(".parent-op");
  const studentLog = document.querySelector(".student-log");
  const parentLog = document.querySelector(".parent-log");
  const userInput = document.querySelector(".user-input");
  const passwordInput = document.querySelector(".password-input");
  const checkUsername = document.querySelector(".check-username");
  const checkPassword = document.querySelector(".check-password");
  const checkbox = document.querySelector(".checkbox");
  const forgot = document.querySelector(".forgott");
  const firstButton = document.querySelector(".first-button");
  const mainC=document.querySelector('.main-container');
  const spin=document.querySelector('.spinner')
  const check=document.querySelector('.chk')
 
  function round() {
  
    spin.style.display = 'none';
  }
  
  setTimeout(round, 3000);

  // jQuery code
  $('.user-input').click(function () {
    $('.user-input').css('border', '1px solid #60A5FA')
  })
  $('.password-input').click(function () {
    $('.password-input').css('border', '1px solid #60A5FA')
  })
  $('.student-log').click(function(){
    $('.student-log').css('border-bottom','2px solid #60A5FA')
    $('.parent-log').css('border-bottom','none')
    $('.students-prompt').css('position','static')
    $('.students-prompt').slideDown(1000)
    $('.parents-prompt').slideUp(1000)
  })
  $('.parent-log').click(function(){
    $('.parent-log').css('border-bottom','2px solid #60A5FA')
    $('.student-log').css('border-bottom','none')
    $('.students-prompt').slideUp(1000)
    $('.parents-prompt').slideDown(1000)
  })
  
  
  /* Vanilla JS event listener
  if (firstButton) {
    firstButton.addEventListener("click", (e) => {
      e.preventDefault();
      const userName = userInput.value;
      const password = passwordInput.value;

      // Clear input fields
      userInput.value = '';
      passwordInput.value = '';

      // Student portal
      if (userName.startsWith("Student1") && password.startsWith("Take1234.")) {
        userInput.style.borderColor = "#60A5FA";
        passwordInput.style.borderColor = "#60A5FA";
        // Location when the condition is correct
        location.href = "";
        
  function round() {
  
    spin.style.display = 'none';
  }
  
  setTimeout(round, 3000);
       

        
      } else if (!userName.startsWith("Student1") && !password.startsWith("Take1234.")) {
        userInput.style.borderColor = "#ff9999";
        checkUsername.innerHTML = "Check the username";
        checkUsername.style.color = "#ff9999";
        passwordInput.style.borderColor = "#ff9999";
        checkPassword.innerHTML = "Check the password";
        checkPassword.style.color = "#ff9999";
      }
       else if (userName.startsWith("Parent1") || password.startsWith("Take1234.")) {
        userInput.style.borderColor = "#60A5FA";
        passwordInput.style.borderColor = "#60A5FA";
        // Location when the condition is correct
        location.href = "";
  
        
      } else if (!userName.startsWith("Parent1") || !password.startsWith("Take1234.")) {
        userInput.style.borderColor = "red";
        checkUsername.innerHTML = "Check the username";
        checkUsername.style.color = "red";
        passwordInput.style.borderColor = "red";
        checkPassword.innerHTML = "Check the password";
        checkPassword.style.color = "red";
      } else if(userName.length===0||password.length===0){
        checkUsername.innerHTML='Can`t be empty'
        checkPassword.innerHTML='Can`t be empty'
      }
    });
  }
  forgot.addEventListener('click',(e)=>{
    e.preventDefault()
    forgot.innerHTML='You are not authorized'
    forgot.style.color='red'
    setTimeout(forgots,2000)
    function forgots(){
      forgot.innerHTML='Forgot your password?'
    forgot.style.color='#334155'
    }
  })
  check.onchange=function(e){
    passwordInput.type=check.checked ? 'text' : 'password'
  }
  */
});
//dashboard
//print for exam result///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
  const printBut = document.getElementById('printBut');
  
  const download=document.getElementById('download');

  if (printBut) {
    printBut.addEventListener('click', function () {
      const reports = document.getElementById('report').outerHTML;

      // Create a Blob from the HTML content
      const blob = new Blob([reports], { type: 'text/html' });

      // Create a URL for the Blob
      const url = URL.createObjectURL(blob);

      // Create a new window for printing
      const printWindow = window.open('', '', 'width=800,height=600');

      // Write the HTML content to the new window
      printWindow.document.write(reports);

      // Print the content
      printWindow.print();

      // Clean up by revoking the URL object to release resources
      URL.revokeObjectURL(url);
    });
    //download for exams result//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  } if(download){
    download.addEventListener('click',function(){
      const rep=document.getElementById('report').outerHTML;
      const bllo=new Blob([rep],{type:'text/html'})
      const url=URL.createObjectURL(bllo);
      const a=document.createElement('a');
      a.href=url;
      a.download='report.html'
      a.click()
      URL.revokeObjectURL(url)
    })
  }
   
});
//download for exam table/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded',()=>{

  const downloadButton = document.getElementById('downloadButton');
  const printButton = document.getElementById('printButton');


if (downloadButton) {
    downloadButton.addEventListener('click', function () {
      const timetable = document.getElementById('timetable').outerHTML;

      // Create a Blob from the HTML content
      const blob = new Blob([timetable], { type: 'text/html' });

      // Create a URL for the Blob
      const url = URL.createObjectURL(blob);

      // Create a temporary anchor element
      const a = document.createElement('a');
      a.href = url;
      a.download = 'timetable.html'; // Set the filename

      // Trigger a click event on the anchor element to initiate the download
      a.click();

      // Clean up by revoking the URL object to release resources
      URL.revokeObjectURL(url);
    });
    //print for exam table/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  }if (printButton) {
    printButton.addEventListener('click', function () {
      const timetableHtml = document.getElementById('timetable').outerHTML;

      // Create a Blob from the HTML content
      const blob = new Blob([timetableHtml], { type: 'text/html' });

      // Create a URL for the Blob
      const url = URL.createObjectURL(blob);

      // Create a new window for printing
      const printWindow = window.open('', '', 'width=800,height=600');

      // Write the HTML content to the new window
      printWindow.document.write(timetableHtml);

      // Print the content
      printWindow.print();

      // Clean up by revoking the URL object to release resources
      URL.revokeObjectURL(url);
    });
  }

})
//download for class table//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded',()=>{
  const classtt=document.getElementById('classtt');
  const loadButton=document.getElementById('loadButton');
  if(loadButton){
    loadButton.addEventListener('click',()=>{
      const classt=document.getElementById('classt').outerHTML;
      const Binary=new Blob([classt],{type:'text/html'});
      const url=URL.createObjectURL(Binary);
      const a=document.createElement('a');
      a.href=url;
      a.download='classt.html';
      a.click();
      URL.revokeObjectURL(url)
    })
  }if(classtt){
    classtt.addEventListener('click',()=>{
      const classt=document.getElementById('classt').outerHTML;
      const binary=new Blob([classt],{type:'text/pdf'});
      const url=URL.createObjectURL(binary);
     const print=window.open('','','width=800,height=600');
     print.document.write(classt);
     
     print.print();
     URL.revokeObjectURL(url);

    })
  }
})
//image printer////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded',()=>{
  const printerA=document.getElementById('printer-admit');
  const bothE=document.getElementById('bothE');
  const uploadC=document.getElementById('uploadC')
  const textFlex=document.getElementById('textFlex')
  const imageCont=document.querySelector('.imageCont')
  
  printerA.addEventListener('click',()=>{
    textFlex.style.display='flex';
    textFlex.style.margin='0 1rem 0 1rem';
    imageCont.style.margin='0 0 0 14rem';
   
    const admits=document.querySelector('.admit-card').outerHTML;
    const nary=new Blob([admits],{type:'text/pdf'});
    const url=URL.createObjectURL(nary);
    const print=window.open('','','width=1000,height=800');
    print.document.write(admits);
    print.print()
    URL.revokeObjectURL(url)

  })
})
/// image display in the admitdocument.addEventListener('DOMContentLoaded', () => {
  function displayImage() {
    const fileInput = document.getElementById('image');
    const uploadedImage = document.getElementById('uploaded-image');
    const uploadedImageContainer = document.getElementById('uploaded-image-container');

    if (fileInput.files && fileInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        uploadedImage.src = e.target.result;
        uploadedImageContainer.style.display = 'block'; // Show the container
      };

      reader.readAsDataURL(fileInput.files[0]);
    } else {
      uploadedImage.src = '';
      uploadedImageContainer.style.display = 'none'; // Hide the container
    }
  }
  



  $('.log-out').on('click', function(e) {
    e.preventDefault();
    if (confirm('Are you sure you want to log out 🤔🤔?')) {
      location.href = './Login.html';
    }
  });
  

const body = document.querySelector("body")
    const  nav = document.querySelector("nav")
     const modeToggle = document.querySelector(".dark-light")
     const searchToggle = document.querySelector(".searchToggle")
     const sidebarOpen = document.querySelector(".sidebarOpen")
    const  siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});



      
function round() {
  
  spin.style.display = 'none';
}

setTimeout(round, 3000);