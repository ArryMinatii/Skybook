function showToast(message,type){

const toast =
document.getElementById("toast");

const toastMessage =
document.getElementById("toastMessage");

const toastIcon =
document.getElementById("toastIcon");

toast.className = "toast";

if(type === "success"){

toast.classList.add("success");
toastIcon.innerHTML = "✅";

}

if(type === "delete"){

toast.classList.add("delete");
toastIcon.innerHTML = "🗑";

}

if(type === "update"){

toast.classList.add("update");
toastIcon.innerHTML = "✏";

}

toastMessage.innerText = message;

toast.classList.add("show");

setTimeout(()=>{

toast.classList.remove("show");

},3000);

}



