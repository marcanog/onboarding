import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
import 'flowbite';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start();
