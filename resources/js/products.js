const modalCreateProduct = document.getElementById('modal-create-product');
const btnCreateProduct = document.getElementById('btn-create-product');

const openModalCreateProduct = (el) => {
    if (modalCreateProduct.classList.contains('hidden')) {
        modalCreateProduct.classList.remove('hidden');
        modalCreateProduct.classList.add('flex');
    }
}

btnCreateProduct.addEventListener('click', el => openModalCreateProduct(el));
