function formatPrice(input) {
    // We delete any pre-existing commas.
    let value = input.value.replace(/,/g, '');
    
    // نسمح فقط بالأرقام
    value = value.replace(/\D/g, '');
    
    // ننسق الرقم بحيث يحط فاصلة بعد كل 3 أرقام
    input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}