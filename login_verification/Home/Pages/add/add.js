let range=document.querySelectorAll(".inpu");
let text=document.querySelectorAll(".range_text");


range.forEach((input,index)=>{
    
    input.addEventListener("input",()=>{
        let x=input.value;
        text[index].innerHTML=x;
        
        
    });
});