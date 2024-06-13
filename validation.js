function validation(){
    let p_num = document.getElementById("p_num").value;
    
}

const starRegex = /\w/g;
const replacement = "★";

const test = document.getElementById("crd_no")
console.log(test.textContent)
test.innerHTML = test.textContent.replace(starRegex, replacement)