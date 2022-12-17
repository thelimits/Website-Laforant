const activate = document.getElementById('activate');
const act = document.getElementById('otp');
activate.addEventListener('submit',(event)=>
{
    event.preventDefault();
    activation();
});

function activation(){
    console.log("sdsd");
    const activate = act.value.trim();
    let mydatas = 
        {
            "activate": activate,
        }
    $.ajax({
        method: "POST",
        url: "manage-system/API/activate.php",
        data: mydatas,
        success:function(mydatas)
        {
            if(mydatas == "already")
            {
                alert("account activate");
                $(".lds-ring ").css("display","flex");
                $(".bggg").css("display","block");
                setTimeout(function()
                {
                    window.location.href = 'login.php';
                },5000);
                
            }
            else
            {
                alert("your activation code is wrong");
                location.reload();
            }

        }
    });
}