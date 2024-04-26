//app.js
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'
import "sweetalert2";
import "sweetalert2/dist/sweetalert2.all.js";
import Swal from "sweetalert2";
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import 'flowbite';


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})

const deleteForms = document.querySelectorAll('.deleteForm');

function confirmerSuppression(event) {
    event.preventDefault();

    Swal.fire({
        title: "Êtes-vous sûr?",
        text: "Vous ne pourrez pas revenir en arrière!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Oui, supprimez-le!"
    }).then((result) => {
        if (result.isConfirmed) {
            // Si l'utilisateur confirme, soumettre le formulaire associé
            event.target.submit();
        }
    });
}

// Ajouter un gestionnaire d'événements à chaque formulaire
deleteForms.forEach((form) => {
    form.addEventListener('submit', confirmerSuppression);
});


