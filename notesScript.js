$(document).ready(function () {
  all_notes = $("li a");

  all_notes.on("keyup", function () {
      note_title = $(this).find("h2").text();
      note_content = $(this).find("p").text();

      item_key = "list_" + $(this).parent().index();

      data = {
      title: note_title,
      content: note_content
      };

      window.localStorage.setItem(item_key, JSON.stringify(data));
  });

  all_notes.each(function (index) {
      data = JSON.parse(window.localStorage.getItem("list_" + index));

      if (data !== null) {
      note_title = data.title;
      note_content = data.content;

      $(this).find("h2").text(note_title);
      $(this).find("p").text(note_content);
      }
  });
});

function createNote(){
  document.getElementById("list-note").innerHTML += 
  "<li><a href='#' contenteditable> <textarea type='text' name='note' id='note' class='form-control' placeholder='Write note'></textarea><button type='submit' class='btn btn-primary' name='save_button' value='Insert' style='z-index: 1000;'>Submit</button></a></li> ";
}

// var container2 = document.getElementsByClassName("container2")[0];
// var container3 = document.getElementsByClassName("container3")[0];
// var checkIcon = document.getElementById("check-icon");
// var exitIcon = document.getElementById("exit-icon");
// var i = 0;

// exitIcon.addEventListener("click", function(){
//   typeNote();
// })

// checkIcon.addEventListener("click", function(){
//   createNote();
// })

// function typeNote(){
//   if(container3.style.display == "none"){
//     container3.style.display = "block";
//   }
//   else{
//     container3.style.display = "none";
//   }
// }

// function createNote(){
//   var noteText = document.getElementById("note-text").nodeValue;
//   // var node0 = document.createElement("div");
//   // var node1 = document.createElement("h1");

//   var node0 = document.createElement("li");
//   var node1 = document.createElement("h1");

//   node1.innerHTML = noteText;

//   // node1.setAttribute("style", "width:250px; height:250px; font-size:26px; padding:25px; margin-top:10px; overflow:hidden; box-shadow:0px 10px 24px 0px rgba(0,0,0,0.75)");
//   node1.setAttribute("style", "font-size:26px; padding:25px; margin-top:10px; overflow:hidden; box-shadow:0px 10px 24px 0px rgba(0,0,0,0.75)");

//   // node1.style.margin = margin();
//   // node1.style.transform = rotate();
//   // node1.style.background = color();
//   node0.appendChild(node1);

//   ul.insertAdjacentElement("beforeend", node0);

//   node0.addEventListener("mouseenter", function(){
//     node0.style.transform = "scale(1.1)";
//   })

//   node0.addEventListener("mouseleave", function(){
//     node0.style.transform = "scale(1)";
//   })

//   node0.addEventListener("dblclick", function(){
//     node0.remove();
//   })

//   document.getElementById("note-text").value = '';
// }

// function margin(){
//   var random_margin = ["-5px", "1px", "5px", "10px", "15px", "20px"];
//   return random_margin[Math.floor(Math.random() * random_margin.length)];
// }
// function rotate(){
//   var random_rotate = ["rotate(3deg)", "rotate(1deg)", "rotate(-1deg)", "rotate(-3deg)", "rotate(-5deg)", "rotate(-10deg)"];
//   return random_rotate[Math.floor(Math.random() * random_rotate.length)];
// }
// function color(){
//   var random_color = ["#c2ff3d", "#ff3de8", "#3dc2ff", "#04e022", "#bc83e6", "#ebb328"];
  
//   if(i > random_color.length - 1){
//     i = 0;
//   }
//   return random_color[i++]; 
// }
