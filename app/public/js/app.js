// import './bootstrap';

function showFileName(input) {
    if (input.files && input.files[0]) {
        const fileName = input.files[0].name;
        const inputLabel = input.parentNode.querySelector(".input-label");
        inputLabel.innerText = fileName;
    }
}



    let viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    

    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }

    close.onclick = ()=>{
      viewBtn.click();
    }

    copy.onclick = ()=>{
      input.select(); 
      if(document.execCommand("copy")){ 
        copy.innerText = "Copied";
        setTimeout(()=>{
          window.getSelection().removeAllRanges(); 
          copy.innerText = "Copy";
        }, 3000);
      }
    }