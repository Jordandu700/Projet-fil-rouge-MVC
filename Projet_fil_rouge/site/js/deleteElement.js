deleteElement();

function deleteElement() {
    let deleteButtons = document.querySelectorAll(".delete");

    deleteButtons.forEach(deleteButton => {

        deleteButton.addEventListener("click", function(e) {

            let attractionBlock = this.parentNode;

            let request = new XMLHttpRequest();
            request.open("POST", "src/Controller/ParcElementController.php");
            let formData = new FormData();

            let id = parseInt(attractionBlock.getAttribute("id"));
            formData.append('id', id);

            let queryType = 'delete';
            formData.append('queryType', queryType);

            request.send(formData);

            request.onload = function() {
                document.location.reload();
            }
        });
    });
}