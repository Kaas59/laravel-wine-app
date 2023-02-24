import './bootstrap';

import Alpine from 'alpinejs';

import { Modal } from 'flowbite'
import type { ModalOptions, ModalInterface } from 'flowbite'

const $modalElement: HTMLElement | null = document.querySelector('#modal');

const modalOptions: ModalOptions = {
    placement: 'bottom-right',
    backdrop: 'dynamic',
    backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
    closable: true,
    onHide: () => {
        console.log('modal is hidden');
    },
    onShow: () => {
        console.log('modal is shown');
    },
    onToggle: () => {
        console.log('modal has been toggled');
    }
}

const modal: ModalInterface = new Modal($modalElement, modalOptions);


window.Alpine = Alpine;

Alpine.start();
