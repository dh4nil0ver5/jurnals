// event have been loaded
window.addEventListener('load', function () {
  
});

// Get the button:
let mybutton = document.getElementById("btn_back_to_top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) { // this true condition with two rule
    mybutton.style.display = "block";
    mybutton.style.backgroundColor = "gray"; 
    
    mybutton.children[1].style.display = "none";
    mybutton.children[0].style.display = "block"; //menampilkan element 
    mybutton.children[0].style.color = 'white'; // change coler black to white 
    console.log(mybutton.children);
  } else { 
    mybutton.style.display = "block";
    mybutton.style.backgroundColor = "brown";  //kembali ke kondisi semula
    mybutton.children[1].style.display = "block";
    mybutton.children[0].style.display = "none";
  }
}
 
// When the user clicks on the button, scroll to the top of the document
function topFunction() { 
  window.scrollTo({top: 0, behavior: 'smooth'});  // back to top position with smooth action
}
 
// initial query selector div class menu
const change_active = document.querySelector('#container');  
// adding event when initial have created
// console.log(change_active.children[1]);
change_active.addEventListener("mouseover", (event) => {  //kejadian saat cursor di posisi element
  // loop all element
  for (let index = 0; index < change_active.childNodes[3].children.length; index++) {
    // created by indexing element 
    const element = change_active.childNodes[3].children[index];
    // get class child element
    const child_element = element.className;  
    // make condition true if has class name is active
    if(child_element == "active"){ 
      // clean class attribute with first element child
      change_active.childNodes[3].children[0].removeAttribute('class');
    } // nothing condition after true condition 
    else { //condition when have children element from parent
    } 
    element.addEventListener("mouseover", (event) => {
      if(element.children.length>1){
        element.children[1].removeAttribute('class');
        element.children[1].setAttribute('class','sub-treeview-open');
      }else{
        console.log(2);
      }
    });
  } 
}, false);
// console.log(change_active[0].children[0].removeAttribute = "class");
// #TENTANG_KAMI

change_active.addEventListener("mouseout", (event)=>{ // kejadian saat cursor tidak berada pada element 
  for (let index = 0; index < change_active.childNodes[3].children.length; index++) { //looping by index length
    // created by indexing element 
    const element = change_active.childNodes[3].children[index];
    // get class child element
    const child_element = element.className; 
    //  penambahan attribute class pada element pertama (add class attribute at first element)
    change_active.childNodes[3].children[0].setAttribute('class','active');
  }
});