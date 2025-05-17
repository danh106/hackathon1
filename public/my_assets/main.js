function iptru(gia){
    var quanti=document.getElementById("quantity");
    var gtgoithue=document.getElementById("goithue");
    quanti.value--;
    var price=parseFloat(quanti.value)*gia*parseFloat(gtgoithue.options[gtgoithue.selectedIndex].dataset.value1);
    document.getElementById("total_price").innerHTML=price.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}
function ipcong(gia){
    var gtgoithue=document.getElementById("goithue")
    var quanti=document.getElementById("quantity");
    quanti.value++;
    var price=parseFloat(quanti.value)*gia*parseFloat(gtgoithue.options[gtgoithue.selectedIndex].dataset.value1);
    document.getElementById("total_price").innerHTML=price.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}
function tinh_price(gia){
    var gtgoithue=document.getElementById("goithue");
    var quanti=parseFloat(document.getElementById("quantity").value);
    var price=quanti*gia*parseFloat(gtgoithue.options[gtgoithue.selectedIndex].dataset.value1);
    document.getElementById("total_price").innerHTML=price.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}