let Name=document.querySelector('#name');
let email=document.querySelector('#email');
let form=document.querySelector('form');
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    validate();
})
function validate(){
    let name_val=Name.value.trim();
    let name_pattern=/^[a-zA-Z]+$/;
    let isvalidName=true;
    if(name_val===''){
        setError(Name,'Name is required');
        isvalidName=false;
    }
    else if(!(name_pattern.test(name_val))){
        setError(Name,"Check your name pattern once");
        isvalidName=false;
    }
    else if(name_val.length<3){
        setError(Name,'Name length should not less than 3');
        isvalidName=false;
    }
    else{
        setSuccess(Name);
        isvalidName=true;
    }
    let email_valid=true;
    let email_pattern=/^[a-zA-Z]+[0-9]*@gmail.com$/;
    if(email.value==''){
        setError(email,"Email is required");
        email_valid=false;
    }
    else if(!email_pattern.test(email.value)){
        setError(email,"Email pattern is not matched");
        email_valid=false;
    }
    else{
        setSuccess(email)
    }
    if(isvalidName && email_valid){
        let submit_form=Object.getPrototypeOf(form).submit;
        submit_form.call(form);
    }
}
function setError(input,msg){
    let parent=input.parentElement;
    let small=parent.querySelector('small');
    small.innerText=msg;
    small.style.color="red";
}
function setSuccess(input){
    let parent=input.parentElement;
    let small=parent.querySelector('small');
    small.style.visibility="hidden";
}