var the_email_address=document.getElementById("mail").value;
document.getElementById("submit").onclick=function validateEmailAddress(the_email_address){
    var the_at_symbol=the_email_address.indexOf("@");
    var the_dot_symbol=the_email_address.lastIndexOf(".");
    var the_space_symbol=the_email_address.indexOf(" ");
    if(
        (the_at_symbol!=-1)&&(the_at_symbol!=0)&&(the_dot_symbol!=-1)&&(the_dot_symbol!=0)&&
        (the_dot_symbol>the_at_symbol+1)&&(the_email_address.length>the_dot_symbol+1)&&(the_space_symbol==-1)){
            return;
    }
    else{
        alert("ERROR ! ! ! Email address seems to be incorrect");
        return false;
    }
}