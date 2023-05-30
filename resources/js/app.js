import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


window.comic = {
    currentForm: null,
    itemid: null,
    openModal(e, id){
        e.preventDefaul();
        this.itemid = id;
        this.currentForm = e.currentTarget.parentNode;
        const modalinner = getElementById('deleteModal-body');
        modalinner.innerHtml = `sei sicuro di voler eliminare questo elemento`;
        const modale = getElementById('deleteModal');
        modale.modal('show');
    }
}
