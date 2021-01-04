let titleInput = document.querySelector("#title_input");
let imageInput = document.querySelector("#image_input");
let descriptionInput = document.querySelector("#description_input");

let form = document.querySelector("#insert_form");

form.addEventListener("submit", function(e) {
    
    let request = new XMLHttpRequest();
    request.open("POST", "src/Controller/AttractionController.php");

    let formData = new FormData(form);
    formData.append('form', form);
    let id = '';
    formData.append('id', id);
    let queryType = 'add';
    formData.append('queryType', queryType);

    request.send(formData);

    request.onload = function() {
        document.location.reload();
    }
    e.preventDefault();
});