export let renderCloseEdit = () => {

    //Es un evento personalizado que se dispara cuando se renderiza el formulario


    let closeEditButton = document.querySelector('.close-edit');
    let table = document.querySelector(".table");
    let edit = document.querySelector(".edit-section");
    let filterSection = document.querySelector(".filter-section");
    let filter = document.querySelector(".filter");

    //Es un evento personalizado que se dispara cuando se renderiza el formulario
    document.addEventListener("renderFormModules", (event => {
        renderCloseEdit();
    }), { once: true });

    closeEditButton.addEventListener('click', () => {
        table.classList.remove("minimized");
        edit.classList.remove("active");
        filterSection.classList.remove("active");
        filter.classList.remove("active");

    });

}