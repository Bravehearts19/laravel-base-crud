require('./bootstrap');

window.addEventListener("DOMContentLoaded", function () {
    const formsDelete = document.querySelectorAll(".form-delete");
  
    formsDelete.forEach((form) => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
  
            const comicTitle = form.comicTitle;
            let msg = "Sei sicuro di voler cancellare questo utente? L'operazione sarà irreversibile."
  
            if(comicTitle){
              msg = `Sei sicuro di voler cancellare l'utente ${ comicTitle.value }? L'operazione sarà irreversibile.`
            }
  
            const result = confirm(msg);
  
            if (result) {
                form.submit();
            }
        });
    });
});