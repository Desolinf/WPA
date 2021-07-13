if('serviceWorker' in navigator){
    navigator.serviceWorker.register('./serviceWorker.js')
    .then(reg=>console.log('Registro del ServiceWorker exitoso',reg))
    .catch(err=>console.warn('Error al tratar de registrar el ServiceWorker',err))
}