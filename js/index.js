// Nav menu actived while scrolling
var btns = $("#title .navbar-nav .nav-link");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
$(window).scroll(function() {
  var distance = $(window).scrollTop();
  $('.page-section').each(function(i) {
    if ($(this).position().top <= distance + 250) {
      $('.navbar-nav a.active').removeClass('active');
      $('.navbar-nav a').eq(i).addClass('active');
    }
  });
}).scroll();
// Behaviour of LearnMore button
$(".learnmore-content").hide();

$(".learnmore").click(function(){
  $(".learnmore-content").toggle();
})
// Behaviour of features Buttons
var noOfButtons = $(".four-btn").length;
$(".features .feature-2, .feature-3, .feature-4").hide();

for (var i = 0; i < noOfButtons; i++) {
  document.querySelectorAll(".four-btn")[i].addEventListener("click", function() {
    $(".four-btn").removeClass("add-color");
    $(".four-btn").addClass("hover-btn");
    $(".four-btn").removeClass("active-btn");
    addStyleByClick(this.id);
  });
}

function addStyleByClick(btnId) {
  $("#" + btnId).addClass("active-btn");
  $("#" + btnId).removeClass("hover-btn");
  $("#" + btnId).addClass("add-color");
  $(".features .feature-1, .feature-2, .feature-3, .feature-4").hide();
  var noOfFeature=btnId[4];
  if (noOfFeature == 1) {
    $(".features .feature-1").show();
  }
  else if (noOfFeature == 2) {
      $(".features .feature-2").show();
  }
  else if (noOfFeature == 3) {
      $(".features .feature-3").show();
  }
  else if (noOfFeature == 4) {
      $(".features .feature-4").show();
  }
}

// //selecting all required elements
// const dropArea = document.querySelector(".drag-area"),
// dragText = dropArea.querySelector("header"),
// button = dropArea.querySelector("button"),
// input = dropArea.querySelector("input");
// let file; //this is a global variable and we'll use it inside multiple functions
// button.onclick = ()=>{
//   input.click(); //if user click on the button then the input also clicked
// }
// input.addEventListener("change", function(){
//   //getting user select file and [0] this means if user select multiple files then we'll select only the first one
//   file = this.files[0];
//   dropArea.classList.add("active");
//   showFile(); //calling function
// });
// //If user Drag File Over DropArea
// dropArea.addEventListener("dragover", (event)=>{
//   event.preventDefault(); //preventing from default behaviour
//   dropArea.classList.add("active");
//   dragText.textContent = "Release to Upload File";
// });
// //If user leave dragged File from DropArea
// dropArea.addEventListener("dragleave", ()=>{
//   dropArea.classList.remove("active");
//   dragText.textContent = "Drag & Drop to Upload File";
// });
// //If user drop File on DropArea
// dropArea.addEventListener("drop", (event)=>{
//   event.preventDefault();
//   file = event.dataTransfer.files[0];
//   jstophp(file);
//   showFile();
// });

// function jstophp(file){  
  
//   <?php 
//   $phpvar='"+file+"'; 
//   echo $phpvar;?>;
//   }

// function showFile(){
//   let fileType = file.type;
//   let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
//   if(validExtensions.includes(fileType)){
//     let fileReader = new FileReader();
//     fileReader.onload = ()=>{
//       let fileURL = fileReader.result;
//       dropArea.innerHTML = imgTag;
//     }
//     fileReader.readAsDataURL(file);
//   }else{
//     alert("This is not an Image File!");
//     dropArea.classList.remove("active");
//     dragText.textContent = "Drag & Drop to Upload File";
//   }
// }

// Dropzone.autoDiscover = false;

// $(function() {
//   //Dropzone class
//   var myDropzone = new Dropzone(".dropzone", {
//       url: "upload.php",
//       paramName: "file",
//       parallelUploads:3,
//       uploadMultiple:true,
//       acceptedFiles: '.png,.jpeg,.jpg',
//       autoProcessQueue: false,
//       success:function(file, response){
//         if (response == "true") {
//             $("#message").append("<div class='alert alert-success'>Files Uploaded successfully</div>");
//         } else {
//             $("#message").append("<div class='alert alert-danger'>Files can not uploaded</div>");
//         }
//       }
//   });
    
//   $('#uploadBtn').click(function(){    
//     myDropzone.processQueue();
//   });

// });