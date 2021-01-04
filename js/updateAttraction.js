let updateForms = document.querySelectorAll(".update_form");
console.log(updateForms.length);

updateForms.forEach(updateForm => {

    updateForm.addEventListener("submit", function(e) {

        let attractionBlock = this.parentNode;
        console.log(attractionBlock);
    
        let request = new XMLHttpRequest();
        request.open("POST", "src/Controller/AttractionController.php");
        let formData = new FormData(updateForm);
        formData.append('form', updateForm);

        let id = parseInt(attractionBlock.getAttribute("id"));
        formData.append('id', id);

        let queryType = 'update';
        formData.append('queryType', queryType);

        request.send(formData);
    
        request.onload = function() {
            console.log(id);
            console.log(this.responseText);
            document.location.reload();
        }
        e.preventDefault();
    });    
});