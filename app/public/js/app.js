import './bootstrap';

function showFileName(input) {
    if (input.files && input.files[0]) {
        const fileName = input.files[0].name;
        const inputLabel = input.parentNode.querySelector(".input-label");
        inputLabel.innerText = fileName;
    }
}