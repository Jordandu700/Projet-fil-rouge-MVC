updateElement();

function updateElement() {
    let updateForms = document.querySelectorAll(".update_form");

    updateForms.forEach(updateForm => {
    
        updateForm.addEventListener("submit", function(e) {
    
            let attractionBlock = this.parentNode;
        
            let request = new XMLHttpRequest();
            request.open("POST", "src/Controller/ParcElementController.php");
            let formData = new FormData(updateForm);
            formData.append('form', updateForm);
    
            let id = parseInt(attractionBlock.getAttribute("id"));
            formData.append('id', id);
    
            let queryType = 'update';
            formData.append('queryType', queryType);
    
            request.send(formData);
        
            request.onload = function() {
                document.location.reload();
            }
            e.preventDefault();
        });    
    });
}