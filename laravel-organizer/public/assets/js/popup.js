function proker(tipe = 'create', id = '', name = '', description = '') {

    if (tipe === 'edit') {
        form = document.getElementById('popEditProker-' + id);
        inputElement = form.querySelector("input");
        inputElement.setAttribute("Proker_name", name);
        inputElement.setAttribute("description", description);

        prokerPop = document.getElementById('editProkerPopUp-' + id);
    } else {
        prokerPop = document.getElementById('createProkerPopUp');

    }



    if (prokerPop.classList.contains("block")) {
        prokerPop.classList.remove("block");
        prokerPop.classList.add("hidden", "overflow-hidden");
    } else {
        prokerPop.classList.remove("hidden", "overflow-hidden");
        prokerPop.classList.add("block");
    }
}
